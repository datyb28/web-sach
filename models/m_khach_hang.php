<?php
    require_once('database.php');
    class M_khach_hang extends database {
        function khach_hang_hoa_don() {
            $query = 'SELECT transactions.tran_id, transactions.tran_buydate, customers.cus_id, customers.cus_name, cus_address, cus_phone, cus_email, order_details.p_price, products.p_id, p_name, o_quantity, products.p_price, products.p_price*o_quantity as thanh_tien, p_image FROM transactions, customers, products, order_details WHERE transactions.tran_id = order_details.tran_id AND transactions.cus_id = customers.cus_id AND order_details.p_id = products.p_id Order by customers.cus_id';
            $this->setQuery($query);
			$khachhangs=$this->loadAllRows();
			$mang=array();
			foreach($khachhangs as $row)
			{
				$mang[]=$row;
			}
            return $mang;
        }
        function themKhachHang($cus_name, $cus_email, $cus_address, $cus_phone, $cus_note) {
            $query = "INSERT INTO customers(cus_name, cus_email, cus_address, cus_phone, cus_note) ";
            $query.= "VALUES(?,?,?,?,?)";
            $this->setQuery($query);
            $result = $this->execute(array($cus_name, $cus_email, $cus_address, $cus_phone, $cus_note));
            if($result)
                return $this->getLastId();  //If query execute successful, the system will return lastID in table khach_hang
            else
            
                return false;
        }
        
        function themHoaDon($cus_id, $tran_buydate, $tran_totalprice) {
            $query = "INSERT INTO transactions(cus_id, tran_buydate, tran_totalprice) VALUES(?,?,?)";
            $this->setQuery($query);
            $result = $this->execute(array($cus_id, $tran_buydate, $tran_totalprice));
            if($result) 
                return $this->getLastId();
            else
                return false;
        }
        
        function themChiTietHoaDon($tran_id, $p_id, $o_quantity, $p_price) {
            $query = "INSERT INTO order_details(tran_id, p_id, o_quantity, p_price) VALUES(?,?,?,?)";
            $this->setQuery($query);
            return $this->execute(array($tran_id, $p_id, $o_quantity, $p_price));
        }
        
        function capNhatDonGia_mon($id) {
            $query = "UPDATE order_details ";
            $query.= "SET p_price = (SELECT p_price FROM products WHERE order_details.p_id = products.p_id) ";
            $query.= "WHERE tran_id= ?";
            $this->setQuery($query);
            return $this->execute(array($ma_hoa_don));
        }
        function capNhatTongTien($ma_hoa_don)
        {
            $query = "UPDATE transactions ";
            $query.= "SET tran_totalprice = (SELECT SUM( o_quantity * p_price ) AS tt FROM order_details WHERE order_details.tran_id = transactions.tran_id) ";
            $query.= "WHERE tran_id = ?";
            $this->setQuery($query);
            return $this->execute(array($ma_hoa_don));
        }
        function getChiTietHoaDon($ma_hoa_don) {
            $query = "SELECT transactions.tran_id, tran_buydate, customers.*, ";
            $query.= "products.p_id,o_quantity,products.p_price,products.p_price*o_quantity as thanh_tien, p_image ";
            $query.= "FROM transactions,customers,products,order_details ";
            $query.= "WHERE transactions.tran_id =order_details.tran_id AND transactions.cus_id = customers.cus_id AND order_details.p_id = products.p_id ";
            $query.= "AND transactions.tran_id = ?";
            $this->setQuery($query);
            return $this->loadAllRows(array($ma_hoa_don));
        }
        public function lay_hoa_don($key)
        {
            $query = "SELECT customers.*,
                    transactions.tran_id,tran_buydate,o_quantity,order_details.tran_id,order_details.p_id
                    o_quantity,order_details.p_price FROM customers,transactions,order_details 
                    WHERE transactions.cus_id=customers.cus_id and transactions.tran_id=order_details.tran_id and customers.cus_id=?";
            $this->setQuery($query);
            return $this->loadAllRows(array($key));
        }
    } 
?>