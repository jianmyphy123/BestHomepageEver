(function () {
	'use strict';
	
	var selectedEngine;
	
	var baseUrls = {
		'bing': 'http://www.bing.com/search?',
		'google': 'http://www.google.com/search?',
		'yahoo': 'http://search.yahoo.com/search?'
	};
	
	var paramNames = {
		'bing': 'q',
		'google': 'q',
		'yahoo': 'p'
	};
	
	$('#search_bing').on('click', function () {
		selectSearchEngine('bing');
	});
	
	$('#search_google').on('click', function () {
		selectSearchEngine('google');
	});
	
	$('#search_yahoo').on('click', function () {
		selectSearchEngine('yahoo');
	});

	function selectSearchEngine(engine) {
		if (selectedEngine !== engine) {
			selectedEngine = engine;
			$('#search_query').css('background-image', 'url("pictures/search/' + selectedEngine + '-tr.png")');
			setCookie('searchengine', selectedEngine);
		}
		
		$('#search_dropdown').dropdown('toggle');
	}
	
	$('#search_go').on('click', function () {
		search($('#search_query').val());
	});
	
	$('#search_query').on('keypress', function (event) {
		if (event.which === 13) {
			search($(this).val());
		}
	});
	
	function search(query) {
		if (!query) {
			return;
		}
		
		var param = {};
		param[paramNames[selectedEngine]] = query;
		
		window.location.href = baseUrls[selectedEngine] + $.param(param);
	}
	
	function setCookie(name, value) {
		var date = new Date();
		date.setTime(date.getTime() + (10 * 365 * 24 * 60 * 60 * 1000));
		
		document.cookie = name + '=' + value + '; expires=' + date.toUTCString();
	}
	
	function getCookie(name) {
		var allCookies = document.cookie.split(';');
		
		for (var i = 0; i < allCookies.length; i++) {
			var nameValue = allCookies[i].trim().split('=');
			if (nameValue[0] === name) {
				return nameValue[1];
			}
		}
	}
	
	function init() {
		$('#search_query').css('background-repeat', 'no-repeat');
		$('#search_query').css('background-position', '99% 50%');
		
		var preferredEngine = getCookie('searchengine');
		if (!preferredEngine) {
			preferredEngine = 'bing';
		}
		
		selectSearchEngine(preferredEngine);
		$('#search_dropdown').dropdown('toggle');
	}
	
	init();
	
}).call(this);
