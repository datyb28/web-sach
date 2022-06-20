<?php 
require_once "database.php";

class M_website extends database
{
public function display_info(){
	$sql="select * from infomations";
	$this->setQuery($sql);
	return $this->loadAllRow();
}
public function display_detail_info(){
	$sql="select * from infomations where i_id=1";
	$this->setQuery($sql);
	return $this->loadRow();
}
//quản trị
public function edit_info($i_company, $i_address, $i_email, $i_phone, $i_logo, $i_facebook){
	$sql="UPDATE `infomations` SET `i_company`=?,`i_address`=?,`i_email`=?,`i_phone`=?,`i_logo`=?,i_facebook=? WHERE i_id=1";
	$this->setQuery($sql);
	$param=array($i_company, $i_address, $i_email, $i_phone, $i_logo, $i_facebook);
	return $this->execute($param);
}
}
?>