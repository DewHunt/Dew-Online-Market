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
		<h5 class="green white-text section center-align hide-on-med-and-up">Sports & Stationery Category</h5>
		<!-- Electronic Title Section End -->
		<ul class="collapsible hide-on-med-and-up">
			<li>
				<div class="collapsible-header">Books&nbsp;&nbsp;<span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
				<div class="collapsible-body">
					<ul id="set-links">
						<li><a href="#">Comics</a></li>
						<li><a href="#">Business</a></li>
						<li><a href="#">Children</a></li>
						<li><a href="#">Lecture </a></li>
						<li><a href="#">Biograhy</a></li>
					</ul>
				</div>
			</li>

			<li>
				<div class="collapsible-header">Stationery&nbsp;&nbsp;<span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
				<div class="collapsible-body">
					<ul id="set-links">
						<li><a href="#">Pen</a></li>
						<li><a href="#">Pencil</a></li>
						<li><a href="#">Notebooks</a></li>
						<li><a href="#">Registor</a></li>
						<li><a href="#">Colors</a></li>
						<li><a href="#">Scales</a></li>
					</ul>
				</div>
			</li>

			<li>
				<div class="collapsible-header">Gaming&nbsp;&nbsp;<span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
				<div class="collapsible-body">
					<ul id="set-links">
						<li><a href="#">PS3</a></li>
						<li><a href="#">PS4</a></li>
						<li><a href="#">Xbox</a></li>
						<li><a href="#">Gaming Consol</a></li>
						<li><a href="#">Controller</a></li>
						<li><a href="#"></a></li>
					</ul>					
				</div>
			</li>

			<li>
				<div class="collapsible-header">Sports&nbsp;&nbsp;<span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
				<div class="collapsible-body">
					<ul id="set-links">
						<li><a href="#">Crickets</a></li>
						<li><a href="#">Badminton</a></li>
						<li><a href="#">Tennis</a></li>
						<li><a href="#">Football</a></li>
						<li><a href="#">Basketball</a></li>
						<li><a href="#">Skating</a></li>
					</ul>
				</div>
			</li>

			<li>
				<div class="collapsible-header">Fitness&nbsp;&nbsp;<span class="fa fa-angle-down" style="margin-top: 4px;"></span></div>
				<div class="collapsible-body">
					<ul id="set-links">
						<li><a href="#">Dumbbell</a></li>
						<li><a href="#">Home Gym</a></li>
						<li><a href="#">Cycle</a></li>
						<li><a href="#">Running Track</a></li>
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