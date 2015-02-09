<?php
include("CompanyDataWrapper.php");
define ("_FILE_LOC", "output/data.txt");
define ("_FILE_OUT", "output/data.xls");
switch($_REQUEST['op'])
{
	case "process":
	break;
	
	default:
	    $html = search_form();
}

function search_form()
{
	$main=<<<FORM
<form name="searchForm" action="result.php" method="post" enctype="multipart/form-data">
	<p>模式</p>
	<p>&nbsp;&nbsp;&nbsp;
	  <select name="mode" class="selectMenu">
		  <option value="1">Default</option>
		  <option value="2">Count</option>
	  </select>
	</p>
	
	<p>自動載入</p>
	<p>&nbsp;&nbsp;&nbsp;
	  <select name="autoCode" class="selectMenu">
		  <option value="JJ">請選擇</option>
		  <option value="1">工廠所在地(鄉鎮別)</option>
		  <option value="2">工廠現況</option>
	  </select>
	</p>
	
	<p>工廠組織型態：</p>
	  <p>&nbsp;&nbsp;&nbsp;
	  <select name="orgCode" class="selectMenu"><option value="JJ">請選擇</option>
	  <option value="01">股份有限公司</option>
	  <option value="02">有限公司</option>
	  <option value="03">無限公司</option>
	  <option value="04">兩合公司</option>
	  <option value="05">合夥</option>
	  <option value="06">獨資</option>
	  <option value="07">外國公司認許</option>
	  <option value="08">外國公司報備</option>
	  <option value="09">本國公司之分公司</option>
	  <option value="10">外國公司之分公司</option>
	  <option value="11">合作社</option>
	  <option value="12">農會組織</option>
	  <option value="13">公營</option>
	  <option value="14">漁會</option>
	  <option value="15">大陸公司許可登記</option>
	  <option value="16">大陸公司許可報備</option>
	  <option value="17">大陸公司之分公司</option>
	  <option value="99">其他</option></select>
	</p>
	<p>工廠現況：</p>
	<p>&nbsp;&nbsp;&nbsp;
	<select name="statCode" class="selectMenu"><option value="JJ">請選擇</option>
	  <option value="00">生產中</option>
	  <option value="01">停工</option>
	  <option value="02">歇業</option>
	  <option value="03">設立未登記</option>
	  <option value="04">公告註銷</option>
	  <option value="05">設立許可逾期失效</option>
	  <option value="06">設立許可註銷</option>
	  <option value="07">設立許可撤銷</option>
	  <option value="08">設立許可廢止</option>
	  <option value="09">歇業-遷廠</option>
	  <option value="10">歇業-產業類別變更</option>
	  <option value="11">歇業-關廠</option>
	  <option value="12">校正後廢止</option>
	  <option value="13">勒令停工-工業主管機關</option>
	  <option value="14">勒令停工-勞工主管機關</option>
	  <option value="16">勒令停工-消防主管機關</option>
	  <option value="17">勒令停工-其他</option></select>
	</p>
	<p>工廠所在地(縣市別)：
		
	 <select name="cityCode1" onclick="Buildkey(this.options[this.options.selectedIndex].value);" class="selectMenu"><option value="JJ 請選擇">請選擇</option>
	  <option value="630">臺北市</option>
	  <option value="10017">基隆市</option>
	  <option value="650">新北市</option>
	  <option value="10002">宜蘭縣</option>
	  <option value="10004">新竹縣</option>
	  <option value="10018">新竹市</option>
	  <option value="10003">桃園縣</option>
	  <option value="10005">苗栗縣</option>
	  <option value="660">臺中市</option>
	  <option value="10007">彰化縣</option>
	  <option value="10008">南投縣</option>
	  <option value="10020">嘉義市</option>
	  <option value="10010">嘉義縣</option>
	  <option value="10009">雲林縣</option>
	  <option value="670">臺南市</option>
	  <option value="640">高雄市</option>
	  <option value="10016">澎湖縣</option>
	  <option value="10013">屏東縣</option>
	  <option value="10014">臺東縣</option>
	  <option value="10015">花蓮縣</option>
	  <option value="09020">金門縣</option>
	  <option value="09007">連江縣</option></select>
	</p>

	<p> 工廠所在地(鄉鎮別)：

	  <select name="cityCode2" class="selectMenu">
		  <option value="JJ">請選擇</option>
		</select>
		
	</p>

	<p>產業類別(第九版)：</p>

	<div id="8th" class="displayBlock">
	<select name="profItem" size="1" onchange="insertValue(this.options[this.options.selectedIndex].value);" class="selectMenu"><option value="JJ">請選擇產業類別(第九版)</option>
	  <option value="08">08 食品製造業</option>
	  <option value="09">09 飲料製造業</option>
	  <option value="10">10 菸草製造業</option>
	  <option value="11">11 紡織業</option>
	  <option value="12">12 成衣及服飾品製造業</option>
	  <option value="13">13 皮革、毛皮及其製品製造業</option>
	  <option value="14">14 木竹製品製造業</option>
	  <option value="15">15 紙漿、紙及紙製品製造業</option>
	  <option value="16">16 印刷及資料儲存媒體複製業</option>
	  <option value="17">17 石油及煤製品製造業</option>
	  <option value="18">18 化學材料製造業</option>
	  <option value="19">19 化學製品製造業</option>
	  <option value="20">20 藥品製造業</option>
	  <option value="21">21 橡膠製品製造業</option>
	  <option value="22">22 塑膠製品製造業</option>
	  <option value="23">23 非金屬礦物製品製造業</option>
	  <option value="24">24 基本金屬製造業</option>
	  <option value="25">25 金屬製品製造業</option>
	  <option value="26">26 電子零組件製造業</option>
	  <option value="27">27 電腦、電子產品及光學製品製造業</option>
	  <option value="28">28 電力設備製造業</option>
	  <option value="29">29 機械設備製造業</option>
	  <option value="30">30 汽車及其零件製造業</option>
	  <option value="31">31 其他運輸工具及其零件製造業</option>
	  <option value="32">32 家具製造業</option>
	  <option value="33">33 其他製造業</option></select>
	
	</div>
	<p>
	<input type="text" name="prodItem" maxlength="40" size="25" value="" class="inputBox"><br>
	<input type="hidden" name="prodItemCode" value="">
	</p>
	<p>
	食品類別：<input type="checkbox" name="isFoodAddition" value="on" onclick="setIsFoodAdditionVal()">是食品添加物
	</p>
	<input type="hidden" name="op" value="process">
	<input type="submit" name="submit" value="送出">
</form>
FORM;
	return $main;
}

?>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=Big5">
		<script language="JavaScript">
		<!--
		var loaded = false;
		function reload(){
		  location.reload();
		}
		function init(){
		  document.searchForm.tmp_profitem.value = "JJ";
		  //SelectAreaCode(document.searchForm.agencyCodeAttr.value);
		}
		//-->
		</script>
		<script language="JavaScript" src="script/script.js"></script>
	</head>
	<body>
		<?php echo $html; ?>
	</body>
</html>