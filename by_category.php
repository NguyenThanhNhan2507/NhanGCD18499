<?php
	// include_once('Admin/database_app_shop.php');
	include_once('Admin/model/database_shop.php');
	include_once('Admin/model/m_category.php');
	include_once('Admin/model/m_product.php');
	include_once('Admin/model/m_slide.php');
	$categories = get_categories();
	$products = get_products();	
	$slides = get_slides();
	//print_r($categories);
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
		<script type="text/javascript">
		$(function() {
			var pull        = $('#pull');
			menu        = $('nav ul');
			menuHeight  = menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	</script>
	</head>
<body>    
<header id="header" class="">
		<div id="header_logo">
			<div id="logo_left">
				<a href="" title="">
					<img src="img/logo.png" alt="" style="width: 30%">
				</a>
			</div>
			<div id="logo_right">
				<div style="float: left;">
					<ul id="ul_logo">
						<li><a href="" title="" class="li_logo">HOME</a></li>
						<li><a href="by_category.php" title="" class="li_logo">PAGES</a></li>
						<li><a href="" title="" class="li_logo">FEATURES</a></li>
						<li><a href="" title="" class="li_logo">Extensions</a></li>
					</ul>
				</div>
				<div style="float: left;">
					<ul id="ul_login">
						<li><a href="login.php" title="" id="login_header">LOGIN</a></li>
						<li><a href="login.php" title="" id="signup_header">SIGN UP</a></li>
						<li><a href="" title="" id="wishlist_header"><i class="glyphicon glyphicon-heart"></i></a></li>
						<li><a href="" title="" id="list_header"><i class="glyphicon glyphicon-th-list"></i></a></li>
						<li><a href="" title="" id="shopping_header"><i class="glyphicon glyphicon-shopping-cart"></i></a></li>
						<li><a href="" title="" id="shopping_header"><i class="glyphicon glyphicon-search"></i></a></li>

					</ul>
				</div>
			</div>
		</div>
			 	
		</header>
	<!-- main -->
	<section id="body" style="margin-top: 50px;">
		<div class="container">
			<div class="row">
				<div id="sidebar" class="col-md-3">
					<nav id="menu">
						<ul>
							<li class="menu-item">Menu product</li>
						<?php foreach ($categories as $key => $value){?>
							<li class="menu-item"><a href="?action=show_by_category&categoryid=<?php echo $value['categoryid']?>" title=""><?php echo $value['categoryname']; ?></a></li>
						<?php }?>
												
						</ul>
						<!-- <a href="#" id="pull">Danh mục</a> -->
					</nav>

					<div id="banner-l" class="text-center">
						<div class="banner-l-item">
							<a href="#"><img src="img/late1.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/late2.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/late0.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/bests1.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/bests2.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/bests3.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/bests5.jpg" alt="" class="img-thumbnail"></a>
						</div>
					</div>
				</div>

				<div id="main" class="col-md-9">
					<!-- main -->
					

					<div id="banner-t" class="text-center">
						<div class="row">
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="#"><img src="img/late3.jpg" alt="" class="img-thumbnail"></a>
							</div>
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="#"><img src="img/late4.jpg" alt="" class="img-thumbnail"></a>
							</div>
						</div>					
					</div>

					<div id="wrap-inner">
						<div class="products">
							<h3>housework tools</h3>
							<div class="product-list row">
								<?php foreach ($products as $key => $value): ?>
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="Admin/controller/images/product/<?php echo $value['image'] ?>" class="img-thumbnail"></a>
									<p><a href="#"><?php echo $value['productname']; ?></a></p>
									<p class="price"><?php echo $value['price']; ?></p>	  
									<div>
										<a href="details.php?productid=<?php echo $value['productid'] ?>" style="color: blue;" >show more information</a>
									</div> 
									<div>Manchester Ave, Los Angeles, United States</div>
							<div>
								Phone: 	
								<span>123 456 789</span>
							</div>                                   
								</div>
								<?php endforeach; ?>
							</div>                	                	
						</div>				
					</div>
					
					<!-- end main -->
				</div>
			</div>
		</div>
	</section>
	<!-- endmain -->

	<!-- footer -->
<footer id="footer">			
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
			  			
	</footer>
	<!-- end footer -->
	<script>
			jQuery(document).ready(function($) { 
			var TopFixMenu = $("#position");
			$(window).scroll(function(){
	  		if($(this).scrollTop()>60){
			TopFixMenu.show();
			$("div").css("top","0px")	
	        }else{
	        	$("div").css("top","auto")
	        }})})
		</script>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>