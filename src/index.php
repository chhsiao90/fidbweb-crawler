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
	<p>�Ҧ�</p>
	<p>&nbsp;&nbsp;&nbsp;
	  <select name="mode" class="selectMenu">
		  <option value="1">Default</option>
		  <option value="2">Count</option>
	  </select>
	</p>
	
	<p>�۰ʸ��J</p>
	<p>&nbsp;&nbsp;&nbsp;
	  <select name="autoCode" class="selectMenu">
		  <option value="JJ">�п��</option>
		  <option value="1">�u�t�Ҧb�a(�m��O)</option>
		  <option value="2">�u�t�{�p</option>
	  </select>
	</p>
	
	<p>�u�t��´���A�G</p>
	  <p>&nbsp;&nbsp;&nbsp;
	  <select name="orgCode" class="selectMenu"><option value="JJ">�п��</option>
	  <option value="01">�ѥ��������q</option>
	  <option value="02">�������q</option>
	  <option value="03">�L�����q</option>
	  <option value="04">��X���q</option>
	  <option value="05">�X��</option>
	  <option value="06">�W��</option>
	  <option value="07">�~�ꤽ�q�{�\</option>
	  <option value="08">�~�ꤽ�q����</option>
	  <option value="09">���ꤽ�q�������q</option>
	  <option value="10">�~�ꤽ�q�������q</option>
	  <option value="11">�X�@��</option>
	  <option value="12">�A�|��´</option>
	  <option value="13">����</option>
	  <option value="14">���|</option>
	  <option value="15">�j�����q�\�i�n�O</option>
	  <option value="16">�j�����q�\�i����</option>
	  <option value="17">�j�����q�������q</option>
	  <option value="99">��L</option></select>
	</p>
	<p>�u�t�{�p�G</p>
	<p>&nbsp;&nbsp;&nbsp;
	<select name="statCode" class="selectMenu"><option value="JJ">�п��</option>
	  <option value="00">�Ͳ���</option>
	  <option value="01">���u</option>
	  <option value="02">���~</option>
	  <option value="03">�]�ߥ��n�O</option>
	  <option value="04">���i���P</option>
	  <option value="05">�]�߳\�i�O������</option>
	  <option value="06">�]�߳\�i���P</option>
	  <option value="07">�]�߳\�i�M�P</option>
	  <option value="08">�]�߳\�i�o��</option>
	  <option value="09">���~-�E�t</option>
	  <option value="10">���~-���~���O�ܧ�</option>
	  <option value="11">���~-���t</option>
	  <option value="12">�ե���o��</option>
	  <option value="13">�ǥO���u-�u�~�D�޾���</option>
	  <option value="14">�ǥO���u-�Ҥu�D�޾���</option>
	  <option value="16">�ǥO���u-�����D�޾���</option>
	  <option value="17">�ǥO���u-��L</option></select>
	</p>
	<p>�u�t�Ҧb�a(�����O)�G
		
	 <select name="cityCode1" onclick="Buildkey(this.options[this.options.selectedIndex].value);" class="selectMenu"><option value="JJ �п��">�п��</option>
	  <option value="630">�O�_��</option>
	  <option value="10017">�򶩥�</option>
	  <option value="650">�s�_��</option>
	  <option value="10002">�y����</option>
	  <option value="10004">�s�˿�</option>
	  <option value="10018">�s�˥�</option>
	  <option value="10003">��鿤</option>
	  <option value="10005">�]�߿�</option>
	  <option value="660">�O����</option>
	  <option value="10007">���ƿ�</option>
	  <option value="10008">�n�뿤</option>
	  <option value="10020">�Ÿq��</option>
	  <option value="10010">�Ÿq��</option>
	  <option value="10009">���L��</option>
	  <option value="670">�O�n��</option>
	  <option value="640">������</option>
	  <option value="10016">���</option>
	  <option value="10013">�̪F��</option>
	  <option value="10014">�O�F��</option>
	  <option value="10015">�Ὤ��</option>
	  <option value="09020">������</option>
	  <option value="09007">�s����</option></select>
	</p>

	<p> �u�t�Ҧb�a(�m��O)�G

	  <select name="cityCode2" class="selectMenu">
		  <option value="JJ">�п��</option>
		</select>
		
	</p>

	<p>���~���O(�ĤE��)�G</p>

	<div id="8th" class="displayBlock">
	<select name="profItem" size="1" onchange="insertValue(this.options[this.options.selectedIndex].value);" class="selectMenu"><option value="JJ">�п�ܲ��~���O(�ĤE��)</option>
	  <option value="08">08 ���~�s�y�~</option>
	  <option value="09">09 ���ƻs�y�~</option>
	  <option value="10">10 �ү�s�y�~</option>
	  <option value="11">11 ��´�~</option>
	  <option value="12">12 ����ΪA���~�s�y�~</option>
	  <option value="13">13 �֭��B��֤Ψ�s�~�s�y�~</option>
	  <option value="14">14 ��˻s�~�s�y�~</option>
	  <option value="15">15 �ȼߡB�ȤίȻs�~�s�y�~</option>
	  <option value="16">16 �L��θ���x�s�C��ƻs�~</option>
	  <option value="17">17 �۪o�ηѻs�~�s�y�~</option>
	  <option value="18">18 �ƾǧ��ƻs�y�~</option>
	  <option value="19">19 �ƾǻs�~�s�y�~</option>
	  <option value="20">20 �ī~�s�y�~</option>
	  <option value="21">21 �󽦻s�~�s�y�~</option>
	  <option value="22">22 �콦�s�~�s�y�~</option>
	  <option value="23">23 �D�����q���s�~�s�y�~</option>
	  <option value="24">24 �򥻪��ݻs�y�~</option>
	  <option value="25">25 ���ݻs�~�s�y�~</option>
	  <option value="26">26 �q�l�s�ե�s�y�~</option>
	  <option value="27">27 �q���B�q�l���~�Υ��ǻs�~�s�y�~</option>
	  <option value="28">28 �q�O�]�ƻs�y�~</option>
	  <option value="29">29 ����]�ƻs�y�~</option>
	  <option value="30">30 �T���Ψ�s��s�y�~</option>
	  <option value="31">31 ��L�B��u��Ψ�s��s�y�~</option>
	  <option value="32">32 �a��s�y�~</option>
	  <option value="33">33 ��L�s�y�~</option></select>
	
	</div>
	<p>
	<input type="text" name="prodItem" maxlength="40" size="25" value="" class="inputBox"><br>
	<input type="hidden" name="prodItemCode" value="">
	</p>
	<p>
	���~���O�G<input type="checkbox" name="isFoodAddition" value="on" onclick="setIsFoodAdditionVal()">�O���~�K�[��
	</p>
	<input type="hidden" name="op" value="process">
	<input type="submit" name="submit" value="�e�X">
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