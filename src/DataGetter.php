<?php
include("UrlGetter.php");
if (count($argv) > 1) {
	echo "Run city number :" . $argv[1];
	get_data_by_city($argv[1]);
}
?>
