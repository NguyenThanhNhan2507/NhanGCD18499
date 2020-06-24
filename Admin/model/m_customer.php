<?php 
function add_customer($email, $firstname, $lastname,$password)
	{
		$db=getDB();
		$query = "INSERT INTO customers(email,firstname,lastname,password)VALUES(?,?,?,?)";
		try{
			$statement=$db->prepare($query);
			$statement->bindParam(1,$email);
			$statement->bindParam(2,$firstname);
			$statement->bindParam(3,$lastname);
			$statement->bindParam(4,$password);
			$statement->execute();			
			$statement->closeCursor();

		}catch (PDOException $e)
		{/*$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; */
		}
	}
function get_customers(){
		$db = getDB();// Connect to database
		$query ="SELECT * FROM customers ORDER BY customerid";
		try {
			$statement = $db->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			$statement->closeCursor();

			return $result;
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}
function check_login($email,$password){

	$db=getDB();
		$query = "SELECT * FROM customers(email,password)VALUES(?,?)";
		try{
		if ($email == "" || $password =="") {
			echo "email or password is space!";
		}else{
				$sql = "SELECT email, password FROM customers 
				  WHERE email=? AND password=? ";
				$query = $db->prepare($sql);
				$query->execute(array($email,$password));
				if($query->rowCount() > 0) {
				  $_SESSION['email'] = $email;
				 /*header("location:database_shop.php");*/
				 header('Location: http://localhost/day11%20-v2%20-%20Copy/App_shop/home_sp.php');
				} else {
				  echo "Username/Password is wrong";
				}
			}
		}	
		catch (PDOException $e)
		{$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}

	}

?>