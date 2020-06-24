<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>List Of Categories</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<style>
			body{
				width: 90%;
				margin: 0 auto;
			}
		</style>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">List Of Categories</h1>
		<form action="" method="POST" role="form">
			<button type="submit" class="btn btn-default" name="action" value="form_add_new">Add New</button>
		</form>
		
		<table class="table table-hover">
			<thead>
				<tr>
					<th>CategoryID</th>
					<th>Category Name</th>
					<th>Description</th>
					<th>Create at</th>
					<th>Update at</th>
					<th>By user</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($list_categories as $key => $value):?>
				<tr>
					<td><?php echo $value['categoryid']; ?></td>
					<td><?php echo $value['categoryname']; ?></td>
					<td><?php echo $value['description']; ?></td>
					<td><?php echo $value['create_at']; ?></td>
					<td><?php echo $value['update_at']; ?></td>
					<td><?php echo $value['by_user']; ?></td>
					<td><a href="?action=edit&categoryid=<?php echo $value['categoryid'];?>">Edit</a></td>
					<td><a href="?action=delete&categoryid=<?php echo $value['categoryid'];?>">Delete</a></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>