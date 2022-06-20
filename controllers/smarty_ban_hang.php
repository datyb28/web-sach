<?php  
	include("smarty/libs/Smarty.class.php");
	class Smarty_ban_hang extends Smarty{
		function Smarty_ban_hang(){
			parent::__construct();
			//Cấu hình
			$this->setCacheDir("smarty/cache/");
			$this->setConfigDir("smarty/configs/");
			$this->setTemplateDir("smarty/templates/");
			$this->setCompileDir("smarty/templates_c/");
		}
	}
?>