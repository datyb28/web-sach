<?php 
	include("controllers/c_categories.php");
	$c_categories = new C_categories();
	$c_categories->display_category_menu_index();
?>