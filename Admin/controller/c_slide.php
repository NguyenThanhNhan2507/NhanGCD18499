<?php
	include_once('../model/database_shop.php');
	include_once('../model/m_category.php');
	include_once('../model/m_product.php');
	include_once('../model/m_slide.php');
		
	$action =  filter_input(INPUT_POST, 'action');
	if(empty($action)){
		$action=filter_input(INPUT_GET, 'action');
		if(empty($action)){
			$action = "list_slides";
		}
	}

	switch ($action) {
		case 'list_slides':
			$list_slides = get_slides();
			include('../view/slide/list_slide.php');	
			break;
		case 'form_add_new':
			include('../view/slide/add_slide.php');
			break;
		case 'add_slide':
			$slidename=filter_input(INPUT_POST, 'slidename');
			$description=filter_input(INPUT_POST, 'description');
			$link=filter_input(INPUT_POST, 'link');

			//upload file 
			$tmp_name = $_FILES['image']['tmp_name'];
			$path = getcwd()."/"."images"."/"."slide"."/".$_FILES['image']['name'];
			$success = move_uploaded_file($tmp_name, $path);

			if(!$success){
				echo "Error upload file image";
			}
			$image = $_FILES['image']['name'];

			add_slide($slidename,$description,$image,$link);
			$list_slides = get_slides();
			include('../view/slide/list_slide.php');			
			break;
		case 'delete':
			$slideid=filter_input(INPUT_GET, 'slideid');
			delete_slide($slideid);
			$list_slides = get_slides();
			include('../view/slide/list_slide.php');
			break;		
		default:
			# code...
			break;
	}


?>