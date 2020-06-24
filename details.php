<?php
	// include_once('Admin/database_app_shop.php');
	include_once('Admin/model/database_shop.php');
	include_once('Admin/model/m_category.php');
	include_once('Admin/model/m_product.php');
	include_once('Admin/model/m_slide.php');
	$categories = get_categories();
	$products = get_products();	
	$slides = get_slides();

	$productid = filter_input(INPUT_GET, 'productid');
	$product_detail = get_product_by_id($productid);
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
	<!-- header -->
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
		<div class="container-fluid">
			<div class="container">  
			  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner">

			      <div class="item active">
			        <img src="img/banner0.jpg" alt="" style="width:100%;">
			      </div>

			      <div class="item">
			        <img src="img/banner1.jpg" alt="" style="width:100%;">
			      </div>
			    
			      <div class="item">
			        <img src="img/banner2.jpg" alt="" style="width:100%;">
			      </div>
			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>
			  </div>
			</div>
		</div>
	</header>
	<section id="body"  style="margin-top: 50px;">
		<div class="container">
			<div class="row">
				<div id="sidebar" class="col-md-3">
					<nav id="menu">
						<ul>
							<li class="menu-item">Menu product</li>
						<?php foreach ($categories as $key => $value){?>
							<li class="menu-item"><a href="by_category.php?action=show_by_category&categoryid=<?php echo $value['categoryid']?>" title=""><?php echo $value['categoryname']; ?></a></li>
						<?php }?>
												
						</ul>
						<!-- <a href="#" id="pull">Danh mục</a> -->
					</nav>

					<div id="banner-l" class="text-center">
						<div class="banner-l-item">
							<a href="#"><img src="img/banner1.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/banner2.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/bests0.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/banner0.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/bests2.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/bests06.jpg" alt="" class="img-thumbnail"></a>
						</div>
						<div class="banner-l-item">
							<a href="#"><img src="img/bests07.jpg" alt="" class="img-thumbnail"></a>
						</div>
					</div>
				</div>

				<div id="main" class="col-md-9">
					<!-- main -->
					<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
					<div id="slider">
						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner">
							<?php foreach($slides as $key => $value) :?>
								<div class="carousel-item <?php if($key==0){echo "active";}?>">
									<img src="Admin/controller/images/slide/<?php echo $value['image'];?>" alt="Los Angeles" >
								</div>
							<?php endforeach; ?>
								
							</div>

							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
					</div>

					<div id="banner-t" class="text-center">
						<div class="row">
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="#"><img src="img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
							</div>
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="#"><img src="img/home/banner-t-1.png" alt="" class="img-thumbnail"></a>
							</div>
						</div>					
					</div>

					<div id="wrap-inner">
						<div class="products">
							  <div id="wrap-inner">
						<div id="product-info">
							<div class="clearfix"></div>
							<h3><?php echo $product_detail['productname'] ?></h3>
							<div class="row">
								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
									<img src="Admin/controller/images/product/<?php echo $product_detail['image'];?>">
								</div>
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									<p>Price: <span class="price text-right"><?php echo $product_detail['price']; ?></span></p>
									<p class="add-cart text-center"><a href="#">order online</a></p>
								</div>
							</div>							
						</div>
						<div id="product-detail">
							<h3>Product details</h3>
							<p class="text-justify">
								<?php echo $product_detail['description']; ?>
							</p>
						</div>
						<div id="comment">
							<h3>COMMENT</h3>
							<div class="col-md-12 comment">
								<form>
									<div class="form-group">
										<label for="email">Email:</label>
										<input required type="email" class="form-control" id="email" name="email">
									</div>
									<div class="form-group">
										<label for="name">Name:</label>
										<input required type="text" class="form-control" id="name" name="name">
									</div>
									<div class="form-group">
										<label for="cm">comment:</label>
										<textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
									</div>
									<div class="form-group text-center">
										<button type="submit" class="btn btn-default">Send</button>
									</div>
								</form>
							</div>
						</div>
						<div id="comment-list">
							<h4>Some comment from people who used it</h4>
							<ul>
								<li class="com-details">
									Cut many kinds of grass in your garden is easy.
								</li>
							</ul>
							<ul>
								<li class="com-details">
									Cheap
								</li>
							</ul>
							<ul>
								<li class="com-details">
									Good quality, beatiful
								</li>
							</ul>
						</div>
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
	<!-- endfooter -->

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