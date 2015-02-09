<?php

include("UrlGetter.php");
//use to save the record
$recordFile = "data/record.txt";
$defaultCity= "630";
$cityArray = get_city_array();

$preCityCode = file_get_contents($recordFile) or die($defaultCity);
$nowCityCode = $preCityCode;
$file = fopen($recordFile, "w");
$findCity = false;
//get the next city to run
foreach($cityArray as $key => $value)
{
	if ($findCity) 
	{
		$nowCityCode = $key;
		break;
	}
	else if (strcmp($key, $preCityCode) == 0)
	{
		$findCity = true;
	}
}
if (strcmp($preCityCode, $nowCityCode) == 0)
{
	$nowCityCode = $defaultCity;
}
fwrite($file, $nowCityCode);
get_data_by_city($nowCityCode);
fclose($file);z

?>
