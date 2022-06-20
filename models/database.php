<?php
	class database
	{
		var $_con;
		var $_sql;
		var $_cmd;
		
		function __construct(){
			try{
				$this->_con = new PDO("mysql:host=localhost;dbname=store","root","");
				$this->_con->query("set names utf8");
			}
			catch(PDOException $e)
			{
				die($e->getMessage());
			}
		}
		
		// gan cau lenh truy van
		public function setQuery($sql){
			$this->_sql = $sql;	
		}
		
		// xu ly cau lenh truy van
		public function execute($option = array()){
			$this->_cmd = $this->_con->prepare($this->_sql);
			if($option){
				for($i=0; $i<count($option);$i++){
					$this->_cmd->bindParam($i+1,$option[$i]);	
				}
			}
			$this->_cmd->execute();
			return $this->_cmd;
		}
		
		// hien thi nhieu du lieu
		public function loadAllRows($option = array()){
			if(!$option){
				if(!$result = $this->execute())
					return false;	
			}else{
				if(!$result = $this->execute($option))
					return false;
			}
			return $result->fetchAll(PDO::FETCH_OBJ);	
		}
		
		// hien thi 1 du lieu
		public function loadRow($option = array()){
			if(!$option){
				if(!$result = $this->execute())
					return false;	
			}else{
				if(!$result = $this->execute($option))
					return false;
			}
			return $result->fetch(PDO::FETCH_OBJ);	
		}
		
		// hien thi 1 du lieu
		public function loadRecord($option = array()){
			if(!$option){
				if(!$result = $this->execute())
					return false;	
			}else{
				if(!$result = $this->execute($option))
					return false;
			}
			return $result->fetch(PDO::FETCH_COLUMN);	
		}
		
		public function getLastId(){
			return $this->_con->lastInsertId();	
		}
		
		public function totalRows($option = array()){
			if(!$option){
				if(!$result = $this->execute())
					return false;	
			}else{
				if(!$result = $this->execute($option))
					return false;
			}
			return $this->_cmd->rowCount();	
		}
		
		public function disconnect(){
			$this->_con = NULL;	
		}
		
		
	}
?>