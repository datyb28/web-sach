<?php
	require_once("database.php");
	class M_author extends database{
	
	//Front
	//Hiển thị danh sách sản phẩm
	public function get_authors(){
		$sql = "select * from authors where a_status = 1";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
		
	//Admin
	
	//Thêm
	public function insert_author($a_name, $a_adddate, $a_sort, $a_status){
		$sql = "INSERT INTO authors(a_name, a_adddate, a_sort, a_status) VALUES (?,?,?,?)";
		$this->setQuery($sql);
		$params = array($a_name, $a_adddate, $a_sort, $a_status);
		return $this->execute($params);
	}
	//Sửa
	public function update_author($a_id,$a_name, $a_adddate, $a_sort, $a_status){
		$sql = "UPDATE authors SET a_name=?,a_adddate=?,a_sort=?,a_status=? WHERE a_id = ?";
		$this->setQuery($sql);
		$params = array($a_name, $a_adddate, $a_sort, $a_status, $a_id);
		return $this->execute($params);
	}
	//Xóa 
	public function del_author($id){
		$sql = "delete from authors where a_id=?";
		$this->setQuery($sql);
		$params = array($id);
		return $this->execute($params);
	}
}
?>