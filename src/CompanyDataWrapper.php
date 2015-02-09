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
		$string = str_replace("�@", "", $string);
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
	return "�u�t�n�O�s��\t���q�W��\t�u�t�a�}\t���q �Τ@�s��\t�u�t�t�d�H�m�W\t�u�t��´���A\t�u�t�n�O�֭�~\t�u�t�n�O�֭��\t�u�t�n�O�֭��\t�u�t�n�O���A\t�u�t�]�֭߮���\t�u�t�ꥻ�B\t�u�t�n�O���~�֭�~\t�u�t�n�O���~�֭��\t�u�t�n�O���~�֭��\t�u�t�n�O�o��֭�~\t�u�t�n�O�o��֭��\t�u�t�n�O�o��֭��\t�u�t�n�O���i�o��֭�~\t�u�t�n�O���i�o��֭��\t�u�t�n�O���i�o��֭��\t�̫�֭��ܧ���\t���~�`��\t���~1 �s��\t���~1\t���~2 �s��\t���~2\t���~3 �s��\t���~3\t���~4 �s��\t���~4\t���~5 �s��\t���~5\t���~6 �s��\t���~6\t���~7 �s��\t���~7\t���~8 �s��\t���~8\t\t���~�`��\t���~�s��1\t���~1\t���~�s��2\t���~2\t���~�s��3\t���~3\t���~�s��4\t���~4\t���~�s��5\t���~5\t���~�s��6\t���~6\t���~�s��7\t���~7\t���~�s��8\t���~8\t���~�s��9\t���~9\t���~�s��10\t���~10\t���~�s��11\t���~11\t���~�s��12\t���~12\t\t�̫�@���ե��~��\t�̫�@���ե����G";
}

?>