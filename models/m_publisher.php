<?php
	require_once("database.php");
	class M_publisher extends database{
	
	//Front
	//Hiển thị danh sách sản phẩm
	public function get_publisher(){
		$sql = "select * from publishers where pl_status = 1";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
		
	//Admin
	
	//Thêm
	public function insert_publisher($pl_name, $pl_adddate, $pl_sort, $pl_status){
		$sql = "INSERT INTO publishers(pl_name, pl_adddate, pl_sort, pl_status) VALUES (?,?,?,?)";
		$this->setQuery($sql);
		$params = array($pl_name, $pl_adddate, $pl_sort, $pl_status);
		return $this->execute($params);
	}
	//Sửa
	public function update_publisher($pl_id,$pl_name, $pl_adddate, $pl_sort, $pl_status){
		$sql = "UPDATE publishers SET pl_name=?,pl_adddate=?,pl_sort=?,pl_status=? WHERE a_id = ?";
		$this->setQuery($sql);
		$params = array($pl_name, $pl_adddate, $pl_sort, $pl_status, $pl_id);
		return $this->execute($params);
	}
	//Xóa 
	public function del_publisher($id){
		$sql = "delete from publishers where pl_id=?";
		$this->setQuery($sql);
		$params = array($id);
		return $this->execute($params);
	}
}
?>