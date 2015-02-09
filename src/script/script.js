function Buildkey(num) {
 
	
  	var ctr=1;
	document.searchForm.cityCode2.selectedIndex=0;
	document.searchForm.cityCode2.options[0]=new Option("請選擇","JJ");
	
	/*
	定義二階選單內容
	if(num=="第一階下拉選單的值") {	document.CodeForm.subtype.options[ctr]=new Option("第二階下拉選單的顯示名稱","第二階下拉選單的值");	ctr++;	}
	*/

	/*臺北市*/
	if(num=="379100000G" || num=="630") {
		document.searchForm.cityCode2.options[ctr]=new Option("中正區","63005"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大同區","63006"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("中山區","63004"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("松山區","63001"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大安區","63003"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("萬華區","63007"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("信義區","63002"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("士林區","63011"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("北投區","63012"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("內湖區","63010"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("南港區","63009"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("文山區","63008"); ctr++;
		}
	/*基隆市*/
	if(num=="376570000A" || num=="10017") {
		document.searchForm.cityCode2.options[ctr]=new Option("仁愛區","1001704"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("信義區","1001707"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("中正區","1001701"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("中山區","1001705"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("安樂區","1001706"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("暖暖區","1001703"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("七堵區","1001702"); ctr++;
		}
	/*新北市*/
	if(num=="376410000A" || num=="650") {
		document.searchForm.cityCode2.options[ctr]=new Option("新店區","6500600"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("鶯歌區","6500800"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("汐止區","6501100"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("五股區","6501500"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("樹林區","6500700"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("淡水區","6501000"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("蘆洲區","6501400"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("泰山區","6501600"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("林口區","6501700"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("石碇區","6501900"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("烏來區","6502900"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("新莊區","6500500"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("土城區","6501300"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("中和區","6500300"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("坪林區","6502000"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("八里區","6502300"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("平溪區","6502400"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("三峽區","6500900"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("三芝區","6502100"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("貢寮區","6502600"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("金山區","6502700"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("三重區","6500200"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("永和區","6500400"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("深坑區","6501800"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("石門區","6502200"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("萬里區","6502800"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("板橋區","6500100"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("瑞芳區","6501200"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("雙溪區","6502500"); ctr++;
		}
	/*宜蘭縣*/
	if(num=="376420000A" || num=="10002") {
		document.searchForm.cityCode2.options[ctr]=new Option("宜蘭市","1000201");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("頭城鎮","1000204");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("礁溪鄉","1000205");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("壯圍鄉","1000206");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("員山鄉","1000207");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("羅東鎮","1000202");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("三星鄉","1000210");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大同鄉","1000211");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("五結鄉","1000209");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("冬山鄉","1000208");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("蘇澳鎮","1000203");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("南澳鄉","1000212");	ctr++;
		}
	/*新竹縣*/
	if(num=="376440000A" || num=="10004") {
		document.searchForm.cityCode2.options[ctr]=new Option("竹北市","1000401");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("湖口鄉","1000405");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("新豐鄉","1000406");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("新埔鎮","1000403");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("關西鎮","1000404");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("芎林鄉","1000407");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("寶山鄉","1000410");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("竹東鎮","1000402");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("五峰鄉","1000413");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("橫山鄉","1000408");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("尖石鄉","1000412");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("北埔鄉","1000409");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("峨眉鄉","1000411");	ctr++;
		}
	/*新竹市*/
	if(num=="376580000A" || num=="10018") {
		document.searchForm.cityCode2.options[ctr]=new Option("東區","1001801");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("北區","1001802");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("香山區","1001803");	ctr++;
		}
    /*桃園縣*/
	if(num=="376430000A" || num=="10003") {
		document.searchForm.cityCode2.options[ctr]=new Option("中壢市","1000302");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("平鎮市","1000310");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("龍潭鄉","1000309");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("楊梅鎮","1000304");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("新屋鄉","1000311");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("觀音鄉","1000312");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("桃園市","1000301");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("龜山鄉","1000307");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("八德市","1000308");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大溪鎮","1000303");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("復興鄉","1000313");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大園鄉","1000306");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("蘆竹鄉","1000305");	ctr++;
		}
	/*苗栗縣*/
	if(num=="376450000A" || num=="10005") {
		document.searchForm.cityCode2.options[ctr]=new Option("竹南鎮","1000504");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("頭份鎮","1000505");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("三灣鄉","1000516");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("南庄鄉","1000511");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("獅潭鄉","1000517");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("後龍鎮","1000506");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("通霄鎮","1000503");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("苑裡鎮","1000502");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("苗栗市","1000501");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("造橋鄉","1000515");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("頭屋鄉","1000512");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("公館鄉","1000509");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大湖鄉","1000508");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("泰安鄉","1000518");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("銅鑼鄉","1000510");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("三義鄉","1000513");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("西湖鄉","1000514");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("卓蘭鎮","1000507");	ctr++;
		}
	/*臺中市*/
	if(num=="376590000A" || num=="660") {
		document.searchForm.cityCode2.options[ctr]=new Option("中　區","6600100");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("北　區","6600500");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("北屯區","6600800");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("南　區","6600300");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("南屯區","6600700");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("后里區","6601500");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("和平區","6602900");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("外埔區","6602100");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大安區","6602200");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大甲區","6601100");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大肚區","6602400");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大里區","6602800");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大雅區","6601800");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("太平區","6602700");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("新社區","6601900");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("東勢區","6601000");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("東　區","6600200");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("梧棲區","6601400");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("沙鹿區","6601300");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("清水區","6601200");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("潭子區","6601700");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("烏日區","6602300");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("石岡區","6602000");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("神岡區","6601600");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("西　區","6600400");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("西屯區","6600600");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("豐原區","6600900");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("霧峰區","6602600");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("龍井區","6602500");	ctr++;
		}
	/*彰化縣*/
	if(num=="376470000A" || num=="10007") {
		document.searchForm.cityCode2.options[ctr]=new Option("彰化市","1000701");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("芬園鄉","1000709");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("花壇鄉","1000708");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("秀水鄉","1000707");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("鹿港鎮","1000702");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("福興鄉","1000706");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("線西鄉","1000704");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("和美鎮","1000703");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("伸港鄉","1000705");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("員林鎮","1000710");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("社頭鄉","1000717");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("永靖鄉","1000716");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("埔心鄉","1000715");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("溪湖鎮","1000711");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大村鄉","1000713");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("埔鹽鄉","1000714");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("田中鎮","1000712");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("北斗鎮","1000719");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("田尾鄉","1000721");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("埤頭鄉","1000722");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("溪州鄉","1000726");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("竹塘鄉","1000725");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("二林鎮","1000720");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大城鄉","1000724");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("芳苑鄉","1000723");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("二水鄉","1000718");	ctr++;
		}
	/*南投縣*/
	if(num=="376480000A" || num=="10008") {
		document.searchForm.cityCode2.options[ctr]=new Option("南投市","1000801");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("中寮鄉","1000808");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("草屯鎮","1000803");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("國姓鄉","1000810");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("埔里鎮","1000802");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("仁愛鄉","1000813");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("名間鄉","1000806");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("集集鎮","1000805");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("水里鄉","1000811");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("魚池鄉","1000809");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("信義鄉","1000812");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("竹山鎮","1000804");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("鹿谷鄉","1000807");	ctr++;
		}
	/*嘉義縣*/
	if(num=="376500000A" || num=="10010") {
		document.searchForm.cityCode2.options[ctr]=new Option("番路鄉","1001016");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("梅山鄉","1001015");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("竹崎鄉","1001014");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("阿里山鄉","1001018"); ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("中埔鄉","1001013");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大埔鄉","1001017");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("水上鄉","1001012");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("鹿草鄉","1001011");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("太保市","1001001");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("朴子市","1001002");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("東石鄉","1001009");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("六腳鄉","1001008");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("新港鄉","1001007");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("民雄鄉","1001005");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大林鎮","1001004");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("溪口鄉","1001006");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("義竹鄉","1001010");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("布袋鎮","1001003");	ctr++;
		}
    /*嘉義市*/
	if(num=="376600000A" || num=="10020") {
		document.searchForm.cityCode2.options[ctr]=new Option("東區","1002001");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("西區","1002002");	ctr++;
		}
	/*雲林縣*/
	if(num=="376490000A" || num=="10009") {
		document.searchForm.cityCode2.options[ctr]=new Option("斗南鎮","1000902");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大埤鄉","1000908");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("虎尾鎮","1000903");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("土庫鎮","1000905");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("褒忠鄉","1000915");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("東勢鄉","1000914");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("台西鄉","1000916");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("崙背鄉","1000912");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("麥寮鄉","1000913");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("斗六市","1000901");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("林內鄉","1000910");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("古坑鄉","1000907");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("莿桐鄉","1000909");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("西螺鎮","1000904");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("二崙鄉","1000911");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("北港鎮","1000906");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("水林鄉","1000920");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("口湖鄉","1000919");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("四湖鄉","1000918");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("元長鄉","1000917");	ctr++;
		}
	/*臺南市*/
	if(num=="376610000A" || num=="670") {
		document.searchForm.cityCode2.options[ctr]=new Option("中西區","6703700");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("東　區","6703200");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("南　區","6703300");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("北　區","6703400");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("安平區","6703600");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("安南區","6703500");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("永康區","6703100");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("歸仁區","6702800");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("新化區","6701800");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("左鎮區","6702600");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("玉井區","6702300");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("楠西區","6702400");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("南化區","6702500");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("仁德區","6702700");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("關廟區","6702900");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("龍崎區","6703000");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("官田區","6701000");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("麻豆區","6700700");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("佳里區","6701200");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("西港區","6701400");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("七股區","6701500");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("將軍區","6701600");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("學甲區","6701300");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("北門區","6701700");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("新營區","6700100");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("後壁區","6700500");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("白河區","6700300");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("東山區","6700600");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("六甲區","6700900");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("下營區","6700800");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("柳營區","6700400");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("鹽水區","6700200");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("善化區","6701900");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大內區","6701100");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("山上區","6702200");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("新市區","6702000");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("安定區","6702100");	ctr++;
		}
	/*高雄市*/
	if(num=="383100000G" || num=="640") {
		document.searchForm.cityCode2.options[ctr]=new Option("新興區","6400600");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("前金區","6400700");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("苓雅區","6400800");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("鹽埕區","6400100");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("鼓山區","6400200");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("旗津區","6401000");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("前鎮區","6400900");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("三民區","6400500");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("楠梓區","6400400");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("小港區","6401100");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("左營區","6400300");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("仁武區","6401700");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大社區","6401600");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("岡山區","6401900");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("路竹區","6402400");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("阿蓮區","6402300");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("田寮區","6402200");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("燕巢區","6402100");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("橋頭區","6402000");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("梓官區","6402900");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("彌陀區","6402800");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("永安區","6402700");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("湖內區","6402500");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("鳳山區","6401200");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大寮區","6401400");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("林園區","6401300");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("鳥松區","6401800");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大樹區","6401500");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("旗山區","6403000");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("美濃區","6403100");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("六龜區","6403200");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("內門區","6403500");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("杉林區","6403400");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("甲仙區","6403300");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("桃源區","6403700");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("那瑪夏區","6403800");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("茂林區","6403600");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("茄萣區","6402600");	ctr++;
		}
	/*澎湖縣*/
	if(num=="376560000A" || num=="10016") {
		document.searchForm.cityCode2.options[ctr]=new Option("馬公市","1001601");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("西嶼鄉","1001604");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("望安鄉","1001605");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("七美鄉","1001606");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("白沙鄉","1001603");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("湖西鄉","1001602");	ctr++;
		}
	/*屏東縣*/
	if(num=="376530000A" || num=="10013") {
		document.searchForm.cityCode2.options[ctr]=new Option("屏東市","1001301");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("三地門","1001326");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("霧台鄉","1001327");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("瑪家鄉","1001328");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("九如鄉","1001308");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("里港鄉","1001309");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("高樹鄉","1001311");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("鹽埔鄉","1001310");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("長治鄉","1001306");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("麟洛鄉","1001307");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("竹田鄉","1001314");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("內埔鄉","1001313");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("萬丹鄉","1001305");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("潮州鎮","1001302");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("泰武鄉","1001329");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("來義鄉","1001330");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("萬巒鄉","1001312");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("崁頂鄉","1001318");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("新埤鄉","1001315");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("南州鄉","1001320");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("林邊鄉","1001319");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("東港鎮","1001303");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("琉球鄉","1001322");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("佳冬鄉","1001321");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("新園鄉","1001317");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("枋寮鄉","1001316");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("枋山鄉","1001325");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("春日鄉","1001331");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("獅子鄉","1001332");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("車城鄉","1001323");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("牡丹鄉","1001333");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("恆春鎮","1001304");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("滿州鄉","1001324");	ctr++;
		}
	/*臺東縣*/
	if(num=="376540000A" || num=="10014") {
		document.searchForm.cityCode2.options[ctr]=new Option("台東市","1001401");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("綠島鄉","1001411");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("蘭嶼鄉","1001416");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("延平鄉","1001413");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("卑南鄉","1001404");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("鹿野鄉","1001405");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("關山鎮","1001403");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("海端鄉","1001412");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("池上鄉","1001406");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("東河鄉","1001407");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("成功鎮","1001402");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("長濱鄉","1001408");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("太麻里","1001409");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("金峰鄉","1001414");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("大武鄉","1001410");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("達仁鄉","1001415");	ctr++;
		}
	/*花蓮縣*/
	if(num=="376550000A" || num=="10015") {
		document.searchForm.cityCode2.options[ctr]=new Option("花蓮市","1001501");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("新城鄉","1001504");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("秀林鄉","1001511");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("吉安鄉","1001505");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("壽豐鄉","1001506");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("鳳林鎮","1001502");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("光復鄉","1001507");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("豐濱鄉","1001508");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("瑞穗鄉","1001509");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("萬榮鄉","1001512");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("玉里鎮","1001503");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("卓溪鄉","1001513");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("富里鄉","1001510");	ctr++;
		}
	/*金門縣*/
	if(num=="371010000A" || num=="09020") {
		document.searchForm.cityCode2.options[ctr]=new Option("金沙鎮","0902002");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("金湖鎮","0902003");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("金寧鄉","0902004");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("金城鎮","0902001");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("烈嶼鄉","0902005");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("烏坵鄉","0902006");	ctr++;
		}
	/*連江縣*/
	if(num=="371030000A" || num=="09007") {
		document.searchForm.cityCode2.options[ctr]=new Option("南竿鄉","0900701");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("北竿鄉","0900702");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("莒光鄉","0900703");	ctr++;
		document.searchForm.cityCode2.options[ctr]=new Option("東引鄉","0900704");	ctr++;
		}
	document.searchForm.cityCode2.length=ctr;
	document.searchForm.cityCode2.options[0].selected=true;
}

//開啟新視窗顯示產品代碼
function openWindow(version){
	window.open ("http://gcis.nat.gov.tw/Fidbweb/profitem_"+version+".jsp","產品代碼","location=no,scrollbars=yes,resizable=no,menubar=no,status=yes,toolbar=no,width=300,height=300,left=300,top=250");
}
