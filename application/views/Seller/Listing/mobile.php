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
				margin-top: -3px;
				border-bottom: 1px solid silver;
				height: 35px;
				box-shadow: none;
			}

			select:focus{
				border: 1px solid green;
			}

			#section-heading{
				background: white;
				border: 1px solid green;
				border-radius: 20px 20px 0px 0px;
				margin: 5px;
				padding: 0px 15px 0px 15px;			
			}

			#section-heading h5{
				margin-top: 7px;
				margin-bottom: 7px;
			}

			#general-section,#display-section,#processor-section,#storage-section,#camera-section,#connectivity-section,#warranty-section,#listing-section,#image-section{
				background: white;
				border: 1px solid green;
				border-radius: 0px 0px 20px 20px;
				margin: 5px;
				padding: 15px 15px 0px 15px;
			}

			#general-section h6,#display-section h6,#processor-section h6,#storage-section h6,#camera-section h6,#connectivity-section h6,#warranty-section h6,#listing-section h6,#image-section h6{
				font-size: 14px;
				font-weight: bold;
				color: green;
				margin-top: 0px;
			}

			#general-section input,#display-section input,#processor-section input,#storage-section input,#camera-section input,#connectivity-section input,#warranty-section input,#listing-section input,#image-section input{
				border: 1px solid silver;
				height: 30px;
				box-shadow: none;
				margin: 0px;
				margin-left: -5px;
				padding-left: 10px;
			}

			#general-section input:focus,#display-section input:focus,#processor-section input:focus,#storage-section input:focus,#camera-section input:focus,#connectivity-section input:focus,#warranty-section input:focus,#listing-section input:focus,#image-section input:focus{
				border: 1px solid green;
			}

			#general-section p,#display-section p,#processor-section p,#storage-section p,#camera-section p,#connectivity-section p,#warranty-section p,#listing-section p,#image-section p{
				margin: 0px;
			}

			#general-section label,#display-section label,#processor-section label,#storage-section label,#camera-section label,#connectivity-section label,#warranty-section label,#listing-section label,#image-section label{
				color: black;
			}

			#button-section button, #btn-general-info, #btn-display-info, #btn-processor-info, #btn-storage-info, #btn-camera-info, #btn-connectivity-info, #btn-warranty-info{
				width: 100%;
				width: 100%; button
				margin-top: -10px;
				margin-bottom: -10px;
			}

			#show-img{
				width: 100px;
				height: 100px;
				margin-top: 5px;
				margin-bottom: 5px;
				border: 1px solid silver;
			}

			#img-one, #img-two, #img-three, #img-four{
				width: 180px;
			}
		</style>
	</head>
	<body>
		<!-- Body Section Start -->
		<!-- hidden Input Section Start -->
		<!-- <input type="text" name="mobile-id" id="mobile-id" style="display: none;"> -->
		<input type="text" name="mobile-id" id="mobile-id">
		<!-- hidden Input Section End -->

		<div class="row">
			<div class="col s8 m8 s12">
				<!-- General Details Section Start -->
				<div id="section-heading">
					<h5>Mobile General Details</h5>
				</div>
				<div id="general-section">
					<div class="row">
						<div class="col l4 m4 s12">
							<h6>Title</h6>
							<input type="text" name="mobile-title" id="mobile-title">
						</div>

						<div class="col l4 m4 s12">
							<h6>Model Number</h6>
							<input type="text" name="mobile-model-number" id="mobile-model-number">
						</div>
						<div class="col l4 m4 s12">
							<h6>Name</h6>
							<input type="text" name="mobile-model-name" id="mobile-model-name">
						</div>				
					</div>

					<div class="row">
						<!-- Show Brand Name Section Start -->
						<div class="col l4 m4 s12">
							<h6>Brand</h6>
							<div id="show-select-brand"></div>
						</div>
						<!-- Show Brand Name Section End -->

						<div class="col l8 m8 s12">
							<h6>Color</h6>
							<p id="color-p">
								<label>
									<input type="radio" name="mobile-color" value="Black">
									<span>Black</span>
								</label>

								<label>
									<input type="radio" name="mobile-color" value="White">
									<span>White</span>
								</label>

								<label>
									<input type="radio" name="mobile-color" value="Red">
									<span>Red</span>
								</label>

								<label>
									<input type="radio" name="mobile-color" value="Golden">
									<span>Golden</span>
								</label>

								<label>
									<input type="radio" name="mobile-color" value="Silver">
									<span>Silver</span>
								</label>
							</p>
						</div>
					</div>

					<div class="row">
						<div class="col l4 m4 s12">
							<h6>Sim</h6>
							<p id="sim-p">
								<label>
									<input type="radio" name="mobile-sim" value="Single Sim">
									<span>Single Sim</span>
								</label>

								<label>
									<input type="radio" name="mobile-sim" value="Dual Sim">
									<span>Dual Sim</span>
								</label>
							</p>							
						</div>

						<div class="col l4 m4 s12">
							<h6>Sim Type</h6>
							<p id="sim-type-p">
								<label>
									<input type="radio" name="mobile-sim-type" value="Nano">
									<span>Nano</span>
								</label>

								<label>
									<input type="radio" name="mobile-sim-type" value="Pcio">
									<span>Pico</span>
								</label>

								<label>
									<input type="radio" name="mobile-sim-type" value="Micro">
									<span>Micro</span>
								</label>
							</p>							
						</div>

						<div class="col l4 m4 s12">
							<h6>OTG Support</h6>
							<p id="otg-p">
								<label>
									<input type="radio" name="mobile-otg" value="Yes">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="mobile-otg" value="No">
									<span>No</span>
								</label>
							</p>
						</div>
					</div>

					<div class="row">
						<div class="col l12 m12 s12">
							<button type="button" class="btn waves-effect waves-light green" id="btn-general-info">Save & Continue</button>
						</div>
					</div>
				</div>
				<!-- General Details Section End -->

				<br>

				<!-- Display Details Section Start -->
				<div id="section-heading">
					<h5>Mobile Display Details</h5>
				</div>
				<div id="display-section">
					<div class="row">
						<div class="col l6 m6 s12">
							<h6>Display Size</h6>
							<select name="mobile-display-size" id="mobile-display-size">
								<option value="">Select Display Size</option>
								<option value="4.0 Inch">4.0 Inch</option>
								<option value="4.5 Inch">4.5 Inch</option>
								<option value="5.0 Inch">5.0 Inch</option>
								<option value="5.5 Inch">5.5 Inch</option>
								<option value="6.0 Inch">6.0 Inch</option>
								<option value="6.5 Inch">6.5 Inch</option>
								<option value="7.0 Inch">7.0 Inch</option>
							</select>
						</div>
						<div class="col l6 m6 s12">
							<h6>Display Resolution</h6>
							<select name="mobile-display-resolution" id="mobile-display-resolution">
								<option value="">Select Display Resolution</option>
								<option value="720px">720px</option>
								<option value="1080px">1080px</option>
								<option value="1400px">1400px</option>
								<option value="4K">4K</option>
								<option value="8K">8K</option>
							</select>
						</div>						
					</div>

					<div class="row">
						<div class="col l6 m6 s12">
							<h6>Display Type</h6>
							<p id="display-type-p">
								<label>
									<input type="radio" name="mobile-display-type" value="TFT">
									<span>TFT</span>
								</label>

								<label>
									<input type="radio" name="mobile-display-type" value="TFD">
									<span>TFD</span>
								</label>

								<label>
									<input type="radio" name="mobile-display-type" value="LCD">
									<span>LCD</span>
								</label>

								<label>
									<input type="radio" name="mobile-display-type" value="OLED">
									<span>OLED</span>
								</label>

								<label>
									<input type="radio" name="mobile-display-type" value="AMOLED">
									<span>AMOLED</span>
								</label>
							</p>
						</div>

						<div class="col l6 m6 s12">
							<h6>Resolution Type</h6>
							<p id="resolution-type-p">
								<label>
									<input type="radio" name="mobile-resolution-type" value="HD">
									<span>HD</span>
								</label>

								<label>
									<input type="radio" name="mobile-resolution-type" value="Full HD">
									<span>Full HD</span>
								</label>

								<label>
									<input type="radio" name="mobile-resolution-type" value="2K">
									<span>2K</span>
								</label>

								<label>
									<input type="radio" name="mobile-resolution-type" value="4k">
									<span>4K</span>
								</label>
							</p>
						</div>
					</div>

					<div class="row">
						<div class="col l12 m12 s12">
							<button type="button" class="btn waves-effect waves-light green" id="btn-display-info">Save & Continue</button>
						</div>
					</div>
				</div>
				<!-- Display Details Section End -->

				<br>

				<!-- Processor Details Section Start -->
				<div id="section-heading">
					<h5>Mobile Processor Details</h5>
				</div>
				<div id="processor-section">
					<div class="row">
						<div class="col l6 m6 s12">
							<h6>Operating System</h6>
							<select name="mobile-os" id="mobile-os">
								<option value="">Select Operating System</option>
								<option value="Windows">Windows</option>
								<option value="Black Berry OS">Black Berry OS</option>
								<option value="Android">Android</option>
								<option value="iOS">iOS</option>
							</select>
						</div>

						<div class="col l6 m6 s12">
							<h6>Operating System Version</h6>
							<input type="text" name="mobile-os-version" id="mobile-os-version">
						</div>						
					</div>

					<div class="row">
						<div class="col l6 m6 s12">
							<h6>Processor Type</h6>
							<p id="processor-type-p">
								<label>
									<input type="radio" name="mobile-processor-type" value="Octa Core">
									<span>Octa Core</span>
								</label>

								<label>
									<input type="radio" name="mobile-processor-type" value="Hexa Core">
									<span>Hexa Core</span>
								</label>

								<label>
									<input type="radio" name="mobile-processor-type" value="Snapdragon">
									<span>Snapdragon</span>
								</label>
							</p>
						</div>

						<div class="col l6 m6 s12">
							<h6>Processor Size</h6>
							<input type="text" name="mobile-processor-size" id="mobile-processor-size">
						</div>
					</div>

					<div class="row">
						<div class="col l12 m12 s12">
							<button type="button" class="btn waves-effect waves-light green" id="btn-processor-info">Save & Continue</button>
						</div>
					</div>
				</div>
				<!-- Processor Details Section End -->

				<br>

				<!-- Storage Details Section Start -->
				<div id="section-heading">
					<h5>Mobile Storage Details</h5>
				</div>
				<div id="storage-section">
					<div class="row">
						<div class="col l6 m6 s12">
							<h6>Internal Storage</h6>
							<select name="mobile-internal-storage" id="mobile-internal-storage">
								<option value="">Select Internal Storage</option>
								<option value="8GB">8GB</option>
								<option value="16GB">16GB</option>
								<option value="32GB">32GB</option>
								<option value="64GB">64GB</option>
								<option value="128GB">128GB</option>
								<option value="256GB">256GB</option>
							</select>
						</div>

						<div class="col l6 m6 s12">
							<h6>RAM</h6>
							<select name="mobile-ram" id="mobile-ram">
								<option value="">Select RAM</option>
								<option value="1GB">1GB</option>
								<option value="2GB">2GB</option>
								<option value="3GB">3GB</option>
								<option value="4GB">4GB</option>
								<option value="6GB">6GB</option>
								<option value="8GB">8GB</option>
							</select>
						</div>						
					</div>

					<div class="row">
						<div class="col l3 m3 s12">
							<h6>Expandable Storage</h6>
							<p id="expandable-storage-p">
								<label>
									<input type="radio" name="mobile-expandable-storage" value="Yes">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="mobile-expandable-storage" value="No">
									<span>No</span>
								</label>
							</p>
						</div>

						<div class="col l3 m3 s12">
							<h6>Memory Card Slot</h6>
							<p id="memory-card-slot-p">
								<label>
									<input type="radio" name="mobile-memory-card-slot" value="Yes">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="mobile-memory-card-slot" value="No">
									<span>No</span>
								</label>
							</p>
						</div>

						<div class="col l6 m6 s12">
							<h6>Memory Card Type</h6>
							<select name="mobile-memory-card-type" id="mobile-memory-card-type">
								<option value="">Select Memory Card Type</option>
								<option value="Mini SD Card">Mini SD Card</option>
								<option value="Micro SD Card">Micro SD Card</option>
							</select>
						</div>
					</div>

					<div class="row">
						<div class="col l12 m12 s12">
							<button type="button" class="btn waves-effect waves-light green" id="btn-storage-info">Save & Continue</button>
						</div>
					</div>
				</div>
				<!-- Storage Details Section End -->

				<br>

				<!-- Camera Details Section Start -->
				<div id="section-heading">
					<h5>Mobile Camera Details</h5>
				</div>
				<div id="camera-section">
					<div class="row">
						<div class="col l4 m4 s12">
							<h6>Primary Camera</h6>
							<p id="primary-camera-p">
								<label>
									<input type="radio" name="mobile-primary-camera" value="Yes">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="mobile-parimary-camera" value="No">
									<span>No</span>
								</label>
							</p>
						</div>

						<div class="col l4 m4 s12">
							<h6>Secondary Camera</h6>
							<p id="secondary-camera-p">
								<label>
									<input type="radio" name="mobile-secondary-camera" value="Yes">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="mobile-secondary-camera" value="No">
									<span>No</span>
								</label>
							</p>
						</div>

						<div class="col l4 m4 s12">
							<h6>Camera Flash</h6>
							<p id="camera-flash-p">
								<label>
									<input type="radio" name="mobile-flash" value="Yes">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="mobile-flash" value="No">
									<span>No</span>
								</label>
							</p>
						</div>				
					</div>

					<div class="row">
						<div class="col l6 m6 s12">
							<h6>Primary Camera Resolution</h6>
							<input type="text" name="mobile-primary-camera-resolution" id="mobile-primary-camera-resolution">
						</div>

						<div class="col l6 m6 s12">
							<h6>Secondary Camera Resolution</h6>
							<input type="text" name="mobile-secondary-camera-resolution" id="mobile-secondary-camera-resolution">
						</div>						
					</div>

					<div class="row">
						<div class="col l12 m12 s12">
							<button type="button" class="btn waves-effect waves-light green" id="btn-camera-info">Save & Continue</button>
						</div>
					</div>
				</div>
				<!-- Camera Details Section End -->

				<br>

				<!-- Connectivity Details Section Start -->
				<div id="section-heading">
					<h5>Mobile Connectivity Details</h5>
				</div>
				<div id="connectivity-section">
					<div class="row">
						<div class="col l6 m6 s12">
							<h6>Network Type</h6>
							<input type="text" name="mobile-network-type" id="mobile-network-type">
						</div>

						<div class="col l6 m6 s12">
							<h6>Battery</h6>
							<input type="text" name="mobile-battery" id="mobile-battery">
						</div>
					</div>

					<div class="row">
						<div class="col l4 m4 s12">
							<h6>Bluetooth</h6>
							<p id="bluetooth-p">
								<label>
									<input type="radio" name="mobile-bluetooth" value="Yes">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="mobile-bluetooth" value="No">
									<span>No</span>
								</label>
							</p>
						</div>

						<div class="col l4 m4 s12">
							<h6>WiFi</h6>
							<p id="wifi-p">
								<label>
									<input type="radio" name="mobile-wifi" value="Yes">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="mobile-wifi" value="No">
									<span>No</span>
								</label>
							</p>
						</div>

						<div class="col l4 m4 s12">
							<h6>Micro USB Slot</h6>
							<p id="usb-slot-p">
								<label>
									<input type="radio" name="mobile-usb-slot" value="Yes">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="mobile-usb-slot" value="No">
									<span>No</span>
								</label>
							</p>
						</div>
					</div>

					<div class="row">
						<div class="col l12 m12 s12">
							<button type="button" class="btn waves-effect waves-light green" id="btn-connectivity-info">Save & Continue</button>
						</div>
					</div>
				</div>
				<!-- Connectivity Details Section End -->

				<br>

				<!-- Warranty Details Section Start -->
				<div id="section-heading">
					<h5>Mobile Warranty Details</h5>
				</div>
				<div id="warranty-section">
					<div class="row">
						<div class="col l4 m4 s12">
							<h6>Duration Formate</h6>
							<select name="mobile-duration-formate" id="mobile-duration-formate">
								<option value="">Select Duration Formate</option>
								<option value="7 Days">7 Days</option>
								<option value="15 Days">15 Days</option>
								<option value="30 Days">30 Days</option>
								<option value="45 Days">45 Days</option>
								<option value="60 Days">60 Days</option>
							</select>
						</div>

						<div class="col l4 m4 s12">
							<h6>Return Policy</h6>
							<select name="mobile-return-policy" id="mobile-return-policy">
								<option value="">Select Return Policy</option>
								<option value="1 days">1 days</option>
								<option value="5 days">5 days</option>
								<option value="7 days">7 days</option>
								<option value="10 days">10 days</option>
								<option value="15 days">15 days</option>
							</select>
						</div>

						<div class="col l4 m4 s12">
							<h6>Offers</h6>
							<select class="mobile-offers" id="mobile-offers">
								<option value="">Select Offers</option>
								<option value="5%">5%</option>
								<option value="10%">10%</option>
								<option value="15%">15%</option>
								<option value="20%">20%</option>
								<option value="25%">25%</option>
							</select>
						</div>
					</div>

					<div class="row">
						<div class="col l6 m6 s12">
							<h6>Price</h6>
							<input type="text" name="mobile-price" id="mobile-price">
						</div>

						<div class="col l6 m6 s12">
							<h6>Shipping Charge</h6>
							<input type="text" name="mobile-shipping-charge" id="mobile-shipping-charge">
						</div>
					</div>

					<div class="row">
						<div class="col l12 m12 s12">
							<button type="button" class="btn waves-effect waves-light green" id="btn-warranty-info">Save & Continue</button>
						</div>
					</div>
				</div>
				<!-- Warranty Details Section End -->

				<br>

				<!-- Image Section Start -->
				<div id="section-heading">
					<h5>Image</h5>
				</div>
				<div id="image-section">
					<div class="row">
						<div class="col l3 m3 s12" id="show-img-section">
							<center>
								<div id="show-img"></div>
								<input type="file" name="img-one" id="img-one">
							</center>
						</div>
						<div class="col l3 m3 s12" id="show-img-section">
							<center>
								<div id="show-img"></div>
								<input type="file" name="img-two" id="img-two">
							</center>
						</div>
						<div class="col l3 m3 s12" id="show-img-section">
							<center>
								<div id="show-img"></div>
								<input type="file" name="img-three" id="img-three">
							</center>
						</div>
						<div class="col l3 m3 s12" id="show-img-section">
							<center>
								<div id="show-img"></div>
								<input type="file" name="img-four" id="img-four">
							</center>
						</div>
					</div>
				</div>
				<!-- Image Section End -->

				<br>

				<!-- Listing Price Details Section Start -->
				<div id="section-heading">
					<h5>Listing Fees</h5>
				</div>
				<div id="listing-section">
					<div class="row">
						<div class="col l4 m4 s12">
							<h6>Listing Fees</h6>
							<span><b>৳250</b></span>
						</div>
					</div>
				</div>
				<!-- Listing Price Details Section End -->

				<br>

				<!-- Button Section Start -->
				<div id="button-section">
					<div class="row">
						<div class="col l12 m12 s12 center">
							<button type="button" name="submit" class="btn waves-effect waves-light">Save</button>
						</div>
					</div>
				</div>
				<!-- Button Section End -->
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

		<!-- Ajax JS File Include -->
		<script type="text/javascript" src="<?= base_url('assets/ajax/ajax.js'); ?>"></script>

		<!-- Materialize JS file include -->
		<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
		<!-- <script type="text/javascript" src="../assets/materialize/js/materialize.js"></script> -->

		<!-- Custom Ajax Script Include -->
		<script type="text/javascript">
			$(function(){
				// Get Mobile Brand Data Script Section Start
				GetMobileBrands();
				function GetMobileBrands(){
					$.ajax({
						type:'ajax',
						url:'../Admin/GetAllMobileBrands',
						success:function(data){
							$('#show-select-brand').html(data);
						},
						error:function(){
							alert('Database Has No Brands Name');
						}
					});
				}
				// Get Mobile Brand Data Script Section End

				// Hide Section Start
				$('#display-section').hide();
				$('#processor-section').hide();
				$('#storage-section').hide();
				$('#camera-section').hide();
				$('#connectivity-section').hide();
				$('#warranty-section').hide();
				$('#image-section').hide();
				// Hide Section End

								$('body,html').animate({scrollTop:$('#general-section').height() + $('#display-section').height() + $('#processor-section').height() + $('#storage-section').height() + $('#camera-section').height() + $('#connectivity-section').height() + 600},200);

				// General Info Script Section Start
				$('#btn-general-info').click(function(){
					var mobile_title = $('#mobile-title').val();
					var mobile_model_number = $('#mobile-model-number').val();
					var mobile_model_name = $('#mobile-model-name').val();
					var mobile_brand_id = $('#mobile-brand-id').val();

					var mobile_color = $('input[name=mobile-color]:checked').val();
					var mobile_sim = $('input[name=mobile-sim]:checked').val();
					var mobile_sim_type = $('input[name=mobile-sim-type]:checked').val();
					var mobile_otg = $('input[name=mobile-otg]:checked').val();

					if (mobile_title == "" || mobile_model_number == "" || mobile_model_name == "" || mobile_brand_id == "" || mobile_color == null || mobile_sim == null || mobile_sim_type == null || mobile_otg == null)
					{
						if (mobile_title == "")
						{
							M.toast({html:'Please Enter Mobile Title'});
							$('#mobile-title').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-title').css({'border':'1px solid silver'});
						}

						if (mobile_model_number == "")
						{
							M.toast({html:'Please Enter Model Number'});
							$('#mobile-model-number').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-model-number').css({'border':'1px solid silver'});
						}

						if (mobile_model_name == "")
						{
							M.toast({html:'Please Enter Mobile Name'});
							$('#mobile-model-name').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-model-name').css({'border':'1px solid silver'});
						}

						if (mobile_brand_id == "")
						{
							M.toast({html:'Please Select A Brand Name'});
							$('#mobile-brand-id').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-brand-id').css({'border':'1px solid silver'});
						}

						if (mobile_color == null)
						{
							M.toast({html:'Please Checked One Color'});
							$('#color-p label').css({'color':'red'});
						}
						else
						{
							$('#color-p label').css({'color':'black'});
						}

						if (mobile_sim == null)
						{
							M.toast({html:'Please Checked One Sim'});
							$('#sim-p label').css({'color':'red'});
						}
						else
						{
							$('#sim-p label').css({'color':'black'});
						}

						if (mobile_sim_type == null)
						{
							M.toast({html:'Please Checked One Sim Type'});
							$('#sim-type-p label').css({'color':'red'});
						}
						else
						{
							$('#sim-type-p label').css({'color':'black'});
						}

						if (mobile_otg == null)
						{
							M.toast({html:'Please Checked One OTG'});
							$('#otg-p label').css({'color':'red'});
						}
						else
						{
							$('#otg-p label').css({'color':'black'});
						}
					}
					else
					{
						$('#mobile-title').css({'border':'1px solid silver'});
						$('#mobile-model-number').css({'border':'1px solid silver'});
						$('#mobile-model-name').css({'border':'1px solid silver'});
						$('#mobile-brand-id').css({'border':'1px solid silver'});
						$('#color-p label').css({'color':'black'});
						$('#sim-p label').css({'color':'black'});
						$('#sim-type-p label').css({'color':'black'});
						$('#otg-p label').css({'color':'black'});
						
						$.ajax({
							type:'ajax',
							method:'POST',
							url:'InsertMobilesGeneralInformation',
							data:{mobile_title:mobile_title,mobile_model_number:mobile_model_number,mobile_model_name:mobile_model_name,mobile_brand_id:mobile_brand_id,mobile_color:mobile_color,mobile_sim:mobile_sim,mobile_sim_type:mobile_sim_type,mobile_otg:mobile_otg},
							success:function(data){
								var mobile_id = data;
								$('#mobile-id').val(mobile_id);

								$('#mobile-title').prop('disabled',true);
								$('#mobile-model-number').prop('disabled',true);
								$('#mobile-model-name').prop('disabled',true);
								$('#mobile-brand-id').prop('disabled',true);
								$('#btn-general-info').prop('disabled',true);
								$('body,html').animate({scrollTop:$('#general-section').height() + 100},200);
								$('#display-section').show();
								alert('Mobile General Information Saved Successfully');
							},
							error:function(){
								alert('Mobile General Information Not Saved Successfully');
							}
						});
					}
				});
				// General Info Script Section End

				// Display Info Script Section Start
				$('#btn-display-info').click(function(){
					var mobile_display_size = $('#mobile-display-size').val();
					var mobile_display_resolution = $('#mobile-display-resolution').val();

					var mobile_display_type = $('input[name=mobile-display-type]:checked').val();
					var mobile_resolution_type = $('input[name=mobile-resolution-type]:checked').val();
					var mobile_id = $('#mobile-id').val();

					// alert(mobile_resolution_type);

					if (mobile_display_size == "" || mobile_display_resolution == "" || mobile_display_type == null || mobile_resolution_type == null)
					{
						if (mobile_display_size == "")
						{
							M.toast({html:'Please Select Dsiplay Size'});
							$('#mobile-display-size').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-display-size').css({'border':'1px solid silver'});
						}

						if (mobile_display_resolution == "")
						{
							M.toast({html:'Please Select Display Resolution'});
							$('#mobile-display-resolution').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-display-resolution').css({'border':'1px solid silver'});
						}

						if (mobile_display_type == null)
						{
							M.toast({html:'Please Select Display Type'});
							$('#display-type-p label').css({'color':'red'});
						}
						else
						{
							$('#display-type-p label').css({'color':'black'});
						}

						if (mobile_resolution_type == null)
						{
							M.toast({html:'Please Select Resolution Type'});
							$('#resolution-type-p label').css({'color':'red'});
						}
						else
						{
							$('#resolution-type-p label').css({'color':'black'});
						}
					}
					else
					{
						$('#mobile-display-size').css({'border':'1px solid silver'});
						$('#mobile-display-resolution').css({'border':'1px solid silver'});
						$('#display-type-p label').css({'color':'black'});
						$('#resolution-type-p label').css({'color':'black'});

						$.ajax({
							type:'ajax',
							method:'POST',
							url:'InsertMobilesDisplayInformation',
							data:{mobile_id:mobile_id,mobile_display_size:mobile_display_size,mobile_display_resolution:mobile_display_resolution,mobile_display_type:mobile_display_type,mobile_resolution_type:mobile_resolution_type},
							success:function(data){
								var mobile_id = data;
								$('#mobile-id').val(mobile_id);

								$('#mobile-display-size').prop('disabled',true);
								$('#mobile-display-resolution').prop('disabled',true);
								$('#btn-display-info').prop('disabled',true);

								$('body,html').animate({scrollTop:$('#general-section').height() + $('#display-section').height() + 240},200);

								$('#processor-section').show();
								alert("Mobile Display Information Saved Successfully");
							},
							error:function(){
								alert('Mobile Display Information Not Saved Successfully');
							}
						});
					}
				});
				// Display Info Script Section End

				// Processor Info Script Section Start
				$('#btn-processor-info').click(function(){
					var mobile_os = $('#mobile-os').val();
					var mobile_os_version = $('#mobile-os-version').val();

					var mobile_processor_type = $('input[name=mobile-processor-type]:checked').val();

					var mobile_processor_size = $('#mobile-processor-size').val();

					var mobile_id = $('#mobile-id').val();

					if (mobile_os == "" || mobile_os_version == "" || mobile_processor_type == null || mobile_processor_size == "")
					{
						if (mobile_os == "")
						{
							M.toast({html:'Please Select Operating System'});
							$('#mobile-os').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-os').css({'border':'1px solid silver'});
						}

						if (mobile_os_version == "")
						{
							M.toast({html:'Please Enter Operating System Version'});
							$('#mobile-os-version').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-os-version').css({'border':'1px solid silver'});
						}

						if (mobile_processor_type == null)
						{
							M.toast({html:'Please Select Processor Type'});
							$('#processor-type-p label').css({'color':'red'});
						}
						else
						{
							$('#processor-type-p label').css({'color':'black'});
						}

						if (mobile_processor_size == "")
						{
							M.toast({html:'Please Enter Processor Size'});
							$('#mobile-processor-size').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-processor-size').css({'border':'1px solid silver'});
						}
					}
					else
					{
						$('#mobile-os').css({'border':'1px solid silver'});
						$('#mobile-os-version').css({'border':'1px solid silver'});
						$('#processor-type-p label').css({'color':'black'});
						$('#mobile-processor-size').css({'border':'1px solid silver'});

						$.ajax({
							type:'ajax',
							method:'POST',
							url:'InsertMobilesProcessorInformation',
							data:{mobile_os:mobile_os,mobile_os_version:mobile_os_version,mobile_processor_type:mobile_processor_type,mobile_processor_size:mobile_processor_size,mobile_id:mobile_id},
							success:function(data){
								var mobile_id = data;
								$('#mobile-id').val(mobile_id);

								$('#mobile-os-version').prop('disabled',true);
								$('#mobile-processor-type').prop('disabled',true);
								$('#mobile-processor-size').prop('disabled',true);
								$('#btn-processor-info').prop('disabled',true);

								$('body,html').animate({scrollTop:$('#general-section').height() + $('#display-section').height() + $('#processor-section').height() + 340},200);

								$('#storage-section').show();
								alert("Mobile Processor Information Saved Successfully");
							},
							error:function(){
								alert('Mobile Processor Information Not Saved Successfully');
							}
						});
					}
				});
				// Processor Info Script Section End

				// Storage Info Script Section Start
				$('#btn-storage-info').click(function(){
					var mobile_internal_storage = $('#mobile-internal-storage').val();
					var mobile_ram = $('#mobile-ram').val();

					var mobile_expandable_storage = $('input[name=mobile-expandable-storage]:checked').val();
					var mobile_memory_card_slot = $('input[name=mobile-memory-card-slot]:checked').val();

					var mobile_memory_card_type = $('#mobile-memory-card-type').val();

					var mobile_id = $('#mobile-id').val();

					if (mobile_internal_storage == "" || mobile_ram == "" || mobile_expandable_storage == null || mobile_memory_card_slot == null || mobile_memory_card_type == "")
					{
						if (mobile_internal_storage == "")
						{
							M.toast({html:'Please Select Internal Storage'});
							$('#mobile-internal-storage').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-internal-storage').css({'border':'1px solid silver'});
						}

						if (mobile_ram == "")
						{
							M.toast({html:'Please Select RAM'});
							$('#mobile-ram').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-ram').css({'border':'1px solid silver'});
						}

						if (mobile_expandable_storage == null)
						{
							M.toast({html:'Please Select Expandable Storage'});
							$('#expandable-storage-p label').css({'color':'red'});
						}
						else
						{
							$('#expandable-storage-p label').css({'color':'black'});
						}

						if (mobile_memory_card_slot == null)
						{
							M.toast({html:'Please Select Memory Card Slot'});
							$('#memory-card-slot-p label').css({'color':'red'});
						}
						else
						{
							$('#memory-card-slot-p label').css({'color':'black'});
						}

						if (mobile_memory_card_type == "")
						{
							M.toast({html:'PLease Select Memory Card Type'});
							$('#mobile-memory-card-type').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-memory-card-type').css({'border':'1px solid silver'});
						}
					}
					else
					{
						$('#mobile-internal-storage').css({'border':'1px solid silver'});
						$('#mobile-ram').css({'border':'1px solid silver'});
						$('#expandable-storage-p label').css({'color':'black'});
						$('#memory-card-slot-p label').css({'color':'black'});
						$('#mobile-memory-card-type').css({'border':'1px solid silver'});

						$.ajax({
							type:'ajax',
							method:'POST',
							url:'InsertMobilesStorageInformation',
							data:{mobile_id:mobile_id,mobile_internal_storage:mobile_internal_storage,mobile_ram:mobile_ram,mobile_expandable_storage:mobile_expandable_storage,mobile_memory_card_slot:mobile_memory_card_slot,mobile_memory_card_type:mobile_memory_card_type},
					
							success:function(data){
								var mobile_id = data;
								$('#mobile-id').val(mobile_id);

								$('#mobile-internal-storage').prop('disabled',true);
								$('#mobile-ram').prop('disabled',true);
								$('#mobile-memory-card-type').prop('disabled',true);
								$('#btn-storage-info').prop('disabled',true);

								$('body,html').animate({scrollTop:$('#general-section').height() + $('#display-section').height() + $('#processor-section').height() + $('#storage-section').height() + 450},200);

								$('#camera-section').show();
								alert("Mobile Storage Information Saved Successfully");
							},
							error:function(){
								alert('Mobile Storage Information Not Saved Successfully');
							}
						});
					}
				});
				// Storage Info Script Section End

				// Camera Info Section Start
				$('#btn-camera-info').click(function(){
					var mobile_primary_camera = $('input[name=mobile-primary-camera]:checked').val();
					var mobile_secondary_camera = $('input[name=mobile-secondary-camera]:checked').val();
					var mobile_flash = $('input[name=mobile-flash]:checked').val();

					var mobile_primary_camera_resolution = $('#mobile-primary-camera-resolution').val();
					var mobile_secondary_camera_resolution = $('#mobile-secondary-camera-resolution').val();

					var mobile_id = $('#mobile-id').val();

					// alert(mobile_primary_camera_resolution);

					if (mobile_primary_camera == null || mobile_secondary_camera == null || mobile_flash == null || mobile_primary_camera_resolution == "" || mobile_secondary_camera_resolution == "")
					{
						if (mobile_primary_camera == null)
						{
							M.toast({html:'Please Select Primary Camera'});
							$('#primary-camera-p label').css({'color':'red'});
						}
						else
						{
							$('#primary-camera-p label').css({'color':'black'});
						}

						if (mobile_secondary_camera == null)
						{
							M.toast({html:'Please Select Secondary Camera'});
							$('#secondary-camera-p label').css({'color':'red'});
						}
						else
						{
							$('#secondary-camera-p label').css({'color':'black'});
						}
						
						if (mobile_flash == null)
						{
							M.toast({html:'Please Select Camera Flash'});
							$('#camera-flash-p label').css({'color':'red'});
						}
						else
						{
							$('#camera-flash-p label').css({'color':'black'});
						}

						if (mobile_primary_camera_resolution == "")
						{
							M.toast({html:'Please Select Primary Camera Resolution'});
							$('#mobile-primary-camera-resolution').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-primary-camera-resolution').css({'border':'1px solid silver'});
						}

						if (mobile_secondary_camera_resolution == "")
						{
							M.toast({html:'Please Select Secondary Camera Resolution'});
							$('#mobile-secondary-camera-resolution').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-secondary-camera-resolution').css({'border':'1px solid silver'});
						}
					}
					else
					{
						$('#primary-camera-p label').css({'color':'black'});						
						$('#secondary-camera-p label').css({'color':'black'});						
						$('#camera-flash-p label').css({'color':'black'});
						$('#mobile-primary-camera-resolution').css({'border':'1px solid silver'});
						$('#mobile-secondary-camera-resolution').css({'border':'1px solid silver'});

						$.ajax({
							type:'ajax',
							method:'POST',
							url:'InsertMobilesCameraInformation',
							data:{mobile_id:mobile_id,mobile_primary_camera:mobile_primary_camera,mobile_secondary_camera:mobile_secondary_camera,mobile_flash:mobile_flash,mobile_primary_camera_resolution:mobile_primary_camera_resolution,mobile_secondary_camera_resolution:mobile_secondary_camera_resolution},
							success:function(data){
								var mobile_id = data;
								$('#mobile_id').val(mobile_id);

								$('#mobile-primary-camera-resolution').prop('disabled',true);
								$('#mobile-secondary-camera-resolution').prop('disabled',true);
								$('#btn-camera-info').prop('disabled',true);

								$('body,html').animate({scrollTop:$('#general-section').height() + $('#display-section').height() + $('#processor-section').height() + $('#storage-section').height() + $('#camera-section').height() + 540},200);

								$('#connectivity-section').show();
								alert('Mobile Camera Information Section Saved Successfully');
							},
							error:function(){
								alert('Mobile Camera Information Not Saved Successfully');
							}
						});
					}
				});
				// Camera Info Section End

				// Connectivity Info Section Start
				$('#btn-connectivity-info').click(function(){
					var mobile_network_type = $('#mobile-network-type').val();
					var mobile_battery = $('#mobile-battery').val();

					var mobile_bluetooth = $('input[name=mobile-bluetooth]:checked').val();
					var mobile_wifi = $('input[name=mobile-wifi]:checked').val();
					var mobile_usb_slot = $('input[name=mobile-usb-slot]:checked').val();

					var mobile_id = $('#mobile-id').val();

					if (mobile_network_type == "" || mobile_battery == "" || mobile_bluetooth == null || mobile_wifi == null || mobile_usb_slot == null)
					{
						if (mobile_network_type == "")
						{
							M.toast({html:'Please Select Network Type'});
							$('#mobile-network-type').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-network-type').css({'border':'1px solid silver'});
						}

						if (mobile_battery == "")
						{
							M.toast({html:'Please Select Battery'});
							$('#mobile-battery').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-battery').css({'border':'1px solid silver'});
						}

						if (mobile_bluetooth == null)
						{
							M.toast({html:'Please Select Bluetooth'});
							$('#bluetooth-p label').css({'color':'red'});
						}
						else
						{
							$('#bluetooth-p label').css({'color':'black'});
						}

						if (mobile_wifi == null)
						{
							M.toast({html:'Please Select WiFi'});
							$('#wifi-p label').css({'color':'red'});
						}
						else
						{
							$('#wifi-p label').css({'color':'black'});
						}

						if (mobile_usb_slot == null)
						{
							M.toast({html:'Please Select USB Slot'});
							$('#usb-slot-p label').css({'color':'red'});
						}
						else
						{
							$('#usb-slot-p label').css({'color':'black'});
						}
					}
					else
					{
						$('#mobile-network-type').css({'border':'1px solid silver'});
						$('#mobile-battery').css({'border':'1px solid silver'});
						$('#bluetooth-p label').css({'color':'black'});
						$('#wifi-p label').css({'color':'black'});
						$('#usb-slot-p label').css({'color':'black'});

						$.ajax({
							type:'ajax',
							method:'POST',
							url:'InsertMobilesConnectivityInformation',
							data:{mobile_id:mobile_id,mobile_network_type:mobile_network_type,mobile_battery:mobile_battery,mobile_bluetooth:mobile_bluetooth,mobile_wifi:mobile_wifi,mobile_usb_slot:mobile_usb_slot},
							success:function(data){
								var mobile_id = data;
								$('#mobile-id').val(mobile_id);

								$('#mobile-network-type').prop('disabled',true);
								$('#mobile-battery').prop('disabled',true);
								$('#btn-connectivity-info').prop('disabled',true);

								$('body,html').animate({scrollTop:$('#general-section').height() + $('#display-section').height() + $('#processor-section').height() + $('#storage-section').height() + $('#camera-section').height() + $('#connectivity-section').height() + 640},200);
								$('#warranty-section').show();
								alert('Mobile Connectivity Information Saved Successfully');
							},
							error:function(){
								alert('Mobile Connectivity Information Not Saved Successfully');
							}
						});
					}
				});
				// Connectivity Info Section End

				// Warranty Info Section Start
				$('#btn-warranty-info').click(function(){
					var mobile_duration_formate = $('#mobile-duration-formate').val();
					var mobile_return_policy = $('#mobile-return-policy').val();
					var mobile_offers = $('#mobile-offers').val();
					var mobile_price = $('#mobile-price').val();
					var mobile_shipping_charge = $('#mobile-shipping-charge').val();

					var mobile_id = $('#mobile-id').val();

					if (mobile_duration_formate == "" || mobile_return_policy == "" || mobile_offers == "" || mobile_price == "" || mobile_shipping_charge == "")
					{
						if (mobile_duration_formate == "")
						{
							M.toast({html:'Please Select Duration Formate'});
							$('#mobile-duration-formate').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-duration-formate').css({'border':'1px solid silver'});
						}

						if (mobile_return_policy == "")
						{
							M.toast({html:'Please Select Return Policy'});
							$('#mobile-return-policy').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-return-policy').css({'border':'1px solid silver'});
						}

						if (mobile_offers == "")
						{
							M.toast({html:'Please Select Offers'});
							$('#mobile-offers').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-offers').css({'border':'1px solid silver'});
						}

						if (mobile_price == "")
						{
							M.toast({html:'Please Select Price'});
							$('#mobile-price').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-price').css({'border':'1px solid silver'});
						}

						if (mobile_shipping_charge == "")
						{
							M.toast({html:'Please Select Shipping Charge'});
							$('#mobile-shipping-charge').css({'border':'1px solid red'});
						}
						else
						{
							$('#mobile-shipping-charge').css({'border':'1px solid silver'});
						}
					}
					else
					{
						$('#mobile-duration-formate').css({'border':'1px solid silver'});
						$('#mobile-return-policy').css({'border':'1px solid silver'});
						$('#mobile-offers').css({'border':'1px solid silver'});
						$('#mobile-price').css({'border':'1px solid silver'});
						$('#mobile-shipping-charge').css({'border':'1px solid silver'});

						$.ajax({
							type:'ajax',
							method:'POST',
							url:'InsertMobilesWarrantyInformation',
							data:{mobile_id:mobile_id,mobile_duration_formate:mobile_duration_formate,mobile_return_policy:mobile_return_policy,mobile_offers:mobile_offers,mobile_price:mobile_price,mobile_shipping_charge:mobile_shipping_charge},
							success:function(data){
								var mobile_id = data;
								$('#mobile-id').val(mobile_id);

								$('#mobile-duration-formate').prop('disabled',true);
								$('#mobile-return-policy').prop('disabled',true);
								$('#mobile-offers').prop('disabled',true);
								$('#mobile-price').prop('disabled',true);
								$('#mobile-shipping-charge').prop('disabled',true);
								$('#btn-warranty-info').prop('disabled',true);

								$('body,html').animate({scrollTop:$('#general-section').height() + $('#display-section').height() + $('#processor-section').height() + $('#storage-section').height() + $('#camera-section').height() + $('#connectivity-section').height() + $('#warranty-section').height() + 640},200);
								$('#image-section').show();
								alert('Mobile Warranty Information Saved Successfully');
							},
							error:function(){
								alert('Mobile Warranty Information Not Saved Successfully');
							}
						});
					}
				});
				// Warranty Info Section End
			});
		</script>
	</body>
</html>