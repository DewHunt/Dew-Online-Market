<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<title>Seller Dashboard</title>

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

		<!-- Custom CSS File Include -->
		<style type="text/css">
			#show-user-profile{
				width: 15% !important;
			}

			#show-user-profile li a{
				color: green;
			}

			#show-user-profile li a:hover{
				color: white;
				background: green;
				text-transform: uppercase;
			}

			#left-menu li  a, #right-menu li a{
				color: green;
			}

			#left-menu li a:hover, #right-menu li a:hover{
				text-transform: uppercase;
				color: white;
				background: green;
				font-weight: bold;
			}

			#active{
				text-transform: uppercase;
				font-weight: bold;
				background: coral;
			}

			#show-order-menu, #show-listing-menu, #show-marketing-menu{
				width: 15% !important;
			}

			#widget{
				padding: 0px 10px 0px 10px;
			}

			#widget-content{
				border: 1px solid green;
				margin-top: 20px;
			}

			#widget-content-h6{
				background: green;
				margin: 0px;
				padding: 10px;
				font-size: 16px;
				color: white;
			}

			#widget-content-h5{
				color: gray;
				font-weight: bold;
				padding: 0px 5px 0px 5px;
			}

			#set-task li a{
				color: green;
				font-weight: bold;
				padding-left: 15px;
				line-height: 30px;
				display: block;
			}

			#sale-widget{
				padding: 10px 15px 0px 15px;
			}

			#sale-widget-content{
				border: 0px solid green;
			}

			#sale-widget-content h5:hover{
				color: green;
				text-transform: uppercase;
				border-bottom: 1px solid green;
			}

			#sale-widget-content-h5{
				color: silver;
				margin-top: 0px;
				border-bottom: 1px solid silver;
				padding-bottom: 8px;
			}

			#sale-widget-content-h6{
				margin-top: -8px;
				color: gray;
			}

			#set-tools li a{
				color: green;
				font-weight: bold;
				padding: 0px 15px 0px 15px;
				line-height: 30px;
				display: block;
			}

			#progress-bar{
				padding: 0px 15px 0px 15px;
				margin-top: -25px;
			}

			#promotional-box{
				margin: 5px 5px 0px 5px;
				padding: 0px 10px 0px 10px;
				border: 0px solid black;
			}

			#promotional-inner-box{
				margin: 0px 5px 5px 5px;
				padding: 0px 25px 0px 25px;
				border: 0px solid black;
			}
		</style>
	</head>

	<body>
		<!-- Body Section Start -->

		<!-- Top bar Section Start -->
		<nav class="green" style="height: 35px; line-height: 35px;">
			<div class="nav-wrapper">
				<!-- Left Menu Section Start -->
				<ul class="left">
					<li>
						<a href="#!" class="dropdown-trigger" data-target="show-user-profile">
							<span class="fa fa-user"></span>&nbsp;Hi User
						</a>
					</li>
					<!-- DropDown Menu Section Start -->
					<ul class="dropdown-content" id="show-user-profile">
						<li><a href=""><span class="fa fa-picture-o"></span>&nbsp;Company Profile</a></li>
						<li><a href=""><span class="fa fa-cogs"></span>&nbsp;Account Settings</a></li>
						<li><a href="<?= base_url('index.php/Seller/Logout'); ?>"><span class="fa fa-sign-out"></span>&nbsp;Logout</a></li>
					</ul>
					<!-- DropDown Menu Section End -->
					<li><a href=""><span class="fa fa-phone"></span>&nbsp;Help & Contact</a></li>
				</ul>
				<!-- Left Menu Section End -->

				<!-- Right Menu Section Start -->
				<ul class="right">
					<li><a href=""><span class="fa fa-cubes"></span>&nbsp;Sell</a></li>
					<li><a href=""><span class="fa fa-bell"></span>&nbsp;Notification</a></li>
					<li><a href=""><span class="fa fa-shopping-cart"></span>&nbsp;Cart</a></li>
				</ul>
				<!-- Right Menu Section End -->
			</div>
		</nav>
		<!-- Top bar Section End -->

		<!-- Website Name Section Start -->
		<h4 style="margin-left: 10px;">Shopping Mall</h4>
		<!-- Website Name Section End -->

		<h5 style="margin: 30px 0px 0px 10px;">
			Seller Hub&nbsp;&nbsp;<span style="font-size: 18px"><a href="">Profile Name</a></span>
		</h5>

		<!-- Menu Bar Section Start -->
		<nav style="box-shadow: none; background: white; border-bottom: 2px solid green;">
			<div class="nav-wrapper">
				<!-- Left Side Menu Section Start -->
				<ul class="left" id="left-menu">
					<li><a href="" id="active">Overview</a></li>
					<li><a href="#show-order-menu" class="dropdown-trigger">Orders</a></li>
					<!-- Order DropDown Menu Section Start -->
					<ul class="dropdown-content" id="show-order-menu">
						<li><a href="">All Orders</a></li>
						<li><a href="">Awaiting Payment</a></li>
						<li><a href="">Awaiting Shipment</a></li>
						<li><a href="">Paid & Shipped</a></li>
						<li><a href="">Cancellations</a></li>
						<li><a href="">Returns</a></li>
						<li><a href="">Cases</a></li>
						<li><a href="">Shipping Labels</a></li>
					</ul>
					<!-- Order DropDown Menu Section End -->

					<li><a href="#show-listing-menu" class="dropdown-trigger">Listing</a></li>
					<!-- Listing DropDown Menu Section Start -->
					<ul class="dropdown-content" id="show-listing-menu">
						<li><a href="">Create Listing</a></li>
						<li><a href="">Active</a></li>
						<li><a href="">Unsold</a></li>
					</ul>
					<!-- Listing DropDown Menu Section End -->

					<li><a href="#show-marketing-menu" class="dropdown-trigger">Marketing</a></li>
					<!-- Marketing DropDown Menu Section Start -->
					<ul class="dropdown-content" id="show-marketing-menu">
						<li><a href="">Price Offers</a></li>
						<li><a href="">Quantity Offers</a></li>
						<li><a href="">Create Sell</a></li>
					</ul>
					<!-- Marketing DropDown Menu Section End -->

					<li><a href="">Performance</a></li>
				</ul>
				<!-- Left Side Menu Section End -->

				<!-- Right Side Menu Section Start -->
				<ul class="right" id="right-menu">
					<li><a href="">Message (0)</a></li>
					<li><a href="">Comments (0)</a></li>
				</ul>
				<!-- Right Side Menu Section End -->
			</div>
		</nav>
		<!-- Menu Bar Section End -->

		<br><br>

		<!-- Data Section Start -->
		<div class="row">
			<div class="col l2 m4 s12" id="widget">
				<div id="widget-content">					
					<h6 id="widget-content-h6">Unread Messages</h6>
					<h5 id="widget-content-h5">05</h5>
				</div>
			</div>

			<div class="col l2 m4 s12" id="widget">
				<div id="widget-content">
					<h6 id="widget-content-h6">Awaiting Shipment</h6>
					<h5 id="widget-content-h5">07</h5>
				</div>
			</div>

			<div class="col l2 m4 s12" id="widget">
				<div id="widget-content">
					<h6 id="widget-content-h6">Sales ( Last 31 Days )</h6>
					<h5 id="widget-content-h5">৳ 10,15,500.56</h5>
				</div>
			</div>

			<div class="col l2 m4 s12" id="widget">
				<div id="widget-content">
					<h6 id="widget-content-h6">Today Sales</h6>
					<h5 id="widget-content-h5">৳ 10,945</h5>
				</div>
			</div>

			<div class="col l2 m4 s12" id="widget">
				<div id="widget-content">
					<h6 id="widget-content-h6">Today's Feedback</h6>
					<h5 id="widget-content-h5">0</h5>
				</div>
			</div>

			<div class="col l2 m4 s12" id="widget">
				<div id="widget-content">
					<h6 id="widget-content-h6">Seller Level Forecast</h6>
					<h5 id="widget-content-h5">Above Standard</h5>
				</div>
			</div>
		</div>
		<!-- Data Section End -->

		<!-- Task & Sales Section Start -->
		<div class="row">
			<!-- Task Section Start -->
			<div class="col l4 m4 s12" id="widget">
				<div id="widget-content">
					<h6 id="widget-content-h6">Task</h6>
					<ul id="set-task">
						<li><a href="">Messages <span class="badge green white-text">5</span></a></li>
						<li><a href="">Shipments <span class="badge green white-text">10</span></a></li>
						<li><a href="">Feedbacks <span class="badge green white-text">12</span></a></li>
					</ul>
				</div>
			</div>
			<!-- Task Section End -->

			<!-- Sale Section Start -->
			<div class="col l8 m8 s12" id="widget">
				<div id="widget-content">
					<!-- Widget Section Start  -->
					<h6 id="widget-content-h6">Sales</h6>
					<div class="row">
						<div class="col l3 m3 s6" id="sale-widget">
							<div id="sale-widget-content">
								<center>
									<h5 id="sale-widget-content-h5">Today</h5>
									<h6 id="sale-widget-content-h6">৳ 30,000</h6>
								</center>
							</div>
						</div>


						<div class="col l3 m3 s6" id="sale-widget">
							<div id="sale-widget-content">
								<center>
									<h5 id="sale-widget-content-h5">Last 7 Days</h5>
									<h6 id="sale-widget-content-h6">৳ 95,000</h6>
								</center>
							</div>
						</div>

						<div class="col l3 m3 s6" id="sale-widget">
							<div id="sale-widget-content">
								<center>
									<h5 id="sale-widget-content-h5">Last 31 Days</h5>
									<h6 id="sale-widget-content-h6">৳ 150,000</h6>
								</center>
							</div>
						</div>

						<div class="col l3 m3 s6" id="sale-widget">
							<div id="sale-widget-content">
								<center>
									<h5 id="sale-widget-content-h5">Last 90 Days</h5>
									<h6 id="sale-widget-content-h6">৳ 350,000</h6>
								</center>
							</div>
						</div>						
					</div>
					<!-- Widget Section End -->

					<!-- Progress Bar Section Start -->
					<div class="row">
						<div class="col l3 m3 s6" id="progress-bar">
							<div class="progress" style="height: 10px;">
								<div class="determinate" style="width: 69%;"></div>
							</div>
						</div>
						
						<div class="col l3 m3 s6" id="progress-bar">
							<div class="progress" style="height: 10px;">
								<div class="determinate" style="width: 56%;"></div>
							</div>
						</div>
						
						<div class="col l3 m3 s6" id="progress-bar">
							<div class="progress" style="height: 10px;">
								<div class="determinate" id="determinate-width" style="width: 48%;"></div>
							</div>
						</div>

						<div class="col l3 m3 s6" id="progress-bar">
							<div class="progress" style="height: 10px;">
								<div class="determinate" style="width: 73%;"></div>
							</div>
						</div>
					</div>
					<!-- Progress Bar Section End -->
				</div>				
			</div>
			<!-- Sale Section End -->
		</div>
		<!-- Task & Sales Section End -->

		<!-- Selling Tools, Seller Level & Promotional Offers Section Start -->
		<div class="row">
			<!-- Selling Tools Section Start -->
			<div class="col l4 m4 s12" id="widget">
				<div id="widget-content">
					<h6 id="widget-content-h6">Selling Tools</h6>
					<ul id="set-tools">
						<li><a href="">My Profiles (Profile Name)</a></li>
						<li><a href="">View My Listings</a></li>
						<li><a href="">Manage Profile (Profile Name)</a></li>
						<li><a href="">Create Sale</a></li>
						<li><a href="">My Performance</a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
					</ul>
				</div>
			</div>
			<!-- Selling Tools Section End -->
			
			<!-- Seller Level Section Start -->
			<div class="col l4 m4 s12" id="widget">
				<div id="widget-content">
					<h6 id="widget-content-h6">Seller Level (Region: Name)</h6>
					<ul id="set-tools">
						<li><a href="">Current Seller Level<span class="right">Above Standard</span></a></li>
						<li><a href="">Transaction (Last 12 Months)<span class="right">250</span></a></li>
						<li><a href="">Sales (Last 12 Months)<span class="right">৳ 25,000</span></a></li>
					</ul>
				</div>
			</div>
			<!-- Seller Level Section End -->

			<!-- Promotional Offers Section Start -->
			<div class="col l4 m4 s12" id="widget">
				<div id="widget-content">
					<h6 id="widget-content-h6">Promotional Offers</h6>
					<div id="promotional-box">
						<h5>Fixed Price Listing</h5>
						<div id="promotional-inner-box">
							<p>
								Start Date: 2018 - 5 -20 <br>
								End Date: 2018 - 6 - 25
							</p>
							<h6>Used/Left: <a href="">250</a>/250</h6>								
						</div>					
					</div>

					<hr>

					<div id="promotional-box">
						<h5>Fixed Price Listing</h5>
						<div id="promotional-inner-box">
							<p>
								Start Date: 2018 - 5 -20 <br>
								End Date: 2018 - 6 - 25
							</p>
							<h6>Used/Left: <a href="">250</a>/250</h6>								
						</div>					
					</div>
				</div>
			</div>
			<!-- Promotional Offers Section End -->
		</div>
		<!-- Selling Tools, Seller Level & Promotional Offers Section End -->

		<!-- Body Section End -->

		<!-- JQuery JS file include -->
		<script type="text/javascript" src="<?= base_url('assets/jquery/jquery-3.3.1.min.js') ?>"></script>
		<!-- <script type="text/javascript" src="../assets/jquery/jquery-3.3.1.min.js"></script> -->

		<!-- Materialize JS file include -->
		<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
		<!-- <script type="text/javascript" src="../assets/materialize/js/materialize.js"></script> -->

		<!-- Custom JS File Include -->
		<script type="text/javascript">
			$(document).ready(function(){
				// DropDown Show Script Start
				$('.dropdown-trigger').dropdown({
					hover: true,
					coverTrigger: false
				});
				// DropDown Show Script End
			});
		</script>
	</body>
</html>