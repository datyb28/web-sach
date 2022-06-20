<?php
	require_once("database.php");
	class M_user extends database{
	
	//Front
	//Hiển thị danh sách sản phẩm
	public function get_users($vt=-1,$limit=-1){
		$sql = "select * from users  where u_status = 1";
		if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit";
			}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function get_users_admin($vt=-1,$limit=-1){
		$sql = "select * from users";
		if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit";
			}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}	
	//Admin
	
	//Thêm
	public function insert_user($u_account, $u_password, $u_name, $u_address, $u_permiss, $u_status, $u_email, $u_phone){
		$sql = "INSERT INTO users (u_account, u_password, u_name, u_address, u_permiss, u_status, u_email, u_phone) VALUES (?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		$params = array($u_account, $u_password, $u_name, $u_address, $u_permiss, $u_status, $u_email, $u_phone);
		return $this->execute($params);
	}
	//Sửa
	public function update_user($u_id,$u_account, $u_password, $u_name, $u_address, $u_permiss, $u_status, $u_email, $u_phone){
		$sql = "UPDATE users  SET u_account=?,u_password=?,u_name=?,u_address=?,u_permiss=?,u_status=?,u_email=?,u_phone=? WHERE u_id = ?";
		$this->setQuery($sql);
		$params = array($u_account, $u_password, $u_name, $u_address, $u_permiss, $u_status, $u_email, $u_phone, $u_id);
		return $this->execute($params);
	}
	//Xóa 
	public function del_user($id){
		$sql = "delete from users  where u_id=?";
		$this->setQuery($sql);
		$params = array($id);
		return $this->execute($params);
	}
}
?>