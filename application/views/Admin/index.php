<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<title>Admin Login | DOM</title>

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
				background: green;
			}

			#admin-design{
				border: 0px solid;
				margin: 15px;
			}

			#admin-heading{
				border: 0px solid white;
				margin: 5px;
				padding: 15px 15px 60px 15px;
				text-align: center;
				color: white;
			}

			#login-section{
				border: 0px solid;
				background: white;
				border-radius: 10px;
				margin: 5px;
				padding: 10px 25px 25px 25px;
			}

			#login-section button{
				width: 100%;
			}

			#login-link{
				color: white;
			}

			#admin-username, #admin-password{
				border-bottom: 1px solid green;
				box-shadow: none;
			}

			#admin-username:focus + label, #admin-password:focus + label{
				color: green;
				font-weight: bold;
				text-transform: uppercase;
			}

			#paragraph{
				border: 0px solid;
				margin-top: 5px;
				margin-right: -8px;
				margin-bottom: 0px;
				margin-left: -8px;
				padding: 0px 10px 0px 10px;
			}

			#paragraph p{
				color: white;
				text-align: justify;
				margin-top: 2px;
				margin-bottom: 2px;
			}

			#icon-border{
				border: 0px solid;
				margin-top: -15px;
			}

			#icon{
				border: 0px solid;
				margin-top: 12px;
				margin-right: -8px;
				margin-bottom: 8px;
				margin-left: -8px;
				padding: 0px 10px 0px 10px;
			}

			#icon h1{
				margin: 0px;
				color: white;
			}

			#icon span{
				color: cyan;
			}

			#icon h6{
				color: white;
			}
		</style>
	</head>
	<body>
		<!-- Body Section Start -->

		<div id="admin-design">
			<h1 id="admin-heading">Admin Login</h1>

			<!-- Login Form Section Start -->
			<div class="row">
				<div class="col l1 m1 s12"></div>
				<?= form_open("Admin/Login"); ?>
				<div class="col l3 m3 s12">
					<div id="login-section">
						<div class="input-field">
							<input type="text" name="admin-username" id="admin-username" required>
							<label for="admin-username">Username</label>
						</div>

						<div class="input-field">
							<input type="password" name="admin-password" id="admin-password" required>
							<label for="admin-password">Password</label>
						</div>
						<!-- Login Failed Message Section Start -->
						<?php
							if ($msg = $this->session->flashdata('msg'))
							{
						?>
							<p class="red-text"><?php echo $msg; ?></p>.
						<?php
							}
						?>
						<!-- Login Failed Message Section End -->

						<button type="submit" class="btn waves-effect waves-light green">Login</button>		
					</div>
					<center><a href="" id="login-link">Forgot Password</a></center>
				</div>
				<?= form_close(); ?>

				<div class="col l7 m7 s12">
					<div class="row">
						<div class="col l12 m12 s12" id="">
							<div id="paragraph">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>							
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col l3 m3 s12" id="icon-border">
							<div id="icon">
								<center>
									<h1><span class="fa fa-users"></span></h1>
									<h6>Manage Users</h6>							
								</center>							
							</div>
						</div>

						<div class="col l3 m3 s12" id="icon-border">
							<div id="icon">
								<center>
									<h1><span class="fa fa-gift"></span></h1>
									<h6>Manage Sales</h6>							
								</center>							
							</div>
						</div>

						<div class="col l3 m3 s12" id="icon-border">
							<div id="icon">
								<center>
									<h1><span class="fa fa-users"></span></h1>
									<h6>Manage Sellers</h6>							
								</center>							
							</div>
						</div>

						<div class="col l3 m3 s12" id="icon-border">
							<div id="icon">
								<center>
									<h1><span class="fa fa-cubes"></span></h1>
									<h6>Manage Items</h6>							
								</center>							
							</div>
						</div>
					</div>
				</div>
				<div class="col l1 m1 s12"></div>
			</div>
			<!-- Login Form Section End -->
		</div>

		<!-- Body Section End -->

		<!-- Update - 181218 -->

		<!-- JQuery JS file include -->
		<script type="text/javascript" src="<?= base_url('assets/jquery/jquery-3.3.1.min.js') ?>"></script>
		<!-- <script type="text/javascript" src="../assets/jquery/jquery-3.3.1.min.js"></script> -->

		<!-- Materialize JS file include -->
		<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
		<!-- <script type="text/javascript" src="../assets/materialize/js/materialize.js"></script> -->
	</body>
</html>