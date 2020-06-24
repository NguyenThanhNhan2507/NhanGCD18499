
<?php	
	include_once('Admin/model/database_shop.php');
	include_once('Admin/model/m_customer.php');
	$customers = get_customers();
	$email=filter_input(INPUT_POST,'email');
	$password=filter_input(INPUT_POST,'password');
	$firstname=filter_input(INPUT_POST,'email');
	$lastname=filter_input(INPUT_POST,'password');
	$add_customer = add_customer($email,$password,$firstname,$lastname);

/*	$login_customer = check_login($email,$password);
*/
?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Nguyen Bui Company</title>
	
		<link rel="shortcut icon" href="img/logo.png">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="home.css">
		<link rel="stylesheet" type="text/css" href="css/home.css">
		

	</head>
<body>
	<div id="content" style="border: solid 1px; padding: 20px; background: #ddd;
			 display: <?php echo "$button";	?>;">
          	<?php $login_customer = check_login($email,$password);?></a>
     </div>
<div class="divbody" style="min-width:800px height: 870px;">
	<div class="divbody" style="background-color: #a7e1ef;height: 220px;">
		<div style=" float: left;" class="col-sm-3">
			<img src="img/logo.png" style="width: 40%;padding-top: 7%; padding-left: 2%">
		</div>
		<div style="color: white; float: right; margin-right: 2%">
			<table style="padding-top: 5px;">

				
	<form action="" method="POST" role="form">	
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" name="email" class="form-control" id="" placeholder="Input field">
				<label for="">Password</label>
				<input type="text" name="password" class="form-control" id="" placeholder="Input field">
				<button id="btn2" type="submit" name="action" value="login_customer" class="btn">Login</button>
			</div>
	</form>

				<tr>
					<td></td>
					<td style="padding-top: 10px;">
						<a href="#"
						 style="text-decoration: none;" id="linkforgot" >
						Forgotten account?</a>
					</td>
				</tr>
				</table>
		</div>
	</div>
	<div class="divbody" style="height: 570px;background-color: #F2F3F8">
		<div style="max-width: 1400px;margin: 0 auto">

			<div style="width: 58%;float: left; margin-top: 30px; margin-left: 2%;max-width: 750px;position: center center; ">
				<div class="spdiv">
						
					<p> Nguyen BUi company se mang lai nhung xuc cam tuyet voi nhat cho bạn</p>
				</div>
				<img src="img/blue-sky-clouds-flying-55787.jpg" style="display: block; width: 80%;margin:0 auto;max-width: 450px">
			</div>

			<div style="width: 40%;float: left; margin-top: 30px;max-width: 650px;position: center center; ">
				
				<form action="" method="POST" role="form" enctype="multipart/data=">
				<div>
					<div><span style="font-size: 36px;">Create an account</span></div>
					<div class="_52lr fsm fwn fcg">It's free and always will be.</div>
				</div>
				<div>
					<div style="height: 31px">
						<div style="float: left;width: 57%">
							<input type="text" name="firstname"placeholder="  First Name"style="width: 98%;">
						</div>
						<div style="float: left;width: 42%">
							<input type="text" name="lastname"placeholder="  Last Name"style="width: 98%;" >
						</div>
					</div>
				</div>
				<div>
					<input type="text" name="email"placeholder="  Mobile number or email address"style="width: 98%; margin-top: 10px;">
				</div>
				<div>
					<input type="text" name="password"placeholder="  New password"style="width: 98%; margin-top: 20px;">
				</div>
				<div style="width: 90%">
					<p>
						By clicking Sign Up, you agree to <a href="">our Terms</a>,<a href="">Data Policy </a> and 
						<a href="">Cookie Policy</a>. You may receive SMS notifications from us and can opt out at any time.
					</p>
				</div>
				<div>
					 <button type="submit" name="action" value="add_customer"  class="btn btn-primary">Log up</button>
				</div>
			</form>

			</div>
		</div>
	</div>

</div>
	<div class="container" id="div-last">
		<div class="row">
			  <div class="col-sm-3">
			  	<div>
			  		<p>CONTACT US</p>
			  	</div>
			  	<div>
			  	<p class="nofloat">
			  		<span class="fa fa-map-marker"></span>
			  			Nguyen Bui Company
			  		</p>
			 </div>
			  <div>
			  	<p class="nofloat">
			  		<span class="fa fa-envelope-o"></span>
			  		 	buinguyen1999@gmail.com
			  		</p>
			  </div>
			 		<div>
			  	<p class="nofloat">
			  		<span class="fa fa-phone"></span>
			  		 +84 399 999 669
			  		</p>
			  	</div>
			  	</div>
			  	<div class="col-sm-6"> 
				Address: 69 Ngo Quyen stress, Son Tra, Danang City
			  	</div>

<script language="javascript">

            document.getElementById("btn2").onclick = function () {
                document.getElementById("content").style.display = 'block';
            };

        </script>
</body>
</html>
</body>
</html>