<?php
include_once('../model/database_shop.php');
include_once('../model/m_customer.php');

$action =  filter_input(INPUT_POST, 'action');
	if(empty($action)){
		$action=filter_input(INPUT_GET, 'action');
		if(empty($action)){
			$action = "login";
		}
	}
	switch ($action) {
		case 'login':
			$login = get_customers();
			include('../view/customer/add_customer.php');
			break;
		case 'form_login':
			$login = get_customers();
			include('../view/customer/login.php');
			break;
		case 'add_customer':
			$email =filter_input(INPUT_POST, 'email');
			$firstname = filter_input(INPUT_POST, 'firstname');
			$lastname = filter_input(INPUT_POST, 'lastname');
			$password =filter_input(INPUT_POST, 'password');
			//Call function add_customer
			add_customer($email,$firstname,$lastname,$password);
			$login = get_customers();
			include('../view/customer/add_customer.php');
			break;
		case 'login_customer':
				$email =filter_input(INPUT_POST, 'email');
				$password =filter_input(INPUT_POST, 'password');
				check_login($email,$password);
				
			break;
		default:
			# code...
			break;
		}
?>