<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<title>Sller Contact Info</title>

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
				/*background: rgb(0,0,0,0.1);*/
			}

			select{
				display: block;
				border: 1px solid green;
			}

			#set-contact{
				background: rgb(0,0,0,0.5);
				margin: 5px;
				padding: 10px;
				/*border: 1px solid black;*/
			}

			#set-contact-p{
				margin-top: -6px;
			}

			#seller-first-name, #seller-last-name{
				border: 1px solid green;
				box-shadow: none;
				width: 98%;
				padding-left: 5px;
				background: white;
				color: green;
			}

			#seller-address{
				border: 1px solid green;
				box-shadow: none;
				width: 100%;
				height: 150px;
				padding-left: 5px;
				background: white;
				color: green;
			}

			#seller-button{
				width: 100%;
			}
		</style>
	</head>
	<body>
		<!-- Body Section Start -->

		<!-- Contact Form Section Start -->
		<div class="row" style="margin-top: 5%;">
			<div class="col l4 m4 s12"></div>

			<div class="col l4 m4 s12">
				<div id="set-contact">
					<?= form_open('Seller/InsertSellerContact'); ?>
						<h5 class="white-text">Seller Contact Information</h5>
						<p class="white-text" id="set-contact-p">Fill This Form And Complete Our Profile Information</p>
						<input type="text" name="seller-first-name" id="seller-first-name" placeholder="First Name" required>

						<input type="text" name="seller-last-name" id="seller-last-name" placeholder="Last Name" required>

						<textarea class="materialize-textarea" name="seller-address" id="seller-address" placeholder="Address" required></textarea>

						<select name="seller-city">
							<option disabled selected>Select Your City</option>
							<option>Dhaka</option>
							<option>Rajshahi</option>
							<option>Rangpur</option>
							<option>Chottogram</option>
							<option>Sylhet</option>
							<option>Khulna</option>
							<option>Mymensing</option>
						</select>

						<br>

						<button type="submit" class="btn waves-effect waves-light green white-text" id="seller-button">Save Contact Information</button>
					<?= form_close(); ?>
				</div>
			</div>

			<div class="col l4 m4 s12"></div>
		</div>
		<!-- Contact Form Section End -->

		<!-- Body Section End -->

		<!-- JQuery JS file include -->
		<script type="text/javascript" src="<?= base_url('assets/jquery/jquery-3.3.1.min.js') ?>"></script>
		<!-- <script type="text/javascript" src="../assets/jquery/jquery-3.3.1.min.js"></script> -->

		<!-- Materialize JS file include -->
		<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
		<!-- <script type="text/javascript" src="../assets/materialize/js/materialize.js"></script> -->
	</body>
</html>