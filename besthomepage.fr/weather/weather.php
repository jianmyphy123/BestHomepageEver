<?php

header('Content-Type: application/json');

$q = '?appid=4f2a33d60d52d18056afb449d5f38514&';

if (isset($_GET['units'])) {
	$q .= 'units=' . $_GET['units'] . '&';
}

$loc = '';

if (isset($_GET['city'])) {
	$loc .= 'id=' . $_GET['city'];
} elseif (isset($_GET['lat']) && isset($_GET['lon'])) {
	$loc .= 'lat=' . $_GET['lat'] . '&lon=' . $_GET['lon'] . '&cnt=1';
} elseif (isset($_GET['name'])) {
	$loc .= 'q=' . $_GET['name'] . '&cnt=1';
} else {
	die('{"ok":false}');
}

$curl = curl_init();
curl_setopt_array($curl, array(
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => 'http://api.openweathermap.org/data/2.5/weather' . $q . $loc
));

$resp = curl_exec($curl);
if (!$resp) {
	die('{"ok":false}');
}

$current = json_decode($resp, true);

curl_setopt($curl, CURLOPT_URL, 'http://api.openweathermap.org/data/2.5/forecast' . $q . 'id=' . $current['id']);

$resp = curl_exec($curl);
if (!$resp) {
	die('{"ok":false}');
}

$forecast = json_decode($resp, true);

curl_close($curl);

if (!isset($current['id'])) {
	die('{"ok":false}');
}

function getIconAndDesc($data, &$out) {
	if (array_key_exists('weather', $data) && count($data['weather']) > 0) {
		$weather = $data['weather'][0];
		
		if (array_key_exists('icon', $weather)) {
			$out['icon'] = $weather['icon'];
		}
		
		if (array_key_exists('description', $weather)) {
			$out['desc'] = ucwords($weather['description']);
		} elseif (array_key_exists('main', $weather)) {
			$out['desc'] = $weather['main'];
		}
	}
}

$ret = array(
	'ok' => true,
	'city' => array(
		'id' => $current['id'],
		'name' => $current['name'],
		'country' => $current['sys']['country']
	),
	'sunrise' => $current['sys']['sunrise'],
	'sunset' => $current['sys']['sunset'],
	'temp' => $current['main']['temp'],
	'forecast' => array()
);

getIconAndDesc($current, $ret);

if (array_key_exists('list', $forecast)) {
	$index = -1;
	$prevDay = '';
	foreach ($forecast['list'] as $data) {
		$day = date('D', $data['dt']);
		$temp = $data['main']['temp'];
		$info = array();
		getIconAndDesc($data, $info);
		
		if ($day != $prevDay) {
			$prevDay = $day;
			$index++;
			
			$icons = array();
			if (array_key_exists('icon', $info)) {
				$icons[] = $info['icon'];
			}
			
			$ret['forecast'][] = array(
				'day' => $day,
				'max_temp' => $temp,
				'min_temp' => $temp,
				'icon' =>  $icons
			);
		} else {
			if ($temp > $ret['forecast'][$index]['max_temp']) {
				$ret['forecast'][$index]['max_temp'] = $temp;
			}
			
			if ($temp < $ret['forecast'][$index]['min_temp']) {
				$ret['forecast'][$index]['min_temp'] = $temp;
			}
			
			if (array_key_exists('icon', $info)) {
				$ret['forecast'][$index]['icon'][] = $info['icon'];
			}
		}
	}
	
	foreach ($ret['forecast'] as &$data) {
		$c = array_count_values($data['icon']);
		if (count($c) > 0) {
			$data['icon'] = array_search(max($c), $c);
		} else {
			unset($data['icon']);
		}
	}
}

echo json_encode($ret);
