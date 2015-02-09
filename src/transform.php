<?php
include("CompanyDataWrapper.php");
define ("_FILE_LOC", "output/data.txt");
define ("_FILE_OUT", "output/data.xls");
switch($_REQUEST['op'])
{
	case "process":
		process();
		$html = process_form();
	break;
	
	default:
	    $html = add_form();
}

function add_form()
{
	$main=<<<FORM
<form action="{$_SERVER['PHP_SELF']}" method="post" enctype="multipart/form-data">
	上傳檔案：<input type="file" name="txt">
	<input type="hidden" name="op" value="process">
	<input type="submit" value="執行">
</form>
FORM;
	return $main;
}

function process()
{
	upload_file();
	$data = file_get_contents(_FILE_LOC);
	$web = explode("\r\n", $data);
	$file = fopen(_FILE_OUT, "w");
	fwrite($file, get_title() . "\n");
	for ($i = 0; $i < count($web); $i++)
	{
		$main = set_data(set_string($web[$i]))."\n";
		fwrite($file, $main);
	}
	fclose($file);
}


function process_form()
{
	$main=<<<FORM
<h3>轉換成功</h3>
<a href="data/data.xls">開啟連結</a>
<a href="transform.php">回上一頁</a>
FORM;
	return $main;
}

function upload_file()
{
	move_uploaded_file($_FILES['txt']['tmp_name'], _FILE_LOC);
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