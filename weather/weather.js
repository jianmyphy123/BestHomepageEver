(function ($) {
	'use strict';
	
	function setCookie(name, value) {
		var date = new Date();
		date.setTime(date.getTime() + (10 * 365 * 24 * 60 * 60 * 1000));
		
		document.cookie = name + '=' + value + '; expires=' + date.toUTCString();
	}
	
	function getCookie(name, def) {
		var allCookies = document.cookie.split(';');
		
		for (var i = 0; i < allCookies.length; i++) {
			var nameValue = allCookies[i].trim().split('=');
			if (nameValue[0] === name) {
				return nameValue[1];
			}
		}
		
		return def;
	}
	
	function getLocation(done, geoFailed) {
		var loc = getCookie('weather_city', '');
		
		if (loc) {
			return done({
				city: loc
			});
		}
		
		if (!geoFailed && navigator.geolocation) {
			return navigator.geolocation.getCurrentPosition(function (pos) {
				done({
					lat: pos.coords.latitude,
					lon: pos.coords.longitude
				}, true);
			}, function (err) {
				getLocation(done, true);
			});
		}
		
		$.getJSON('http://ipinfo.io', function (data) {
			var d = data.loc.split(',');
			done({
				lat: parseFloat(d[0]),
				lon: parseFloat(d[1])
			});
		});
	}
	
	function getWeather(opts, done, fail) {
		opts.units = getCookie('weather_units', 'imperial');
		$.getJSON('../weather/weather.php', opts, function (data) {
			if (data && data.ok) {
				done(data);
			} else if (fail instanceof Function) {
				fail();
			}
		});
	}
	
	function reportWeather(weather) {
		$('.weather_temp').html(Math.round(weather.temp) + '&deg;');
		$('.weather_city').text(weather.city.name + ', ' + weather.city.country);
		
		$('.weather_sunrise').text(formatTime(new Date(weather.sunrise * 1000)));
		$('.weather_sunset').text(formatTime(new Date(weather.sunset * 1000)));
		
		if (weather.desc) {
			$('.weather_desc').text(weather.desc);
		}
		
		if (weather.icon) {
			$('.weather_icon').attr('src', getIconSrc(weather.icon));
		}
		
		var report = '';
		for (var i = 0; i < weather.forecast.length && i < 5; i++) {
			report += getForecastHTML(weather.forecast[i]);
		}
		$('#weather_forecast').html(report);
		
		function formatTime(d) {
			var military = getCookie('weather_timeformat', '12') === '24';
			var suffix = '';
			
			if (!military) {
				suffix = d.getHours() >= 12 ? ' PM' : ' AM';
				
				if (d.getHours() > 12) {
					d.setTime(d.getTime() - (12 * 60 * 60 * 1000));
				}
			}
			
			return (military && d.getHours() < 10 ? '0' : '') + d.getHours() + ':' + (d.getMinutes() < 10 ? '0' : '') + d.getMinutes() + suffix;
		}
		
		function getForecastHTML(fc) {
			var icon = fc.icon ? '<img src="' + getIconSrc(fc.icon) +'" />' : ''
			
	<!--	return '<h2>' + fc.day + ': High: ' + Math.round(fc.max_temp) + '&deg; Low: ' + Math.round(fc.min_temp) + '&deg;</h2>'; -->
			return '<h4>' + icon +'<strong>' + fc.day + '</strong>: High: ' + Math.round(fc.max_temp) + '&deg; Low: ' + Math.round(fc.min_temp) + '&deg;</h4>';
		}
		
		function getIconSrc(code) {
			return 'http://openweathermap.org/img/w/' + code + '.png';
		}
	}
	
	var lastCitySearched = -1;
	function searchCity() {
		$('#weather_search_info').text('Loading...');
		
		getWeather({
			name: encodeURIComponent($('#weather_search').val())
		}, function (data) {
			reportWeather(data);
			lastCitySearched = data.city.id;
			$('#weather_city_save').text('Save City');
			$('#weather_search_info').text('');
		}, function () {
			$('#weather_search_info').text('Failed to load weather report');
		});
	}
	
	$('#weather_search').on('keypress', function (event) {
		if (event.which === 13) {
			searchCity();
		}
	});
	
	$('#weather_search_button').on('click', function () {
		searchCity();
	});
	
	$('#weather_city_save').on('click', function () {
		if (lastCitySearched !== -1) {
			setCookie('weather_city', lastCitySearched);
			lastCitySearched = -1;
			$('#weather_city_save').text('Reset City');
			return;
		}
		
		setCookie('weather_city', '');
		init();
	});
	
	function init() {
		getLocation(function (loc, mobile) {
			getWeather(loc, function (data) {
				var cookie_loc = getCookie('weather_city', '');
				if (!cookie_loc && !mobile) {
					setCookie('weather_city', data.city.id);
				}
				
				reportWeather(data);
			}, function () {
				console.log('Could not get weather');
			});
		});
	}
	
	init();
	
	$(getCookie('weather_units', 'imperial') === 'metric' ? '#weather_celsius' : '#weather_fahrenheit').prop('checked', true);
	
	$('input[type=radio][name=weather_units]').change(function () {
		if (this.value === 'metric' || this.value === 'imperial') {
			setCookie('weather_units', this.value);
		}
	});
	
	$(getCookie('weather_timeformat', '12') === '24' ? '#weather_24' : '#weather_12').prop('checked', true);
	
	$('input[type=radio][name=weather_timeformat]').change(function () {
		if (this.value === '12' || this.value === '24') {
			setCookie('weather_timeformat', this.value);
		}
	});
	
}).call(this, jQuery);
