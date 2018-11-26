<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<title>Mobile Upload | DOM</title>

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

		<!-- Cutome CSS File include -->
		<style type="text/css">
			body{
				padding: 10px;
				background: rgb(0,0,0,0.05);
			}

			select{
				display: block;
				border-bottom: 1px solid gray;
				height: 35px;
			}

			#section-heading{
				background: white;
				border: 1px solid green;
				border-radius: 20px 20px 0px 0px;
				margin: 5px;
				padding: 0px 20px 5px 20px;				
			}

			#section{
				background: white;
				border: 1px solid green;
				border-radius: 0px 0px 20px 20px;
				margin: 5px;
				padding: 20px;
			}

			#section h6{
				font-size: 14px;
				font-weight: bold;
				color: green;
			}

			#section input{
				margin-top: -20px;
			}
		</style>
	</head>
	<body>
		<!-- Body Section Start -->

		<div class="row">
			<div class="col s8 m8 s12">
				<div id="section-heading">
					<h5>General Details</h5>
				</div>
				<div id="section">
					<div class="row">
						<div class="col l4 m4 s12">
							<h6>Mobile Title</h6>
							<input type="text" name="mobile-title" id="mobile-title">
						</div>
						<div class="col l4 m4 s12">
							<h6>Mobile Model No</h6>
							<input type="text" name="mobile-no" id="mobile-no">
						</div>
						<div class="col l4 m4 s12">
							<h6>Mobile Model Name</h6>
							<input type="text" name="mobile-name" id="mobile-name">
						</div>						
					</div>

					<div class="row">
						<div class="col l4 m4 s12">
							<h6>Mobile Brand</h6>
							<select name="mobile-brand" id="mobile-brand">
								<option>Select Mobile Brand</option>
								<option>Brand One</option>
								<option>Brand Two</option>
								<option>Brand Three</option>
								<option>Brand Four</option>
								<option>Brand Five</option>
								<option>Brand Six</option>
							</select>							
						</div>

						<div class="col l8 m8 s12">
							<h6>Mobile Color</h6>
							<p>
								<label>
									<input type="radio" name="color">
									<span>Black</span>
								</label>

								<label>
									<input type="radio" name="color">
									<span>White</span>
								</label>

								<label>
									<input type="radio" name="color">
									<span>Red</span>
								</label>

								<label>
									<input type="radio" name="color">
									<span>Golden</span>
								</label>

								<label>
									<input type="radio" name="color">
									<span>Silver</span>
								</label>

								<label>
									<input type="radio" name="color">
									<span>Gray</span>
								</label>
							</p>
						</div>
					</div>

					<div class="row">
						<div class="col l4 m4 s12">
							<h6>Mobile Sim</h6>
							<p>
								<label>
									<input type="radio" name="sim">
									<span>Single Sim</span>
								</label>

								<label>
									<input type="radio" name="sim">
									<span>Dual Sim</span>
								</label>
							</p>							
						</div>
						<div class="col l4 m4 s12">
							<h6>Mobile Sim Type</h6>
							<p>
								<label>
									<input type="radio" name="sim-type">
									<span>Neno</span>
								</label>

								<label>
									<input type="radio" name="sim-type">
									<span>Pico</span>
								</label>

								<label>
									<input type="radio" name="sim-type">
									<span>Micro</span>
								</label>
							</p>							
						</div>
						<div class="col l4 m4 s12">
							<h6>OTG Support</h6>
							<p>
								<label>
									<input type="radio" name="otg">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="otg">
									<span>No</span>
								</label>
							</p>
						</div>
					</div>
				</div>

				<br>

				<div id="section-heading">
					<h5>Display Details</h5>
				</div>
				<div id="section">
					<div class="row">
						<div class="col l6 m6 s12">
							<h6>Mobile Display Size</h6>
							<select>
								<option>Select Display Size</option>
								<option>4.0 Inch</option>
								<option>4.5 Inch</option>
								<option>5.0 Inch</option>
								<option>5.5 Inch</option>
								<option>6.0 Inch</option>
								<option>6.5 Inch</option>
								<option>7.0 Inch</option>
							</select>
						</div>
						<div class="col l6 m6 s12">
							<h6>Mobile Display Resolution</h6>
							<select>
								<option>Select Display Resolution</option>
								<option>500 * 500</option>
								<option>600 * 700</option>
								<option>900 * 1024</option>
								<option>1024 * 720</option>
							</select>
						</div>						
					</div>

					<div class="row">
						<div class="col l6 m6 s12">
							<h6>Resolution Type</h6>
							<p>
								<label>
									<input type="radio" name="resolution-type">
									<span>One</span>
								</label>

								<label>
									<input type="radio" name="resolution-type">
									<span>Two</span>
								</label>

								<label>
									<input type="radio" name="resolution-type">
									<span>Three</span>
								</label>

								<label>
									<input type="radio" name="resolution-type">
									<span>Four</span>
								</label>
							</p>
						</div>

						<div class="col l6 m6 s12">
							<h6>Mobile Display Type</h6>
							<p>
								<label>
									<input type="radio" name="display-type">
									<span>One</span>
								</label>

								<label>
									<input type="radio" name="display-type">
									<span>Two</span>
								</label>

								<label>
									<input type="radio" name="display-type">
									<span>Three</span>
								</label>

								<label>
									<input type="radio" name="display-type">
									<span>Four</span>
								</label>
							</p>
						</div>
					</div>
				</div>

				<br>

				<div id="section-heading">
					<h5>Processor Details</h5>
				</div>
				<div id="section">
					<div class="row">
						<div class="col l6 m6 s12">
							<h6>Mobile Operating System</h6>
							<select>
								<option>Select Operating System</option>
								<option>Android</option>
								<option>IoS</option>
							</select>
						</div>
						<div class="col l6 m6 s12">
							<h6>Mobile Operating System Version</h6>
							<input type="text" name="os-version" id="os-version">
						</div>						
					</div>

					<div class="row">
						<div class="col l6 m6 s12">
							<h6>Mobile Processor Type</h6>
							<p>
								<label>
									<input type="radio" name="processor-tupe">
									<span>One</span>
								</label>

								<label>
									<input type="radio" name="processor-tupe">
									<span>Two</span>
								</label>

								<label>
									<input type="radio" name="processor-tupe">
									<span>Three</span>
								</label>

								<label>
									<input type="radio" name="processor-tupe">
									<span>Four</span>
								</label>
							</p>
						</div>

						<div class="col l6 m6 s12">
							<h6>Mobile Processor Speed</h6>
							<input type="text" name="processor-speed">
						</div>
					</div>
				</div>
			</div>
			<div class="col s4 m4 s12">
				<div style="background: white; border: 1px solid green; margin: 5px; padding: 0px 5px 5px 5px;">
					<h5>Div 02</h5>
				</div>
			</div>
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