<?php 
include_once "database.php";
/**
* 
*/
class M_gio_hang extends database
{
	
	function Hien_thi_gio_hang($vt=-1,$limit=-1)
	{
		$sql="SELECT transactions.*,customers.cus_name,cus_status FROM customers,transactions WHERE customers.cus_id=transactions.cus_id";
		if ($vt>=0 && $limit>0) {
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function Sua_gio_hang($cus_status,$cus_id){
		$sql="UPDATE `customers` SET `cus_status`=? WHERE cus_id=?";
		$this->setQuery($sql);
		return $this->execute(array($cus_status,$cus_id));
	}
	public function Hien_thi_tong_sp($tran_id){
		$sql="SELECT * FROM `order_details` WHERE tran_id=?";
		$this->setQuery($sql);
		return $this->loadAllRows(array($tran_id));
	}
	public function Chon_gh_theo_id($tran_id){
		$sql="select * from transactions WHERE tran_id=?";
		$this->setQuery($sql);
		return $this->loadRow(array($tran_id));
	}
	public function Chon_kh_theo_id($tran_id){
		$sql="select * from customers WHERE cus_id=?";
		$this->setQuery($sql);
		return $this->loadRow(array($tran_id));
	}
	public function Chi_tiet_don_hang($id){
		$sql="select * from order_details,products where order_details.p_id=products.p_id ";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id));
	}
	public function Xoa_san_pham_pbill($id){
		$sql="DELETE FROM `order_details` WHERE tran_id=?";
		$this->setQuery($sql);;
		return $this->execute(array($id));
	}
	public function Xoa_san_pham_bill($id){
		$sql="DELETE FROM `transactions` WHERE tran_id=?";
		$this->setQuery($sql);;
		return $this->execute(array($id));
	}
	public function Xoa_san_pham_cus($id){
		$sql="DELETE FROM `customers` WHERE cus_id=?";
		$this->setQuery($sql);;
		return $this->execute(array($id));
	}
}


 ?>