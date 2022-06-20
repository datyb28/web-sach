<?php
	require_once("database.php");
	class M_contact extends database{
	//Front
	public function Them_lienhe($name, $email, $phone, $content, $status){
		$sql = "INSERT INTO contacts(l_name, l_email, l_phone, l_content, l_status) VALUES (?,?,?,?,?)";
		$this->setQuery($sql);
		$params = array($name, $email, $phone, $content, $status);
		return $this->execute($params);
	}
	//Back
	//Hiển thị tất cả liên hệ
	public function display_contact($vt=-1,$limit=-1){
		$sql = "select * from contacts";
		if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit";
			}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}


	//Xem liên hệ theo id
	public function display_contact_id($id){
		$sql = "select * from contacts where l_id=?";
		$this->setQuery($sql);
		$params = array($id);
		return $this->loadRow($params);	
	}
	}
?>