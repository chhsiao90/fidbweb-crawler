<?php

# Include libraries
include("CompanyDataWrapper.php");
include("lib/LIB_resolve_addresses.php");
include("lib/KLogger.php");
include("data/Filter.php");
include("SearchFormat.php");

$action = "http://gcis.nat.gov.tw/Fidbweb/factInfoListAction.do";
$page_base = "http://gcis.nat.gov.tw/";
$log = new KLogger("log", KLogger::INFO);
//get the city's data
function get_data_by_city($city_code)
{
	global $action;
	global $log;
	//set the form data
	$ref = "";
	$main = "";
	$method = "POST";
	$region_array = get_region_array($city_code);
	$state_array = get_state_array();
	$searchFormat = new search_format($city_code);
	//log the running information
	$nowDate = date("Ymd");
	$cityName = get_city_name($city_code);
	$log->LogInfo("$nowDate run the sync data for city: $cityName");
	//set the output file path
	$file_name = "output/city" . $city_code . ".txt";
	$fin = fopen($file_name, "a");
	for ($r=0; $r<count($region_array); $r++)
	{
		for ($s=0; $s<count($state_array); $s++)
		{
			$searchFormat->set_method("query");
			$region = $region_array[$r];
			$state = $state_array[$s];
			//set the condition
			$searchFormat->set_addr_city_code_2($region);
			$searchFormat->set_stat_code($state);
			$data_array = $searchFormat->get_data_array();
			$info = $searchFormat->get_search_format_info();
			//get the html
			$response = http($target=$action, $ref, $method, $data_array, EXCL_HEAD);
			$pages = parse_array($response['FILE'], "共找到", "筆資料", EXCL);
			$searchFormat->set_method("nextPage");
			$data_array = $searchFormat->get_data_array();
			$page_count = get_page_count($pages);
			//log the information for search result
			$log->LogInfo("city: $cityName, region: $region, state: $state get the result page: $page_count");
			//trans the page to number to keep get data
			for ($p = 0; $p < $page_count; $p++)
			{
				sleep(rand(1, 3));
				if ($p > 0)
					$response = http($target=$action, $ref, $method, $data_array, EXCL_HEAD);
				get_web_address($response, $fin);
			}
		}
	}
	fclose($fin);
}
//trans the url to excel format
function get_web_address($response, $fin)
{
	global $page_base;
	global $log;
	$pre_web = "";
	$anchor_tags = parse_array($response['FILE'], "<a", "</a", EXCL);
	for ($i=0; $i<count($anchor_tags); $i++)
	{
		$href = get_attribute($anchor_tags[$i], "href");
		$resolved_adres = resolve_address($href, $page_base);
		if ($resolved_adres == $pre_web || stripos($resolved_adres, "javascript"))
			continue;
		$main = set_data(set_string($resolved_adres))."\n";
		$log->LogInfo("url: $href data: $main");
		echo $main;
		fwrite($fin, $main);
		$pre_web = $resolved_adres;
		sleep(rand(1, 3));
	}
	fflush($fin);
}
//get the search result's page quantity
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