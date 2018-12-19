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

			#button-section button, #btn-general-info, #btn-display-info, #btn-processor-info{
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
							<select name="internal-storage" id="internal-storage">
								<option>Select Internal Storage</option>
								<option>8GB</option>
								<option>16GB</option>
								<option>32GB</option>
								<option>64GB</option>
								<option>126GB</option>
								<option>256GB</option>
							</select>
						</div>
						<div class="col l6 m6 s12">
							<h6>RAM</h6>
							<select name="ram" id="ram">
								<option>Select RAM</option>
								<option>1GB</option>
								<option>2GB</option>
								<option>3GB</option>
								<option>4GB</option>
								<option>6GB</option>
								<option>6GB</option>
							</select>
						</div>						
					</div>

					<div class="row">
						<div class="col l3 m3 s12">
							<h6>Expandable Storage</h6>
							<p>
								<label>
									<input type="radio" name="expandable-storage" value="Yes">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="expandable-storage" value="No">
									<span>No</span>
								</label>
							</p>
						</div>

						<div class="col l3 m3 s12">
							<h6>Memory Card Slot</h6>
							<p>
								<label>
									<input type="radio" name="memory-card-slot" value="Yes">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="memory-card-slot" value="No">
									<span>No</span>
								</label>
							</p>
						</div>

						<div class="col l6 m6 s12">
							<h6>Memory Card Type</h6>
							<select name="memory-card-type" id="memory-card-type">
								<option>Select Internal Storage</option>
								<option>Mini SD Card</option>
								<option>Micro SD Card</option>
							</select>
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
							<p>
								<label>
									<input type="radio" name="parimary-camera" value="Yes">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="parimary-camera" value="No">
									<span>No</span>
								</label>
							</p>
						</div>

						<div class="col l4 m4 s12">
							<h6>Secondary Camera</h6>
							<p>
								<label>
									<input type="radio" name="secondary-camera" value="Yes">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="secondary-camera" value="No">
									<span>No</span>
								</label>
							</p>
						</div>

						<div class="col l4 m4 s12">
							<h6>Camera Flash</h6>
							<p>
								<label>
									<input type="radio" name="flash" value="Yes">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="flash" value="No">
									<span>No</span>
								</label>
							</p>
						</div>				
					</div>

					<div class="row">
						<div class="col l6 m6 s12">
							<h6>Primary Camera Resolution</h6>
							<input type="text" name="primary-camera-resolution" id="primary-camera-resolution">
						</div>

						<div class="col l6 m6 s12">
							<h6>Secondary Camera Resolution</h6>
							<input type="text" name="secondary-camera-resolution" id="secondary-camera-resolution">
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
							<input type="text" name="network-type" id="network-type">
						</div>

						<div class="col l6 m6 s12">
							<h6>Battery</h6>
							<input type="text" name="battery" id="battery">
						</div>
					</div>

					<div class="row">
						<div class="col l4 m4 s12">
							<h6>Bluetooth</h6>
							<p>
								<label>
									<input type="radio" name="bluetooth" value="Yes">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="bluetooth" value="No">
									<span>No</span>
								</label>
							</p>
						</div>

						<div class="col l4 m4 s12">
							<h6>WiFi</h6>
							<p>
								<label>
									<input type="radio" name="wifi" value="Yes">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="wifi" value="No">
									<span>No</span>
								</label>
							</p>
						</div>

						<div class="col l4 m4 s12">
							<h6>Micro USB Slot</h6>
							<p>
								<label>
									<input type="radio" name="usb-slot" value="Yes">
									<span>Yes</span>
								</label>

								<label>
									<input type="radio" name="usb-slot" value="No">
									<span>No</span>
								</label>
							</p>
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
							<select name="duration-formate" id="duration-formate">
								<option>Select Duration Formate</option>
								<option>7 Days</option>
								<option>15 Days</option>
								<option>30 Days</option>
								<option>45 Days</option>
								<option>60 Days</option>
							</select>
						</div>

						<div class="col l4 m4 s12">
							<h6>Return Policy</h6>
							<select name="return-policy" id="return-policy">
								<option>Select Return Policy</option>
								<option>1 days</option>
								<option>5 days</option>
								<option>7 days</option>
								<option>10 days</option>
								<option>15 days</option>
							</select>
						</div>

						<div class="col l4 m4 s12">
							<h6>Offers</h6>
							<select class="offers" id="offers">
								<option>Select Offers</option>
								<option>5%</option>
								<option>10%</option>
								<option>15%</option>
								<option>20%</option>
								<option>25%</option>
							</select>
						</div>
					</div>

					<div class="row">
						<div class="col l6 m6 s12">
							<h6>Price</h6>
							<input type="text" name="price" id="price">
						</div>

						<div class="col l6 m6 s12">
							<h6>Shipping Charge</h6>
							<input type="text" name="shipping-charge" id="shipping-charge">
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
				$('#processor-section').show();
				$('#storage-section').hide();
				$('#camera-section').hide();
				$('#connectivity-section').hide();
				$('#warranty-section').hide();
				$('#image-section').hide();
				// Hide Section End

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
							},
							error:function(){
								alert('Data Not Saved To Database.');
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
								$('body,html').animate({scrollTop:$('#general-section').height() + $('#display-section').height() + 200},200);
								$('#processor-section').show();
								alert("Mobile Display Saved Successfully" + mobile_id);
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
						alert("RUN");
					}
				});
				// Processor Info Script Section End
			});
		</script>

		<!-- Update - 181218 -->
	</body>
</html>