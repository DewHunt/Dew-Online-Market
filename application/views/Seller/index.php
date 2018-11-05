<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<title>Dew Online Market | Seller Account</title>

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

		<!-- Custome CSS File include -->
		<style type="text/css">
			body{
				background: rgb(0,0,0,0.05); 
			}

			#seller-username{
				width: 15%;
				border: 1px solid white;
				box-shadow: none;
				height: 30px;
				margin-left: 55%;
				padding-left: 10px;
				color: white;
			}

			#seller-password{
				width: 15%;
				border: 1px solid white;
				box-shadow: none;
				height: 30px;
				margin-left: 0%;
				padding-left: 10px;
				color: white;
			}

			#login-button{
				background: white;
				color: green;
				height: 32px;
				line-height: 32px;
				margin-top: -5px;
				box-shadow: none;
			}

			#register-div{
				padding: 15px;
			}

			#company-name{
				width: 99%;
				border: 1px solid green;
				border-radius: 3px;
				box-shadow: none;
				padding-left: 3px;
				height: 35px;
				margin-bottom: 25px;
			}

			#email-id{
				width: 48%;
				border: 1px solid green;
				border-radius: 3px;
				box-shadow: none;
				padding-left: 2px;
				height: 35px;
				margin-bottom: 25px;
			}

			#password{
				width: 48%;
				border: 1px solid green;
				border-radius: 3px;
				box-shadow: none;
				padding-left: 2px;
				height: 35px;
				margin-bottom: 25px;
				margin-left: 4px;
			}

			#mobile-number{
				width: 48%;
				border: 1px solid green;
				border-radius: 3px;
				box-shadow: none;
				padding-left: 2px;
				height: 35px;
				margin-bottom: 25px;
			}

			#pin-code{
				width: 48%;
				border: 1px solid green;
				border-radius: 3px;
				box-shadow: none;
				padding-left: 2px;
				height: 35px;
				margin-bottom: 25px;
				margin-left: 4px;
			}

			#mobile-number{
				width: 48%;
				border: 1px solid green;
				border-radius: 3px;
				box-shadow: none;
				padding-left: 2px;
				height: 35px;
				margin-bottom: 25px;
			}

			#pin-code{
				width: 48%;
				border: 1px solid green;
				border-radius: 3px;
				box-shadow: none;
				padding-left: 2px;
				height: 35px;
				margin-bottom: 25px;
				margin-left: 4px;
			}

			#company-pan-number{
				width: 48%;
				border: 1px solid green;
				border-radius: 3px;
				box-shadow: none;
				padding-left: 2px;
				height: 35px;
				margin-bottom: 25px;
			}

			#gst-number{
				width: 48%;
				border: 1px solid green;
				border-radius: 3px;
				box-shadow: none;
				padding-left: 2px;
				height: 35px;
				margin-bottom: 25px;
				margin-left: 4px;
			}

			#register-button{
				width: 99%;
				background: green;
				color: white;
			}

			p{
				width: 50%;
				text-align: justify;
			}

			.box{
				width: 10%;
				height: 2px;
				background: green;
				margin-top: 20px;
				margin-bottom: 20px;
			}

			#mobile-username, #mobile-password{
				box-shadow: none;
				border-bottom: 1px solid green;
			}

			#mobile-username + label, #mobile-password + label{
				color: green;
			}

			/*Media Query Section Start*/
			@media only screen and (max-width: 800px){
				p{width: 100%;}

				#email-id{width: 100%;}
				#password{width: 100%; margin-left: -1px;}

				#mobile-number{width: 100%;}
				#pin-code{width: 100%; margin-left: -1px;}

				#company-pan-number{width: 100%;}
				#gst-number{width: 100%; margin-left: -1px;}
			}
			/*Media Query Section End*/
		</style>
	</head>

	<body>
		<!-- Body Section Start -->

		<!-- Top Bar Section Start -->
		<nav class="green">
			<div class="nav-wrapper">
				<?= form_open(); ?>
				<a href="" class="brand-logo left">&nbsp;Seller Account</a>
				<input type="text" name="" class="hide-on-med-and-down" id="seller-username" placeholder="User Name or Email">
				<input type="password" name="" class="hide-on-med-and-down" id="seller-password" placeholder="Password">
				<button type="submit" class="btn waves-effects waves-light hide-on-med-and-down" id="login-button">Login</button>
				<?= form_close(); ?>
			</div>
		</nav>
		<!-- Top Bar Section End -->

		<!-- Mobile Screen Login Form Section Start -->
		<div class="hide-on-med-and-up" style="padding: 15px;">
			<div class="input-field">
				<input type="text" name="" id="mobile-username">
				<label for="mobile-username">User Name</label>
			</div>

			<div class="input-field">
				<input type="password" name="" id="mobile-password">
				<label for="mobile-password">Password</label>
			</div>
			<button type="submit" class="btn waves-effects waves-light" style="background: green;">Login</button>
		</div>
		<!-- Mobile Screen Login Form Section End -->

		<!-- Register Form Section Start -->
		<div class="row" style="padding: 15px;">
			<div class="col l8 m8 s12">
				<h5 style="margin-top: 2%; color: red;">Start <span class="green-text">Selling</span> on <span class="green-text">DOM</span></h5>
				<div class="box"></div>
				<P>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.
				</P>
				<p>
					Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<br>
				<button type="submit" class="btn waves-effects waves-light" style="background: green;"> Sell On DOM</button>
				<br><br><br><br>
			</div>
			<div class="col l4 m4 s12 white" id="register-div">
				<?= form_open(); ?>
					<h5 class="center-align">Register Now</h5>
					<input type="text" name="" id="company-name" placeholder="Company Name" required>
					<input type="text" name="" id="email-id" placeholder="Email Address" required>
					<input type="password" name="" id="password" placeholder="Password" required>
					<input type="number" name="" id="mobile-number" placeholder="Mobile Number" required>
					<input type="number" name="" id="pin-code" placeholder="Pin Code" required>
					<input type="text" name="" id="company-pan-number" placeholder="Company Pan Number" required>
					<input type="text" name="" id="gst-number" placeholder="GST Number" required>
					<button type="submit" class="btn waves-effects waves-light" id="register-button">Create Account</button>
				<?= form_close(); ?>
			</div>
		</div>
		<!-- Register Form Section End -->

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
				// Email Validation Section Start
				$('#email').keyup(function() {
					var email = $('#email').val();
					// Checking Empty Fields
					if ($.trim(email).length == 0) {
						alert('Enter Email Address');
						e.preventDefault();
					}

					if (validateEmail(email)) {
						alert('Nice!! your Email is valid, now you can continue..');
					}
					else {
						alert('Invalid Email Address');
						e.preventDefault();
					}
				});
			});
			// Function that validates email address through a regular expression.
			function validateEmail(email) {
				var filter = /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
				if (filter.test(email)) {
					return true;
				}
				else {
					return false;
				}
			}
		</script>
	</body>
</html>