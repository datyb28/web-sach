<?php
	require_once("database.php");
	class M_customer extends database{
	
	//Front
	//Hiển thị danh sách
	public function get_customer_admin($vt=-1,$limit=-1){
		$sql = "select * from customers";
		if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit";
			}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}	
	//Admin
	
	//Xóa 
	public function del_customer($id){
		$sql = "delete from customers where cus_id=?";
		$this->setQuery($sql);
		$params = array($id);
		return $this->execute($params);
	}
}
?>