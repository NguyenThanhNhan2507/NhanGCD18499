<?php
		$dsn = "mysql:host=localhost;dbname=app_shop";
		$username = "root";
		$password = '';
		
		try {
			$db = new PDO($dsn, $username, $password);					
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error connecting to database".$error_message; 
		}

		function get_categories(){
			global $db;
			$query ="SELECT * FROM categories";
			try {
				$statement = $db->prepare($query);
				$statement->execute();
				$result=$statement->fetchAll();
				return $result;
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
			echo "Error excute query".$error_message; 
			}
		}

?>