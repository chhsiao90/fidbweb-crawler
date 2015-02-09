<?php
include("lib/LIB_resolve_addresses.php");
include("lib/LIB_parse.php");
include("lib/LIB_http.php");
include("data/Filter.php");

$action = "http://gcis.nat.gov.tw/Fidbweb/factInfoListAction.do";
$page_base = "http://gcis.nat.gov.tw/";
$msg_format = "city: %s, region: %s, state: %s found %d datas<br>";
$html = get_web_sum_data();

function get_web_sum_data()
{
	global $action;
	$ref = "";
	$main = "";
	$method = "POST";
	$data_array = get_post_array();
	$cityName = get_city_name($data_array['cityCode1']);
	$regionName = get_region_name($data_array['cityCode2']);
	$stateName = get_state_name($data_array['statCode']);
	
	if ($_POST['autoCode'] == "1")
	{
		$region_array = get_region_array($_POST['cityCode1']);
		for ($r=0; $r<count($region_array); $r++)
		{
			$data_array['method']  = 'query';
			$data_array['cityCode2'] = $region_array[$r];
			$regionName = get_region_name($data_array['cityCode2']);
			$response = http($target=$action, $ref, $method, $data_array, EXCL_HEAD);
			$count = parse_array($response['FILE'], "共找到", "筆資料", EXCL);
			$info = sprintf($msg_format, $cityName, $regionName, $stateName, $count);
			$main .= $info;
		}
	}
	else if ($_POST['autoCode'] == "2")
	{
		$stat_array = get_state_array();
		for ($r=0; $r<count($stat_array); $r++)
		{
			$data_array['method']  = 'query';
			$data_array['statCode'] = $stat_array[$r];
			$stateName = get_state_name($data_array['statCode']);
			$response = http($target=$action, $ref, $method, $data_array, EXCL_HEAD);
			$count = parse_array($response['FILE'], "共找到", "筆資料", EXCL);
			$info = sprintf($msg_format, $cityName, $regionName, $stateName, $count);
			$main .= $info;
		}
	}
	else
	{
		$response = http($target=$action, $ref, $method, $data_array, EXCL_HEAD);
		$count = parse_array($response['FILE'], "共找到", "筆資料", EXCL);
		$info = sprintf($msg_format, $cityName, $regionName, $stateName, $count);
		$main .= $info;
	}
	
	return $main;
}

function get_post_array()
{
	$data_array['method'] = "query";
	$data_array['addrCityCode1'] = $_POST['addrCityCode1'];
	$data_array['addrCityCode2'] = $_POST['addrCityCode2'];
	$data_array['factAddr'] = $_POST['factAddr'];
	$data_array['orgCode'] = $_POST['orgCode'];
	$data_array['statCode'] = $_POST['statCode'];
	$data_array['cityCode1'] = $_POST['cityCode1'];
	$data_array['cityCode2'] = $_POST['cityCode2'];
	$data_array['profItem'] = "JJ";
	$data_array['tmp_profitem'] = "JJ";
	return $data_array;
}

function get_web_address($response)
{
	global $page_base;
	global $file_name;
	$fin = fopen($file_name, "a");
	$pre_web = "";
	$anchor_tags = parse_array($response['FILE'], "<a", "</a", EXCL);
	for ($i=0; $i<count($anchor_tags); $i++)
	{
		$href = get_attribute($anchor_tags[$i], "href");
		$resolved_adres = resolve_address($href, $page_base);
		if ($resolved_adres == $pre_web || stripos($resolved_adres, "javascript"))
			continue;
		fwrite($fin, $resolved_adres . "\r\n");
		$pre_web = $resolved_adres;
	}
	fclose($fin);
}

function get_page_count($pages) {
	$string = "";
	if (count($pages) > 0) {
		$string = str_replace("共找到", "", $pages[0]);
		$string = str_replace("筆資料", "", $string);
	}
	$count = (int) $string;
	return (int)($count / 10 + 1);
}

?>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=Big5">
	</head>
	<body>
		<?php echo $html; ?>
	</body>
</html>