<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<title>Admin | DOM</title>

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
			#top-bar{
				background: green;
				height: 35px;
				line-height: 35px;
			}

			#title{
				margin-left: 15px;
				margin-top: 20px;
			}

			#title-paragraph{
				margin-left: 15px;
				margin-top: -8px;
				margin-bottom: 20px;
				color: silver;
			}

			#modal-content-h4{
				color: green;
				font-weight: bold;
				padding-bottom: 10px;
				border-bottom: 5px solid;
				margin-bottom: 20px;
			}

			#btn-save-product-name{
				background: green;
			}

			select{
				display: block;
				border: 1px solid silver;
				outline: none;
			}
		</style>
	</head>
	<body>
		<!-- Body Section Start -->
		<!-- Top Bar Section Start -->
		<nav id="top-bar">
			<div class="nav-wrapper">
				<!-- Right Side Menu Section Start -->
				<ul class="right">
					<li><a href=""><span class="fa fa-envelope"></span>&nbsp;Message</a></li>
					<li><a href=""><span class="fa fa-cogs"></span>&nbsp;Settings</a></li>
					<li><a href=""><span class="fa fa-user"></span>&nbsp;Profile</a></li>
				</ul>
				<!-- Right Side Menu Section End -->
			</div>
		</nav>
		<!-- Top Bar Section End -->

		<!-- Title Section Start -->
		<h5 id="title">Admin Control</h5>
		<p id="title-paragraph">Welcome To Dew Online Market Dashboard</p>
		<!-- Title Section End -->

		<!-- Menu Bar Section Start -->
		<nav class="nav-wrapper">
			<!-- Left Side Menu Section Start -->
			<ul>
				<li><a href="">Overview</a></li>
				<li><a href="" class="modal-trigger" data-target="show-item-modal">Items</a></li>
				<li><a href="" class="modal-trigger" data-target="show-brand-modal">Brand</a></li>
				<li><a href="">Four</a></li>
				<li><a href="">Five</a></li>
				<li><a href="">Six</a></li>
				<li><a href="">Seven</a></li>
			</ul>
			<!-- Left Side Menu Section End -->
		</nav>

		<!-- Items Modal Section Satrt -->
		<div class="modal" id="show-item-modal">
			<div class="modal-content">
				<h4 id="modal-content-h4">
					<span class="fa fa-cubes"></span>&nbsp;Add Item
					<span class="right modal-close">×</span>
				</h4>

				<div id="show-db-code"></div>

				<div class="input-field">
					<input type="text" name="item-name" id="item-name">
					<label for="item-name">Item Name</label>
				</div>

				<button type="button" class="btn waves-effect waves-light" id="btn-save-item-name">Save</button>
			</div>
		</div>
		<!-- Items Modal Section End -->

		<!-- Brand Modal Section Start -->
		<div class="modal" id="show-brand-modal">
			<div class="modal-content">
				<h4 id="modal-content-h4">
					<span class="fa fa-cubes"></span>&nbsp;Add Brand
					<span class="right modal-close">×</span>
				</h4>

				<div id="show-select-item"></div>
				<div id="show-db-code1"></div>

				<div class="input-field">
					<input type="text" name="brand-name" id="brand-name">
					<label for="brand-name">Brand Name</label>
				</div>

				<button type="button" class="btn waves-effect waves-light" id="btn-save-brand-name">Save</button>
			</div>
		</div>
		<!-- Brand Modal Section End -->
		<!-- Menu Bar Section End -->
		<!-- Body Section End -->

		<!-- JQuery JS file include -->
		<script type="text/javascript" src="<?= base_url('assets/jquery/jquery-3.3.1.min.js') ?>"></script>
		<!-- <script type="text/javascript" src="../assets/jquery/jquery-3.3.1.min.js"></script> -->

		<!-- Ajax JS File Include -->
		<script type="text/javascript" src="<?= base_url('assets/ajax/ajax.js'); ?>"></script>

		<!-- Materialize JS File Include -->
		<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
		<!-- <script type="text/javascript" src="../assets/materialize/js/materialize.js"></script> -->

		<!-- Custome JS File Include -->
		<script type="text/javascript">
			$(document).ready(function(){
				// Show Modal Script Start
				$('.modal').modal({
					dismissible: false
				});
			});
		</script>

		<!-- Ajax Script Section -->
		<script type="text/javascript">
			$(function(){
				// Add Item Script Section Start
				$('#btn-save-item-name').click(function(){
					var item_name = $('#item-name').val();

					if (item_name == "") {
						M.toast({html:'Please Enter Item Name.'});
					}
					else {
						$.ajax({
							type:'ajax',
							method:'POST',
							url:'InsertItemName',
							// dataType:'json',
							data:{item_name:item_name},
							success:function(data){
								// $('#show-db-code').html(data);
								alert('Item Name Saved Successfully');
								$('#item-name').val("");
							},
							error:function(){
								// $('#show-db-code').html(data);
								alert('Item Name Already Saved');
							}
						});
					}
				});
				// Add Item Script Section End

				// Get All Items Data Script Section Start
				GetItems();
				function GetItems(){
					$.ajax({
						type:'ajax',
						url:'GetAllItems',
						success:function(data){
							$('#show-select-item').html(data);
						},
						error:function(){
							alert('Database Has No Items');
						}
					});
				}
				// Get All Item Data Script Section End

				// Add Brand Script Section Start
				$('#btn-save-brand-name').click(function(){
					var item_id = $('#item-id').val();
					var brand_name = $('#brand-name').val();

					if (brand_name == "") {
						M.toast({html:'Please Enter Brand Name'});
					}
					else if (item_id == "") {
						M.toast({html:'Please Select Item Name'});
					}
					else {
						$.ajax({
							type:'ajax',
							method:'POST',
							url:'InsertBrandName',
							data:{item_id:item_id, brand_name:brand_name},
							success:function(data){
								// $('#show-db-code1').html(data);
								alert('Brand Name Saved Successfully');
								$('#brand-name').val("");
							},
							error:function(){
								// $('#show-db-code1').html(data);
								alert('Brand Name Already Successfully');
							}
						});
					}
				});
				// Add Brand Script Section End
			});
		</script>

		<!-- Update - 181218 -->
	</body>
</html>