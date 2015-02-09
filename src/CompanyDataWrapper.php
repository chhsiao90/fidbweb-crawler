<?php
include("lib/LIB_parse.php");
include("lib/LIB_http.php");

$MAX_INDUSTRY = 8;
$MAX_PRODUCT = 12;

# Remove the useless symbol
function set_string($string)
	{
		$string = str_replace("<font size=\"2\">", "", $string);
		$string = str_replace("</font>", "", $string);;
		$string = str_replace("\t", "", $string);
		$string = str_replace("&nbsp;", "", $string);
		$string = str_replace("\n", "", $string);
		$string = str_replace("　", "", $string);
		$string = str_replace(" ", "", $string);
		$string = str_replace("\r", "", $string);
		return $string;
	}

# Set the detail web to a row data	
function set_data($web)
{
	global $MAX_INDUSTRY;
	global $MAX_PRODUCT;
	$webPage = http_get($target=$web, $referer="");
	$name = return_between($webPage['FILE'], "<font color=\"#66FFFF\">", "</font>", EXCL);
	$data = parse_array($webPage['FILE'], "<font size=\"2\">", "</font>");

	$string = set_string($data[2]) . "\t" ;
	$string .= set_string(str_replace("<font color=\"#66FFFF\">", "", $name)) . "\t";
	$string .= set_string($data[6]) . "\t" ;
	$string .= set_string($data[12]) . "\t" ;
	$string .= set_string($data[10]) . "\t" ;
	$string .= set_string($data[14]) . "\t" ;
	$string .= get_year(set_string($data[18])) . "\t" ;
	$string .= get_month(set_string($data[18])) . "\t" ;
	$string .= get_day(set_string($data[18])) . "\t" ;
	$string .= set_string($data[21]) . "\t" ;
	$string .= set_string($data[16]) . "\t" ;
	$string .= "\t";
	$string .= get_year(set_string($data[25])) . "\t" ;
	$string .= get_month(set_string($data[25])) . "\t" ;
	$string .= get_day(set_string($data[25])) . "\t" ;
	$string .= get_year(set_string($data[27])) . "\t" ;
	$string .= get_month(set_string($data[27])) . "\t" ;
	$string .= get_day(set_string($data[27])) . "\t" ;
	$string .= get_year(set_string($data[29])) . "\t" ;
	$string .= get_month(set_string($data[29])) . "\t" ;
	$string .= get_day(set_string($data[29])) . "\t" ;
	$string .= get_date(set_string($data[23])) . "\t" ;

	$array = explode("<BR>", set_string($data[36]));
	$string .= (count($array) - 1) . "\t";
	for ($i = 0; $i < $MAX_INDUSTRY; $i++)
	{
		if ($i < count($array) - 1)
		{
			$string .= substr($array[$i], 0, 2) . "\t" . substr($array[$i], 2, strlen($array[$i]) - 2). "\t";
		}
		else
		{
			$string .= "\t\t";
		}
	}
	$string .= "\t";

	$array = explode("<BR>", set_string($data[38]));
	$string .= (count($array) - 1) . "\t";
	for ($i = 0; $i < $MAX_PRODUCT; $i++)
	{
		if ($i < count($array) - 1)
		{
			$string .= substr($array[$i], 0, 3) . "\t" . substr($array[$i], 3, strlen($array[$i]) - 3). "\t";
		}
		else
		{
			$string .= "\t\t";
		}
	}
	$string .= "\t";
	$string .= set_string($data[31]) . "\t" ;
	$string .= set_string($data[33]);
	return $string;
}

function get_year($str)
{
	if (substr($str, 0, 1) == "1")
		return substr($str, 0, 3);
	else
		return substr($str, 1, 2);
}

function get_month($str)
{
	return substr($str, 3, 2);
}

function get_day($str)
{
	return substr($str, 5, 2);
}

function get_date($str)
{
	if (substr($str, 0, 1) == "1")
		return substr($str, 0, 7);
	else
		return substr($str, 1, 6);
}

function get_title()
{
	return "工廠登記編號\t公司名稱\t工廠地址\t公司 統一編號\t工廠負責人姓名\t工廠組織型態\t工廠登記核准年\t工廠登記核准月\t工廠登記核准日\t工廠登記狀態\t工廠設立核准日期\t工廠資本額\t工廠登記歇業核准年\t工廠登記歇業核准月\t工廠登記歇業核准日\t工廠登記廢止核准年\t工廠登記廢止核准月\t工廠登記廢止核准日\t工廠登記公告廢止核准年\t工廠登記公告廢止核准月\t工廠登記公告廢止核准日\t最後核准變更日期\t產業總數\t產業1 編號\t產業1\t產業2 編號\t產業2\t產業3 編號\t產業3\t產業4 編號\t產業4\t產業5 編號\t產業5\t產業6 編號\t產業6\t產業7 編號\t產業7\t產業8 編號\t產業8\t\t產品總數\t產品編號1\t產品1\t產品編號2\t產品2\t產品編號3\t產品3\t產品編號4\t產品4\t產品編號5\t產品5\t產品編號6\t產品6\t產品編號7\t產品7\t產品編號8\t產品8\t產品編號9\t產品9\t產品編號10\t產品10\t產品編號11\t產品11\t產品編號12\t產品12\t\t最後一次校正年度\t最後一次校正結果";
}

?>