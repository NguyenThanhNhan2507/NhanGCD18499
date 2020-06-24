<?php
	function get_slides(){
		$db = getDB();// Connect to database
		$query ="SELECT * FROM slides ORDER BY slideid";
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
	function add_slide($slidename,$description,$image,$link){
		$db = getDB();// Connect to database		
		$query ="INSERT INTO slides(slidename,description,image,link)
				VALUES(?,?,?,?)";
		try {
			$statement=$db->prepare($query);
			$statement->bindParam(1,$slidename);//Use paramater
			$statement->bindParam(2,$description);
			$statement->bindParam(3,$image);
			$statement->bindParam(4,$link);
			$statement->execute();
			$statement->closeCursor();

		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}

	function delete_slide($slideid){
		$db = getDB();// Connect to database	
		$query="DELETE FROM slides
				WHERE slideid =?";
		try {
			$statement=$db->prepare($query);
			$statement->bindParam(1,$slideid);//Use paramater
			$statement->execute();
			$statement->closeCursor();
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message;
		}
	}




?>