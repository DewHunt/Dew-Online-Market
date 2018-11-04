<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<title>Product Menu | Electronic | Men Fashion | Women Fashion | Home & Furniture | Sports & Stationery | Daily Needs</title>

		<!-- Shortcut Icon Section Start -->
		<link rel="shortcut icon" href="<?= base_url('assets/images/logo/shortcut_00.png') ?>">
		<!-- <link rel="stylesheet" type="text/css" href="../assets/images/logo/shortcut_00.png"> -->
		<!-- Shortcut Icon Section End -->

		<!-- Materialize CSS file include -->
		<?= link_tag('assets/materialize/css/materialize.css'); ?>
		<!-- <link rel="stylesheet" type="text/css" href="../assets/materialize/css/materialize.css"> -->

		<!-- Font Awesome CSS file include -->
		<!-- <?= link_tag('assets/font-awesome-4.7.0/css/font-awesome.css'); ?> -->
		<link rel="stylesheet" type="text/css" href="../../assets/font-awesome-4.7.0/css/font-awesome.css">

		<!-- Material Icons CSS file Include -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!-- Custom CSS File Include -->
		<style type="text/css">
			.collapsible{
				box-shadow: none;
			}

			.collapsible-body{
				padding: 0px;
			}

			.collapsible-header{
				outline: none;
				color: blue;
			}

			#set-links{
				border-left: 3px solid coral; 
			}

			#set-links li a{
				color: green;
				padding-left: 18px;
				font-size: 16px;
				line-height: 35px;
				display: block;
				/*border-bottom: 1px solid coral;*/
			}
		</style>
	</head>
	<body>
		<!-- Body Section Start -->

		<!-- Big Screen Message Section Start -->
		<div class="hide-on-med-and-down">
			<h1 class="center-align"><span class="fa fa-android"></span></h1>
			<h4 class="center-align red-text">This page will show only in mobile Screen. Please open this page in your mobile phone.</h4>			
		</div>
		<!-- Big Screen Message Section End -->

		<!-- Electronic Title Section Start -->
		<h5 class="green white-text section center-align hide-on-med-and-up">Men Fashion Category</h5>
		<!-- Electronic Title Section End -->
		<ul class="collapsible hide-on-med-and-up">
			<li>
				<div class="collapsible-header">Foot Wears&nbsp;&nbsp;<span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
				<div class="collapsible-body">
					<ul id="set-links">
						<li><a href="#">Sports Shoes</a></li>
						<li><a href="#">Formal Shoes</a></li>
						<li><a href="#">Office Shoes</a></li>
						<li><a href="#">Running Shoes</a></li>
						<li><a href="#">Boots</a></li>
						<li><a href="#">Sandals</a></li>
					</ul>
				</div>
			</li>

			<li>
				<div class="collapsible-header">Top Wears&nbsp;&nbsp;<span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
				<div class="collapsible-body">
					<ul id="set-links">
						<li><a href="#">T-Shirts</a></li>
						<li><a href="#">Shirts</a></li>
						<li><a href="#">Kurtas</a></li>
						<li><a href="#">Suites</a></li>
						<li><a href="#">Blazers</a></li>
					</ul>					
				</div>
			</li>

			<li>
				<div class="collapsible-header">Bottom Wears&nbsp;&nbsp;<span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
				<div class="collapsible-body">
					<ul id="set-links">
						<li><a href="#">Jeans</a></li>
						<li><a href="#">Trousers</a></li>
						<li><a href="#">Shorts</a></li>
						<li><a href="#">Pants</a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
					</ul>
				</div>
			</li>

			<li>
				<div class="collapsible-header">Watches&nbsp;&nbsp;<span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
				<div class="collapsible-body">
					<ul id="set-links">
						<li><a href="#">Fast Track</a></li>
						<li><a href="#">Sonata</a></li>
						<li><a href="#">Titan</a></li>
						<li><a href="#">Puma</a></li>
						<li><a href="#">Nike</a></li>
						<li><a href="#">Smart Watches</a></li>
					</ul>
				</div>
			</li>

			<li>
				<div class="collapsible-header">Accessories&nbsp;&nbsp;<span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
				<div class="collapsible-body">
					<ul id="set-links">
						<li><a href="#">Belts</a></li>
						<li><a href="#">Wallets</a></li>
						<li><a href="#">Sun Glasses</a></li>
						<li><a href="#">Travus</a></li>
						<li><a href="#"></a></li>
					</ul>
				</div>
			</li>
		</ul>		
		<!-- Body Section End -->

		<!-- JQuery JS file include -->
		<script type="text/javascript" src="<?= base_url('assets/jquery/jquery-3.3.1.min.js') ?>"></script>
		<!-- <script type="text/javascript" src="../assets/jquery/jquery-3.3.1.min.js"></script> -->

		<!-- Materialize JS file include -->
		<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
		<!-- <script type="text/javascript" src="../assets/materialize/js/materialize.js"></script> -->

		<!-- Custome JS File Include -->
		<script type="text/javascript">
			$(document).ready(function(){
				$('.collapsible').collapsible();
			});
		</script>
	</body>
</html>