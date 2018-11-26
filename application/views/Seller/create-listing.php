<!DOCTYPE html>
	<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<title>Create New Listing</title>

		<!-- Shortcut Icon Section Start -->
		<link rel="shortcut icon" href="<?= base_url('assets/images/logo/shortcut_00.png') ?>">
		<!-- <link rel="stylesheet" type="text/css" href="../assets/images/logo/shortcut_00.png"> -->
		<!-- Shortcut Icon Section End -->

		<!-- Materialize CSS file include -->
		<?= link_tag('assets/materialize/css/materialize.css'); ?>
		<!-- <link rel="stylesheet" type="text/css" href="../assets/materialize/css/materialize.css"> -->

		<!-- Font Awesome CSS file include -->
		<?= link_tag('assets/font-awesome-4.7.0/css/font-awesome.css'); ?>
		<!-- <link rel="stylesheet" type="text/css" href="../assets/font-awesome-4.7.0/css/font-awesome.css"> -->

		<!-- Material Icons CSS file Include -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!-- Custome CSS File Include -->
		<style type="text/css">
			body{
				padding-top: 50px;
				background: rgb(0,0,0,0.05);
			}

			#category-heading{
				background: white;
				border: 1px solid coral;
				margin-bottom: 4px;
			}

			#category-heading-text{
				margin: 5px;
				padding: 5px;
				color: green;
			}

			#category{
				background: white;
				border: 1px solid coral;
				padding: 10px;
			}

			#category-img{
				width: 100px;
				height: 100px !important;
				border: 3px solid green;
				border-radius: 100%;
			}

			#category-text{
				margin-top: -2px;
			}
		</style>
	</head>
	<body>
		<!-- Body Section Start -->
		<div class="container">
			<!-- Electronic Category Heading Section Start -->
			<div class="row" id="category-heading">
				<div class="col l8 m6 s12">
					<h5 id="category-heading-text">Electronic Category</h5>
				</div>
				<div class="col l4 m6 s12"></div>
			</div>
			<!-- Electronic Category Heading Section End -->

			<!-- Electronic Category Section Start -->
			<div class="row" id="category">
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/e1.png') ?>" >
						<h6><a href="<?= base_url('index.php/Seller/MobileUpload') ?>" style="color: green;">Mobiles</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/e2.png') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Mobiles Accessories</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/e3.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Laptops</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/e4.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Tablets</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/e5.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Computer</a></h6>
					</center>
				</div>

				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/e6.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Computer Accessories</a></h6>
					</center>
				</div>
			</div>
			<!-- Electronic Category Section End -->

			<!-- Men Fashion Category Heading Section Start -->
			<div class="row" id="category-heading">
				<div class="col l8 m6 s12">
					<h5 id="category-heading-text">Man Fashion Category</h5>
				</div>
				<div class="col l4 m6 s12"></div>
			</div>
			<!-- Men Fashion Category Heading Section End -->

			<!-- Men Fashion Category Section Start -->
			<div class="row" id="category">
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/mf1.png') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Foot Wears</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/mf2.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Top Wears</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/mf3.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Bottoms Wears</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/mf4.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Watches</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/mf5.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Accessories</a></h6>
					</center>
				</div>
			</div>
			<!-- Men Fashion Category Section End -->

			<!-- Women Fashion Category Heading Section Start -->
			<div class="row" id="category-heading">
				<div class="col l8 m6 s12">
					<h5 id="category-heading-text">Women Fashion Category</h5>
				</div>
				<div class="col l4 m6 s12"></div>
			</div>
			<!-- Women Fashion Category Heading Section End -->

			<!-- Women Fashion Category Section Start -->
			<div class="row" id="category">
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/wf1.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Ethnic Wears</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/wf2.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Foot Wears</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/wf3.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Beauty</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/wf4.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Jewelry</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/wf5.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Accessories</a></h6>
					</center>
				</div>
			</div>
			<!-- Women Fashion Category Section End -->

			<!-- Home & Furniture Category Heading Section Start -->
			<div class="row" id="category-heading">
				<div class="col l8 m6 s12">
					<h5 id="category-heading-text">Home & Furniture Category</h5>
				</div>
				<div class="col l4 m6 s12"></div>
			</div>
			<!-- Home & Furniture Category Heading Section End -->

			<!-- Home & Furniture Category Section Start -->
			<div class="row" id="category">
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/hf1.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Kitchen Storage</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/hf2.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Furniture</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/hf3.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Home Decor</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/hf4.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Lighting</a></h6>
					</center>
				</div>
			</div>
			<!-- Home & Furniture Category Section End -->

			<!-- Sports & Stationary Category Heading Section Start -->
			<div class="row" id="category-heading">
				<div class="col l8 m6 s12">
					<h5 id="category-heading-text">Sports & Stationary Category</h5>
				</div>
				<div class="col l4 m6 s12"></div>
			</div>
			<!-- Sports & Stationary Category Heading Section End -->

			<!-- Sports & Stationary Category Section Start -->
			<div class="row" id="category">
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/ss1.jpeg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Book</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/ss2.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Stationary</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/ss3.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Gaming</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/ss4.png') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Sports</a></h6>
					</center>
				</div>
				
				<div class="col l2 m4 s12">
					<center>
						<img id="category-img" class="responsive-img" src="<?= base_url('assets/images/menu-images/ss5.jpg') ?>" >
						<h6 id="category-text"><a href="" style="color: green;">Fitness</a></h6>
					</center>
				</div>
			</div>
			<!-- Sports & Stationary Category Section End -->
		</div>
		<!-- Body Section End -->

		<!-- JQuery JS file include -->
		<script type="text/javascript" src="<?= base_url('assets/jquery/jquery-3.3.1.min.js') ?>"></script>
		<!-- <script type="text/javascript" src="../assets/jquery/jquery-3.3.1.min.js"></script> -->

		<!-- Materialize JS file include -->
		<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
		<!-- <script type="text/javascript" src="../assets/materialize/js/materialize.js"></script> -->
	</body>
</html>