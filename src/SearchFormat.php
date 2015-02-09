<?php
class search_format{
	var $method;
	var $orgCode;
	var $cityCode1;
	var $profItem;
	var $tmp_profitem;
	var $addrCityCode2;
	var $statCode;
	
	function search_format($cityCode) {
		$this->method = "query";
		$this->orgCode = "JJ";
		$this->cityCode1 = $cityCode;
		$this->profItem = "JJ";
		$this->tmp_profitem = "JJ";
	}
	
	function get_data_array() {
		$data_array['method'] = $this->method;
		$data_array['orgCode'] = $this->orgCode;
		$data_array['cityCode1'] = $this->cityCode1;
		$data_array['profItem'] = $this->profItem;
		$data_array['tmp_profitem'] = $this->tmp_profitem;
		$data_array['addrCityCode2'] = $this->addrCityCode2;
		$data_array['statCode'] = $this->statCode;
		
		return $data_array;
	}
	
	function set_method($new_method) {
		$this->method = $new_method;
	}

	function set_addr_city_code_2($new_addr_city_code_2) {
		$this->addrCityCode2 = $new_addr_city_code_2;
	}
	
	function set_stat_code($new_stat_code) {
		$this->statCode = $new_stat_code;
	}
	
	function get_search_format_info() {
		$info = "[" . $this->cityCode1 . "]" .
				"[" . $this->addrCityCode2 . "]" .
				"[" . $this->statCode . "]";
		return $info;
	}
}
?>