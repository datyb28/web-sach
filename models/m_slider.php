<?php
	require_once("database.php");
	class M_sliders extends database{
	
	//Front
	//Hiển thị slide
	public function get_sliders(){
		$sql = "select * from sliders  where s_status = 1";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
		
	//Admin
	//Hiển thị slider
	public function get_sliders_admin(){
		$sql = "select * from sliders";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function get_sliders_id($s_id){
		$sql = "select * from sliders where s_id=?";
		$this->setQuery($sql);
		$params = array($s_id);
		return $this->loadRow($params);	
	}
	//Sửa
	public function update_slider($s_id,$s_image, $s_link, $s_button, $s_status){
		$sql = "UPDATE sliders  SET s_image=?,s_link=?,s_button=?,s_status=? WHERE s_id = ?";
		$this->setQuery($sql);
		$params = array($s_image, $s_link, $s_button, $s_status, $s_id);
		return $this->execute($params);
	}
}
?>