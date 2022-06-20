<?php
	require_once("database.php");
	class M_news extends database{
	
	//Front
	//Hiển thị danh sách tin tức
	public function get_news($vt=-1,$limit=-1){
		$sql = "select * from news where n_status = 1 order by n_adddate desc";
		if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit";
			}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	//Xem chi tiết 1 tin tức
	public function news_detail($id){
		$sql = "select * from news where n_id=?";
		$this->setQuery($sql);
		$params = array($id);
		return $this->loadRow($params);	
	}
	//Tìm kiếm tin tức theo tên
	public function search_news($string){
		$sql = "select * from news where n_title like and n_status = 1";
		$this->setQuery($sql);
		$params = array($string);
		return $this->loadRow($params);	
	}
		
	//Admin
	
	//Thêm
	//Hiển thị danh sách tin tức
	public function get_news_admin($vt=-1,$limit=-1){
		$sql = "select * from news";
		if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit";
			}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function insert_news($n_title, $n_image, $n_sum, $n_content, $n_status){
		$sql = "INSERT INTO news(n_title, n_image, n_sum, n_content, n_status) VALUES (?,?,?,?,?)";
		$this->setQuery($sql);
		$params = array($n_title, $n_image, $n_sum, $n_content, $n_status);
		return $this->execute($params);
	}
	//Sửa
	public function update_news($n_id, $n_title, $n_image, $n_sum, $n_content, $n_status){
		$sql = "UPDATE news SET n_title=?,n_image=?,n_sum=?,n_content=?,n_status=? WHERE n_id = ?";
		$this->setQuery($sql);
		$params = array($n_title, $n_image, $n_sum, $n_content, $n_status, $n_id);
		return $this->execute($params);
	}
	//Xóa 
	public function del_news($id){
		$sql = "delete from news where n_id=?";
		$this->setQuery($sql);
		$params = array($id);
		return $this->execute($params);
	}
}
?>