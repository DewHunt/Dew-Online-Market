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
		<h5 class="green white-text section center-align hide-on-med-and-up">Electronic Category</h5>
		<!-- Electronic Title Section End -->
		<ul class="collapsible hide-on-med-and-up">
			<li>
				<div class="collapsible-header">Mobiles&nbsp;&nbsp;<span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
				<div class="collapsible-body">
					<ul id="set-links">
						<li><a href="">Samsung</a></li>
						<li><a href="">Sony</a></li>
						<li><a href="">Oppo</a></li>
						<li><a href="">Vivo</a></li>
						<li><a href="">MI</a></li>
						<li><a href="">LG</a></li>
						<li><a href="">Micromax</a></li>
						<li><a href="">Microsoft</a></li>
						<li><a href="">Lava</a></li>
						<li><a href="">Lenevo</a></li>
					</ul>
				</div>
			</li>

			<li>
				<div class="collapsible-header">Mobile Accessories&nbsp;&nbsp;<span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
				<div class="collapsible-body">
					<ul id="set-links">
						<li><a href="">Headphone</a></li>
						<li><a href="">Power Bank</a></li>
						<li><a href="">Screen Guard</a></li>
						<li><a href="#">Memory Card</a></li>
						<li><a href="#">Chargers</a></li>
						<li><a href="#">Gorila Class</a></li>
					</ul>					
				</div>
			</li>

			<li>
				<div class="collapsible-header">Laptops&nbsp;&nbsp;<span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
				<div class="collapsible-body">
					<ul id="set-links">
						<li><a href="#">Accer</a></li>
						<li><a href="#">Dell</a></li>
						<li><a href="#">HP</a></li>
						<li><a href="#">Lenevo</a></li>
						<li><a href="#">Sony</a></li>
						<li><a href="#">Samsung</a></li>
					</ul>
				</div>
			</li>

			<li>
				<div class="collapsible-header">Tablets&nbsp;&nbsp;<span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
				<div class="collapsible-body">
					<ul id="set-links">
						<li><a href="#">Samsung</a></li>
						<li><a href="#">Apple</a></li>
						<li><a href="#">Micromax</a></li>
						<li><a href="#">Lenevo</a></li>
						<li><a href="#">Asus</a></li>
						<li><a href="#">IBall</a></li>
					</ul>
				</div>
			</li>

			<li>
				<div class="collapsible-header">Computers&nbsp;&nbsp;<span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
				<div class="collapsible-body">
					<ul id="set-links">
						<li><a href="#">HP</a></li>
						<li><a href="#">Dell</a></li>
						<li><a href="#">Asus</a></li>
						<li><a href="#">Apple</a></li>
						<li><a href="#">Lenevo</a></li>
						<li><a href="#">IBall</a></li>
					</ul>
				</div>
			</li>

			<li>
				<div class="collapsible-header">Computers & Accessories&nbsp;&nbsp;<span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
				<div class="collapsible-body">
					<ul id="set-links">
						<li><a href="#">Hard Disk</a></li>
						<li><a href="#">Monitor</a></li>
						<li><a href="#">Pendrive</a></li>
						<li><a href="#">Mouse</a></li>
						<li><a href="#">Keyboard</a></li>
						<li><a href="#">RAM</a></li>
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