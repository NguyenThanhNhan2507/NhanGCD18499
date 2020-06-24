<?php
	include_once('../model/database_shop.php');
	include_once('../model/m_category.php');
	include_once('../model/m_product.php');
		
	$action =  filter_input(INPUT_POST, 'action');
	if(empty($action)){
		$action=filter_input(INPUT_GET, 'action');
		if(empty($action)){
			$action = "list_products";
		}
	}
	switch ($action) {
		case 'list_products':
			$list_products = get_products();
			include('../view/product/list_products.php');
			break;
		case 'form_add_new':
			$list_categories = get_categories();
			include('../view/product/add_product.php');
			break;
		case 'add_product':
			//Get data from product_form
			$productname=filter_input(INPUT_POST, 'productname');
			$categoryid = filter_input(INPUT_POST, 'categoryid');
			$price=filter_input(INPUT_POST, 'price');
			$description=filter_input(INPUT_POST, 'description');

			//upload file 
			$tmp_name = $_FILES['image']['tmp_name'];
			$path = getcwd()."/"."images"."/"."product"."/".$_FILES['image']['name'];
			$success = move_uploaded_file($tmp_name, $path);

			if(!$success){
				echo "Error upload file image";
			}
			$image = $_FILES['image']['name'];

			$by_user = filter_input(INPUT_POST, 'by_user');
			//call function add_product
			add_product($productname,$categoryid,$price,$description,$image,$by_user);
			$list_products = get_products();
			include('../view/product/list_products.php');
			break;
		case 'delete':
			$productid = filter_input(INPUT_GET, 'productid');
			delete_product($productid);
			$list_products = get_products();
			include('../view/product/list_products.php');
			break;
		case 'edit':
			$productid = filter_input(INPUT_GET, 'productid');
			$product = get_product_by_id($productid);
			$list_categories = get_categories();
			include('../view/product/edit_product.php');
			break;
		case 'update_product':
			//Get data from product_form
			$productid = filter_input(INPUT_POST, 'productid');
			$productname=filter_input(INPUT_POST, 'productname');
			$categoryid = filter_input(INPUT_POST, 'categoryid');
			$price=filter_input(INPUT_POST, 'price');
			$description=filter_input(INPUT_POST, 'description');

			//upload file 
			$tmp_name = $_FILES['image']['tmp_name'];
			$path = getcwd()."/"."images"."/"."product"."/".$_FILES['image']['name'];
			$success = move_uploaded_file($tmp_name, $path);

			if(!$success){
				echo "Error upload file image";
			}
			$image = $_FILES['image']['name'];

			if(empty($image)){
				$product =get_product_by_id($productid);
				$image = $product['image'];
			}

			$by_user = filter_input(INPUT_POST, 'by_user');

			update_product($productid,$productname,$categoryid,$price,$description,$image,$by_user);			
			$list_products = get_products();

			include('../view/product/list_products.php');
			break;
		default:
			# code...
			break;
	}
?>