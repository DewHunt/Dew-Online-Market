<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<title>Dew Online Market</title>

		<!-- Shortcut Icon Section Start -->
		<link rel="shortcut icon" href="<?= base_url('assets/images/logo/shortcut_00.png') ?>">
		<!-- <link rel="stylesheet" type="text/css" href="../assets/images/logo/shortcut_00.png"> -->
		<!-- Shortcut Icon Section End -->

		<!-- Materialize CSS file include -->
		<?= link_tag('assets/materialize/css/materialize.css'); ?>
		<!-- <link rel="stylesheet" type="text/css" href="../assets/materialize/css/materialize.css"> -->

		<!-- Font Awesome CSS file include -->
		<!-- <?= link_tag('assets/font-awesome-4.7.0/css/font-awesome.css'); ?> -->
		<link rel="stylesheet" type="text/css" href="../assets/font-awesome-4.7.0/css/font-awesome.css">

		<!-- Material Icons CSS file Include -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!-- Custom CSS file Section -->
		<style type="text/css">
			#top-bar{
				background-color: coral;
			}

			#electronic-menu, #men-fashion-menu, #women-fashion-menu, #home-menu, #sports-menu, #daily-needs-menu{
				width: 100% !important;
				left: 1px !important;
			}

			#electronic-menu, #men-fashion-menu, #women-fashion-menu, #home-menu, #sports-menu, #daily-needs-menu h6{
				color: green;
			}

			#set-ele-menu a{
				padding: 0px;
				color: black;
				line-height: 20px;
			}

			#set-ele-menu a:hover{
				background: white;
				color: coral;
			}

			#today-deal-img{
				width: 150px;
				height: 150px;
			}

			#footer-link li a{
				color: white;
				line-height: 35px;
			}

			#footer-link li a:hover{
				color: black;
				text-decoration: underline;
			}
		</style>
	</head>
	<body>
		<!-- Topbar Section Start -->

		<div id="top-bar" class="hide-on-med-and-down">
			<span>
				&nbsp;&nbsp;&nbsp;
				<span class="fa fa-phone"></span>&nbsp;&nbsp;+88 017 66 328 322
				&nbsp;&nbsp;&nbsp;
				<span class="fa fa-envelope"></span>&nbsp;&nbsp;info@dom.com
			</span>
			<span class="right">
				<span class="fa fa-gift"></span>&nbsp;&nbsp;Gift Card
				&nbsp;&nbsp;&nbsp;
				<span class="fa fa-cart-arrow-down"></span>&nbsp;&nbsp;Sell On Market
				&nbsp;&nbsp;&nbsp;
			</span>
		</div>

		<!-- Topbar Section End -->

		<!-- Navbar Section Start -->

		<nav class="green">
			<div class="wrapper">
				<a href="#" class="brand-log left">&nbsp;&nbsp;&nbsp;DOM - Dew Online Market</a>

				<!-- Menu Button Section Start -->

				<a href="#" class="sidenav-trigger right" data-target="mobile-menu">
					<i class="material-icons">menu</i>
				</a>

				<!-- Menu Button Section End -->

				<!-- Mobile Menu Section Start -->

				<ul class="sidenav" id="mobile-menu">
					<li><a href="">Electronics</a></li>
					<li><a href="">Men Fashion</a></li>
					<li><a href="">Women Fashiuon</a></li>
					<li><a href="">Home & Furniture</a></li>
					<li><a href="">Sports & Statinary</a></li>
					<li><a href="">Daily Needs</a></li>
				</ul>

				<!-- Mobile Menu Section End -->

				<!-- Right Menu Section Start -->

				<ul class="right hide-on-med-and-down">
					<li><a href="#"><span class="fa fa-shopping-cart"></span>&nbsp;&nbsp;Cart</a></li>
					<li><a href="#"><span class="fa fa-sign-in"></span>&nbsp;&nbsp;Sign Up</a></li>
					<li><a href="#"><span class="fa fa-sign-in"></span>&nbsp;&nbsp;Log In</a></li>
				</ul>

				<!-- Right Menu Section End -->
			</div>
		</nav>

		<!-- Navbar Section End -->


		<!-- Menubar Section Start -->

		<nav class="green hide-on-med-and-down" style="height: 35px; line-height: 35px; box-shadow: none; border-top: 1px solid white;">
			<div class="container">
				<div class="nav-wrapper">
					<ul>
						<li><a href="#" class="dropdown-trigger" data-target="electronic-menu">Electronics</a></li>
						<!-- Electronic Dropdown Menu Start -->

						<ul class="dropdown-content" id="electronic-menu">
							<!-- Menu Section Start -->

							<div class="row">
								<div class="col l3 m4 s12">
									<h6>Mobile</h6>
									<ul id="set-ele-menu">
										<a href="#">Samsung</a>
										<a href="#">Sony</a>
										<a href="#">Oppo</a>
										<a href="#">Vivo</a>
										<a href="#">MI</a>
										<a href="#">Apple</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<h6>Mobile Accessories</h6>
									<ul id="set-ele-menu">
										<a href="#">Headphone</a>
										<a href="#">Power Bank</a>
										<a href="#">Screen Card</a>
										<a href="#">Memory Card</a>
										<a href="#">Chargers</a>
										<a href="#">Gorila Class</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>

								<div class="col l3 m4 s12">
									<h6>Laptop</h6>
									<ul id="set-ele-menu">
										<a href="#">Accer</a>
										<a href="#">Dell</a>
										<a href="#">HP</a>
										<a href="#">Lenevo</a>
										<a href="#">Sony</a>
										<a href="#">Samsung</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<h6>Tablets</h6>
									<ul id="set-ele-menu">
										<a href="#">Samsung</a>
										<a href="#">Apple</a>
										<a href="#">Micromax</a>
										<a href="#">Lenevo</a>
										<a href="#">Asus</a>
										<a href="#">IBall</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>

								<div class="col l3 m4 s12">
									<h6>Computer</h6>
									<ul id="set-ele-menu">
										<a href="#">HP</a>
										<a href="#">Dell</a>
										<a href="#">Asus</a>
										<a href="#">Apple</a>
										<a href="#">Lenevo</a>
										<a href="#">IBall</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<h6>Computer Accessories</h6>
									<ul id="set-ele-menu">
										<a href="#">Hard Disk</a>
										<a href="#">Monitor</a>
										<a href="#">Pendrive</a>
										<a href="#">Mouse</a>
										<a href="#">Keyboard</a>
										<a href="#">RAM</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<img src="<?= base_url('assets/images/menu-images/img_Phones.png'); ?>" class="responsive-img" style="margin-top: 50px;" >
								</div>
							</div>

							<!-- Menu Section End -->
						</ul>

						<!-- Electronic Dropdown Menu End -->

						<li><a href="#" class="dropdown-trigger" data-target="men-fashion-menu">Men Fashion</a></li>
						<!-- Man Fashion Dropdown Menu Start -->

						<ul class="dropdown-content" id="men-fashion-menu">
							<!-- Menu Section Start -->

							<div class="row">
								<div class="col l3 m4 s12">
									<h6>Foot Wears</h6>
									<ul id="set-ele-menu">
										<a href="#">Sports Shoes</a>
										<a href="#">Formal Shoes</a>
										<a href="#">Office Shoes</a>
										<a href="#">Running Shoes</a>
										<a href="#">Boots</a>
										<a href="#">Sandals</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<h6>Top Wears</h6>
									<ul id="set-ele-menu">
										<a href="#">T-Shirts</a>
										<a href="#">Shirts</a>
										<a href="#">Kurtas</a>
										<a href="#">Suites</a>
										<a href="#">Blazers</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>

								<div class="col l3 m4 s12">
									<h6>Bottom Wears</h6>
									<ul id="set-ele-menu">
										<a href="#">Jeans</a>
										<a href="#">Trousers</a>
										<a href="#">Shorts</a>
										<a href="#">Pants</a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<h6>Watches</h6>
									<ul id="set-ele-menu">
										<a href="#">Fast Track</a>
										<a href="#">Sonata</a>
										<a href="#">Titan</a>
										<a href="#">Puma</a>
										<a href="#">Nike</a>
										<a href="#">Smart Watches</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<h6>Accessories</h6>
									<ul id="set-ele-menu">
										<a href="#">Belts</a>
										<a href="#">Wallets</a>
										<a href="#">Sun Glasses</a>
										<a href="#">Travus</a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<img src="<?= base_url('assets/images/menu-images/img_men_fashion.jpg'); ?>" class="responsive-img" style="margin-top: 50px;" >
								</div>
							</div>

							<!-- Menu Section End -->
						</ul>

						<!-- Man Fashion Dropdown Menu End -->

						<li><a href="#" class="dropdown-trigger" data-target="women-fashion-menu">Women Fashion</a></li>
						<!-- Women Fashion Dropdown Menu Start -->

						<ul class="dropdown-content" id="women-fashion-menu">
							<!-- Menu Section Start -->

							<div class="row">
								<div class="col l3 m4 s12">
									<h6>Ethnic Wears</h6>
									<ul id="set-ele-menu">
										<a href="#">Sarees</a>
										<a href="#">Kurtis</a>
										<a href="#">Lehenga & Choli</a>
										<a href="#">Blouse</a>
										<a href="#">Suit & Slawars</a>
										<a href="#">Anarkali Suit</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<h6>Foot Wears</h6>
									<ul id="set-ele-menu">
										<a href="#">Sandals</a>
										<a href="#">heels</a>
										<a href="#">Sports Shoes</a>
										<a href="#">sSlippers</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>

								<div class="col l3 m4 s12">
									<h6>Beauty</h6>
									<ul id="set-ele-menu">
										<a href="#">Make Up</a>
										<a href="#">Skin Care</a>
										<a href="#">Hair Care</a>
										<a href="#">Baths</a>
										<a href="#">Perfumes</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<h6>Jewelery</h6>
									<ul id="set-ele-menu">
										<a href="#">Artificial Jewelery</a>
										<a href="#">Silver Jewelery</a>
										<a href="#">Rings</a>
										<a href="#">Earrings</a>
										<a href="#">pendants</a>
										<a href="#">Necklace</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<h6>Accessories</h6>
									<ul id="set-ele-menu">
										<a href="#">Hand Bags</a>
										<a href="#">Shoulder Bags</a>
										<a href="#">Belts</a>
										<a href="#">Wallets</a>
										<a href="#">Travel</a>
										<a href="#">Sun Glasses</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<img src="<?= base_url('assets/images/menu-images/img_women_fashion.jpg'); ?>" class="responsive-img" style="margin-top: 50px;" >
								</div>
							</div>

							<!-- Menu Section End -->
						</ul>

						<!-- Women Fashion Dropdown Menu End -->

						<li><a href="#" class="dropdown-trigger" data-target="home-menu">Home & Furniture</a></li>
						<!-- Home & Stationary Dropdown Menu Start -->

						<ul class="dropdown-content" id="home-menu">
							<!-- Menu Section Start -->

							<div class="row">
								<div class="col l3 m4 s12">
									<h6>Kitchen Storage</h6>
									<ul id="set-ele-menu">
										<a href="#">Water Bottle</a>
										<a href="#">Lunch Box</a>
										<a href="#">Tiffins</a>
										<a href="#">Cups</a>
										<a href="#">Tre</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<h6>Furniture</h6>
									<ul id="set-ele-menu">
										<a href="#">Beds</a>
										<a href="#">Sofas</a>
										<a href="#">Dining Tables</a>
										<a href="#">Office Chair</a>
										<a href="#">Chair</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>

								<div class="col l3 m4 s12">
									<h6>Home Decor</h6>
									<ul id="set-ele-menu">
										<a href="#">Painting</a>
										<a href="#">Clock</a>
										<a href="#">Posters</a>
										<a href="#">Calenders</a>
										<a href="#">Photos</a>
										<a href="#">Frames</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<h6>Lighting</h6>
									<ul id="set-ele-menu">
										<a href="#">LED</a>
										<a href="#">CFL</a>
										<a href="#">Bulbs</a>
										<a href="#">Tube Lights</a>
										<a href="#">Lamp</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<img src="<?= base_url('assets/images/menu-images/img_home_stationary.jpg'); ?>" class="responsive-img" style="margin-top: 50px;" >
								</div>
							</div>

							<!-- Menu Section End -->
						</ul>

						<!-- Home & Stationary Dropdown Menu End -->

						<li><a href="#" class="dropdown-trigger" data-target="sports-menu">Sports & Stationary</a></li>
						<!-- Sports & Stationary Dropdown Menu Start -->

						<ul class="dropdown-content" id="sports-menu">
							<!-- Menu Section Start -->

							<div class="row">
								<div class="col l3 m4 s12">
									<h6>Books</h6>
									<ul id="set-ele-menu">
										<a href="#">Comics</a>
										<a href="#">Business</a>
										<a href="#">Children</a>
										<a href="#">Lecture </a>
										<a href="#">Biograhy</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<h6>Stationary</h6>
									<ul id="set-ele-menu">
										<a href="#">Pen</a>
										<a href="#">Pencil</a>
										<a href="#">Notebooks</a>
										<a href="#">Registor</a>
										<a href="#">Colors</a>
										<a href="#">Scales</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>

								<div class="col l3 m4 s12">
									<h6>Gaming</h6>
									<ul id="set-ele-menu">
										<a href="#">PS3</a>
										<a href="#">PS4</a>
										<a href="#">Xbox</a>
										<a href="#">Gaming Consol</a>
										<a href="#">Controller</a>
										<a href="#"></a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<h6>Sports</h6>
									<ul id="set-ele-menu">
										<a href="#">Crickets</a>
										<a href="#">Badminton</a>
										<a href="#">Tennis</a>
										<a href="#">Football</a>
										<a href="#">Basketball</a>
										<a href="#">Skating</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>

								<div class="col l3 m4 s12">
									<h6>Fitness</h6>
									<ul id="set-ele-menu">
										<a href="#">Dumbbell</a>
										<a href="#">Home Gym</a>
										<a href="#">Cycle</a>
										<a href="#">Running Track</a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<img src="<?= base_url('assets/images/menu-images/img_sports_stationary.jpg'); ?>" class="responsive-img" style="margin-top: 50px;" >
								</div>
							</div>

							<!-- Menu Section End -->
						</ul>

						<!-- Sports & Stationary Dropdown Menu End -->

						<li><a href="#" class="dropdown-trigger" data-target="daily-needs-menu">Daily Needs</a></li>
						<!-- Daily Needs Dropdown Menu Start -->

						<ul class="dropdown-content" id="daily-needs-menu">
							<!-- Menu Section Start -->

							<div class="row">
								<div class="col l3 m4 s12">
									<h6>Mobile</h6>
									<ul id="set-ele-menu">
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<h6>Mobile Accessories</h6>
									<ul id="set-ele-menu">
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>

								<div class="col l3 m4 s12">
									<h6>Laptop</h6>
									<ul id="set-ele-menu">
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<h6>Tablets</h6>
									<ul id="set-ele-menu">
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>

								<div class="col l3 m4 s12">
									<h6>Computer</h6>
									<ul id="set-ele-menu">
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<h6>Computer Accessories</h6>
									<ul id="set-ele-menu">
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#"></a>
										<a href="#" class="red-text">View More</a>
									</ul>
								</div>
								
								<div class="col l3 m4 s12">
									<img src="<?= base_url('assets/images/menu-images/img_daily-needs.png'); ?>" class="responsive-img" style="margin-top: 50px;" >
								</div>
							</div>

							<!-- Menu Section End -->
						</ul>

						<!-- Daily Needs Dropdown Menu End -->
					</ul>
				</div>
			</div>
		</nav>

		<!-- Menubar Section End -->

		<!-- Image Slider Section Start -->

		<div class="carousel carousel-slider">
			<a href="#" class="carousel-item">
				<img src="<?= base_url('assets/images/sliders/slider_00.jpg') ?>" class="responsive-img" >
			</a>
			<a href="#" class="carousel-item">
				<img src="<?= base_url('assets/images/sliders/slider_01.jpg') ?>" class="responsive-img" >
			</a>
		</div>

		<!-- Image Slider Section End -->

		<!-- Today Deal Offers Section Start -->

		<h5>Todays Delas</h5>
		<div class="row">			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_02.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_01.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>

			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_00.png') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_02.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>

			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_01.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_00.png') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Today Deal Offers Section End -->

		<!-- Electronic Banner Image Section Start -->

		<div class="row">
			<div class="col l6 m6 s12">
				<img src="<?= base_url('assets/images/banner/banner_electronics.jpg'); ?>" class="responsive-img">
			</div>
			<div class="col l6 m6 s12">
				<img src="<?= base_url('assets/images/banner/banner_laptops.png'); ?>" class="responsive-img">
			</div>
		</div>

		<!-- Electronic Banner Image Section End -->

		<!-- Electronics Products Section Start -->

		<h5>Electronics Products</h5>
		<div class="row">
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_00.png') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_01.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_02.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_00.png') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>

			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_01.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_02.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Electronics Products Section End -->

		<!-- Men Fashion Products Section Start -->

		<h5>Men Fashion Products</h5>
		<div class="row">
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_men_fashion.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_men_fashion.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_men_fashion.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_men_fashion.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>

			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_men_fashion.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>

			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_men_fashion.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Men Fashion Products Section End -->

		<!-- Women Fashion Products Section Start -->

		<h5>Women Fashion Products</h5>
		<div class="row">
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_women_fashion.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_women_fashion.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_women_fashion.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_women_fashion.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>

			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_women_fashion.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>

			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_women_fashion.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Women Fashion Products Section End -->

		<!-- Home & Furniture Products Section Start -->

		<h5>Home & Furniture Products</h5>
		<div class="row">
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_home_stationary.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_home_stationary.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_home_stationary.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_home_stationary.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>

			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_home_stationary.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>

			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_home_stationary.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Home & Furniture Products Section End -->

		<!-- Sports & Stationary Products Section Start -->

		<h5>Sports & Stationary Products</h5>
		<div class="row">
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_sports_stationary.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_sports_stationary.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_sports_stationary.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
			
			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_sports_stationary.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>

			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_sports_stationary.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>

			<div class="col l2 m4 s12">
				<div class="card">
					<div class="card-image">
						<img src="<?= base_url('assets/images/products/product_sports_stationary.jpg') ?>" class="responsive-img" id="today-deal-img">
					</div>
					<div class="card-content">
						<p>Product Title</p>
						<h6><span>৳&nbsp;150/-</span></h6>
						<p>70% Off</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Sports & Stationary Products Section End -->

		<!-- Footer Section Start -->

		<footer class="page-footer green">
			<!-- Four Column Section Start -->

			<div class="row">
				<div class="col l3 m6 s12">
					<h6>About Us</h6>
					<p style="text-align: justify;">
						On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document.
						<p style="text-align: justify">
							You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.
						</p>
					</p>
				</div>
				<div class="col l3 m6 s12">
					<h6>Categories</h6>
					<ul id="footer-link">
						<li><a href="#">Electronics</a></li>
						<li><a href="#">Men Fashion</a></li>
						<li><a href="#">Women Fashion</a></li>
						<li><a href="#">Home & Furniture</a></li>
						<li><a href="#">Sports & Stationary</a></li>
						<li><a href="#">Daily Needs</a></li>
					</ul>
				</div>
				<div class="col l3 m6 s12">
					<h6>Important Links</h6>
					<ul id="footer-link">
						<li><a href="#">Home</a></li>
						<li><a href="#">Create Account</a></li>
						<li><a href="#">Login Account</a></li>
						<li><a href="#">Cart</a></li>
						<li><a href="#">Offer</a></li>
						<li><a href="#">Seller Account</a></li>
					</ul>
				</div>
				<div class="col l3 m6 s12">
					<h6>Developer Address</h6>
					<p>
						<span class="fa fa-map-marker"></span>
						&nbsp;House - 12, Road - 10, Line - 19, Block - E,<br>&nbsp;&nbsp;&nbsp;&nbsp;Mirpur DOHS, Dhaka - 1216
					</p>
					<p><span class="fa fa-phone"></span>&nbsp;&nbsp;+88 017 66 328 322</p>
					<p><span class="fa fa-envelope"></span>&nbsp;&nbsp;dewhunt@gmail.com</p>
					<p><span class="fa fa-globe"></span>&nbsp;&nbsp;www.dewsoft.com</p>
				</div>
			</div>

			<!-- Four Column Section End -->

			<!-- Copyright Section Start -->

			<div class="footer-copyright" style="background: coral;">
				<div class="container">
					<span class="fa fa-copyright text-lighten-4">&nbsp;<?= date('Y'); ?> All Rights Reserved By DOM</span>
					<a href="#" class="white-text text-lighten-4 right">Designed By: Dew Hunt</a>
				</div>
			</div>

			<!-- Copyrights Section End -->
		</footer>

		<!-- Footer Section Footer -->

		<!-- JQuery JS file include -->
		<script type="text/javascript" src="<?= base_url('assets/jquery/jquery-3.3.1.min.js') ?>"></script>
		<!-- <script type="text/javascript" src="../assets/jquery/jquery-3.3.1.min.js"></script> -->

		<!-- Materialize JS file include -->
		<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
		<!-- <script type="text/javascript" src="../assets/materialize/js/materialize.js"></script> -->

		<!-- Custom JS file Include -->
		<script type="text/javascript">
			$(document).ready(function(){
				$('.dropdown-trigger').dropdown({
					coverTrigger: false
				});

				// Side Menu Script Start

				$('.sidenav').sidenav();

				// Slide Menu Script End

				// Image Slider Script Start

				$('.carousel.carousel-slider').carousel({
					fullWidth: true,
					indicators: true
				});

				// Image Slider Script End
			});
		</script>
	</body>
</html>