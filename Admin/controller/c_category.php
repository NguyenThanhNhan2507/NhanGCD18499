<?php
	include_once('../model/database_shop.php');
	include_once('../model/m_category.php');
		
	$action =  filter_input(INPUT_POST, 'action');
	if(empty($action)){
		$action=filter_input(INPUT_GET, 'action');
		if(empty($action)){
			$action = "list_categories";
		}
	}

	switch ($action) {
		case 'list_categories':
			$list_categories = get_categories();
			include('../view/category/list_categories.php');	
			break;
		case 'form_add_new':
			include('../view/category/add_category.php');
			break;
		case 'add_category':
			$categoryname = filter_input(INPUT_POST, 'categoryname');
			$description = filter_input(INPUT_POST, 'description');
			$by_user =filter_input(INPUT_POST, 'by_user');
			//Call function add_category
			add_category($categoryname,$description,$by_user);
			$list_categories = get_categories();
			include('../view/category/list_categories.php');
			break;
		case 'delete':
			$categoryid = filter_input(INPUT_GET, 'categoryid');
			delete_category($categoryid);

			$list_categories = get_categories();
			include('../view/category/list_categories.php');

			break;
		
		case 'edit':
			$categoryid = filter_input(INPUT_GET, 'categoryid');
			$category = get_category_by_id($categoryid);

			include('../view/category/edit_category.php');	
			break;
		case 'update_category':
			$categoryid = filter_input(INPUT_POST, 'categoryid');
			$categoryname=filter_input(INPUT_POST, 'categoryname');
			$description = filter_input(INPUT_POST, 'description');
			$by_user = filter_input(INPUT_POST, 'by_user');
			update_category($categoryid,$categoryname,$description,$by_user);
			$list_categories = get_categories();
			include('../view/category/list_categories.php');
			break;
		default:
			# code...
			break;
	}


?>