<?php
	require_once("database.php");
	class M_product extends database{
	
	//Front
	//Hiển thị danh sách sản phẩm
	public function get_products($vt=-1,$limit=-1){
		$sql = "select * from products where p_status = 1 order by p_adddate desc";
		if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit";
			}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function get_products_feature($vt=-1,$limit=-1){
		$sql = "select * from products where p_feature = 1 order by p_adddate desc";
		if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit";
			}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	//Hiển thị danh sách sp theo parent_id
	public function get_products_parent_id($parent_id){
		$sql = "select * from products,categories where p_status = 1 and parent_id=? and categories.c_id=products.c_id order by p_adddate desc";
		$this->setQuery($sql);
		$params = array($parent_id);
		return $this->loadAllRows($params);	
	}
	public function get_products_parent_id_phan_trang($vt=-1,$limit=-1,$parent_id){
		$sql = "select * from products,categories where p_status = 1 and parent_id=? and categories.c_id=products.c_id order by p_adddate desc";
		if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit";
			}
		$this->setQuery($sql);
		$params = array($parent_id);
		return $this->loadAllRows($params);	
	}
	//Hiển thị sản phẩm mới nhất
	public function get_products_new($vt=-1,$limit=-1){
		$sql = "select * from products where p_status = 1 order by p_adddate desc";
		if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit";
			}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	public function get_products_admin($vt=-1,$limit=-1){
		$sql = "select * from products order by p_adddate desc";
		if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit";
			}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	//Xem chi tiết 1 sản phẩm
	public function product_detail($id){
		$sql = "select * from products where p_id=?";
		$this->setQuery($sql);
		$params = array($id);
		return $this->loadRow($params);	
	}
	//Hiển thị tất cả sản phẩm theo id
	public function get_products_id($vt=-1,$limit=-1,$c_id,$p_id){
		$sql = "select * from products where p_status = 1 and c_id=? and p_id<>?";
		if ($vt >=0 && $limit>0) {
				$sql.=" limit $vt,$limit";
			}
		$this->setQuery($sql);
		$params = array($c_id,$p_id);
		return $this->loadAllRows($params);	
	}
	//Hiển thị sản phẩm theo loại
	public function product_cate($c_id){
		$sql = "select * from products where c_id=? and p_status = 1";
		$this->setQuery($sql);
		$params = array($c_id);
		return $this->loadRow($params);	
	}
	//Tìm kiếm sản phẩm theo tên
	public function search_product($string){
		$sql = "select * from products where p_name like and p_status = 1";
		$this->setQuery($sql);
		$params = array($string);
		return $this->loadRow($params);	
	}
	// Hiển thị danh sách sản phẩm giảm giá
		
		//Hien thi theo tên
	public function Doc_san_pham_theo_ten($vt=-1,$limit=-1,$p_name){
			$sql="select * from products where p_status=1 and p_name like '%$p_name%' ";
			if ($vt >=0 && $limit>0) {
				$sql.=" order by p_id desc limit $vt,$limit ";
				
			}
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
	//Admin
	
	//Thêm
	public function insert_product($p_name, $c_id, $p_price, $p_image, $p_describe, $p_status, $p_sale, $p_feature, $p_page, $a_id, $p_thumbs_img, $pl_id){
		$sql = "INSERT INTO products(p_name, c_id, p_price, p_image, p_describe, p_status, p_sale, p_feature, p_page, a_id, p_thumbs_img, pl_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		$params = array($p_name, $c_id, $p_price, $p_image, $p_describe, $p_status, $p_sale, $p_feature, $p_page, $a_id, $p_thumbs_img, $pl_id);
		return $this->execute($params);
	}
	//Sửa
	public function update_product($p_id,$p_name, $c_id, $p_price, $p_image, $p_describe, $p_status, $p_sale, $p_feature, $p_page, $a_id, $p_thumbs_img, $pl_id){
		$sql = "UPDATE products SET p_name=?,c_id=?,p_price=?,p_image=?,p_describe=?,p_status=?,p_sale=?,p_feature=?,p_page=?,a_id=?,p_thumbs_img=?,pl_id=? WHERE p_id = ?";
		$this->setQuery($sql);
		$params = array($p_name, $c_id, $p_price, $p_image, $p_describe, $p_status, $p_sale, $p_feature, $p_page, $a_id, $p_thumbs_img, $pl_id, $p_id);
		return $this->execute($params);
	}
	//Xóa 
	public function del_product($id){
		$sql = "delete from products where p_id=?";
		$this->setQuery($sql);
		$params = array($id);
		return $this->execute($params);
	}
	public function lay_mon_an_cho_gio_hang($chuoi)
        {
            $query="Select * from products where p_id in($chuoi)";
			$this->setQuery($query);
			return $this->loadAllRows();
        }
	}
?>