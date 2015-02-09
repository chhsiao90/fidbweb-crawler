<?php
include("lib/LIB_resolve_addresses.php");
include("lib/LIB_parse.php");
include("lib/LIB_http.php");
include("data/Filter.php");

$file_name = "output/" . date("YmdHis") . ".txt";
$action = "http://gcis.nat.gov.tw/Fidbweb/factInfoListAction.do";
$page_base = "http://gcis.nat.gov.tw/";
$html = "";
$mode = $_POST['mode'];
if ($mode == "1")
	$html = get_web_data();
else if ($mode == "2")
	$html = get_web_sum_data();

function get_web_data()
{
	global $action;
	global $file_name;
	$ref = "";
	$main = "";
	$method = "POST";
	$data_array = get_post_array();
	
	if ($_POST['autoCode'] == "1")
	{
		$region_array = get_region_array($_POST['cityCode1']);
		for ($r=0; $r<count($region_array); $r++)
		{
			$data_array['method']  = 'query';
			$data_array['cityCode2'] = $region_array[$r];
			$response = http($target=$action, $ref, $method, $data_array, EXCL_HEAD);
			$data_array['method']  = 'nextPage';
			$pages = parse_array($response['FILE'], "共找到", "筆資料", EXCL);
			$page_count = get_page_count($pages);
			for ($p = 0; $p < $page_count; $p++)
			{
				if ($p > 0)
					$response = http($target=$action, $ref, $method, $data_array, EXCL_HEAD);
				get_web_address($response);
			}
		}
	}
	else if ($_POST['autoCode'] == "2")
	{
		$stat_array = get_state_array();
		for ($r=0; $r<count($stat_array); $r++)
		{
			$data_array['method']  = 'query';
			$data_array['statCode'] = $stat_array[$r];
			$response = http($target=$action, $ref, $method, $data_array, EXCL_HEAD);
			$data_array['method']  = 'nextPage';
			$pages = parse_array($response['FILE'], "共找到", "筆資料", EXCL);
			$page_count = get_page_count($pages);
			for ($p = 0; $p < $page_count; $p++)
			{
				if ($p > 0)
					$response = http($target=$action, $ref, $method, $data_array, EXCL_HEAD);
				get_web_address($response);
			}
		}
	}
	else
	{
		$response = http($target=$action, $ref, $method, $data_array, EXCL_HEAD);
		$pages = parse_array($response['FILE'], "<option", "</option", EXCL);
		$data_array['method']  = 'nextPage';
		$pages = parse_array($response['FILE'], "共找到", "筆資料", EXCL);
		$page_count = get_page_count($pages);
		for ($p = 0; $p < $page_count; $p++)
		{
			if ($p > 0)
				$response = http($target=$action, $ref, $method, $data_array, EXCL_HEAD);
			get_web_address($response);
		}
	}
	
	$main=<<<FORM
<h3>轉換成功</h3>
<a href="{$file_name}">下載</a>
<a href="index.php">回上一頁</a>
FORM;
	return $main;
}

function get_web_sum_data()
{
	global $action;
	$ref = "";
	$main = "";
	$method = "POST";
	$msg_format = "City: %s, Region: %s, State: %s => Count: %s<BR> ";
	$data_array = get_post_array();
	$cityName = get_city_name($data_array['cityCode1']);
	$regionName = get_region_name($data_array['cityCode2']);
	$stateName = get_state_name($data_array['statCode']);
	
	$region_array = get_region_array($_POST['cityCode1']);
	$state_array = get_state_array();
	for ($r = 0; $r<count($region_array); $r++)
	{
		$data_array['cityCode2'] = $region_array[$r];
		$regionName = get_region_name($data_array['cityCode2']);
		for ($s = 0; $s < count($state_array); $s++)
		{
			$data_array['statCode'] = $state_array[$s];
			$stateName = get_state_name($data_array['statCode']);
			$response = http($target=$action, $ref, $method, $data_array, EXCL_HEAD);
			$pages = parse_array($response['FILE'], "共找到", "筆資料", EXCL);
			$count = get_total_count($pages);
			$info = sprintf($msg_format, $cityName, $regionName, $stateName, $count);
			$main .= $info;
		}
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

function get_total_count($pages) {
	$string = "";
	if (count($pages) > 0) {
		$string = str_replace("共找到", "", $pages[0]);
		$string = str_replace("筆資料", "", $string);
	}
	return $string;
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