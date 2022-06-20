<?php  
	require_once("database.php");
	class M_categories extends database{


		//Front
		//Hiển thị danh sách danh mục
		public function Doc_loai_theo_p_id($parent_id){
			$sql="select * from categories where parent_id=? and c_status=1";
			$this->setQuery($sql);
			return $this->loadAllRows(array($parent_id_id));

		}
		public function get_categories(){
			$sql = "select * from categories";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		//Hiển thị danh mục theo danh mục cha
		public function get_category_parent($parent_id){
			$sql = "select * from categories where c_status = 1 and parent_id=?";
			$this->setQuery($sql);
			$params = array($parent_id);
			return $this->loadAllRows($params);
		}
		//Hiển thị danh mục con trong danh mục cha
		public function get_category_parent_id(){
			$sql = "select * from categories where parent_id<>0";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		//Admin
		//Thêm danh mục
		public function insert_categories($c_name, $c_summary, $c_status, $parent_id){
			$sql = "INSERT INTO categories(c_name, c_summary, c_status, parent_id) VALUES (?,?,?,?)";
			$this->setQuery($sql);
			$params = array($c_name, $c_summary, $c_status, $parent_id);
			return $this->execute($params);
		}
		//Sửa
		public function update_categories($c_id, $c_name, $c_summary, $c_status, $c_adddate, $parent_id, $c_sort){
			$sql = "UPDATE categories SET c_name=?, c_summary=?, c_status=?, c_adddate=?, parent_id=?, c_sort=? WHERE c_id=?";
			$this->setQuery($sql);
			$params = array($c_name, $c_summary, $c_status, $c_adddate, $parent_id, $c_sort, $c_id);
			return $this->execute($params);
		}
		//Xóa
		public function del_categories($c_id){
			$sql = "delete from products where c_id=?";
			$this->setQuery($sql);
			$params = array($c_id);
			return $this->execute($params);
		}
	}
?>