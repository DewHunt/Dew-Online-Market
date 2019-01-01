<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<title>Sellers | DOM</title>

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
				background: darkseagreen;
			}

			#top-bar-nav{
				background: green;
				height: 50px;
				line-height: 50px;
			}

			#seller-table{
				border: 0px solid darkseagreen;
				border-radius: 5px;
				margin-top: -15px;
				margin-right: 10px;
				margin-bottom: 10px;
				margin-left: 10px;
				padding: 10px;
				background: white;
			}

			#verify-button, #more-button{
				height: 28px;
				line-height: 28px;
			}

			table, th, td{
				border: 1px solid;
				padding: 5px;
			}
		</style>
	</head>

	<body>
		<!-- Body Section Start -->
		<!-- Top Bar Section Start -->
		<nav id="top-bar-nav">
			<div class="nav-wrapper">
				<a href="" class="brand-logo">&nbsp;Sellers</a>
				<!-- Right Side Menu Section Start -->
				<ul class="right">
					<li><a href="<?= base_url('index.php/Admin/Dashboard'); ?>"><span class="fa fa-reply"></span>&nbsp;Back To Dashboard</a></li>
				</ul>
				<!-- Right Side Menu Section End -->
			</div>
		</nav>
		<!-- Top Bar Section End -->

		<!-- Main Section Start -->
		<div class="row">
			<div class="col l12 m12 s12">
				<h4><b>Seller Overview (<?= count($seller); ?>)</b></h4>
			</div>
		</div>

		<!-- Seller Data Show Section Start -->
		<div id="seller-table">
			<table>
				<thead>
					<tr>
						<th>Seller Name</th>
						<th>Company Name</th>
						<th>E-mail ID</th>
						<th>GST No.</th>
						<th>Registered Date</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					<?php if(count($seller)): ?>
						<?php foreach($seller as $data): ?>
						<tr>
							<td><?= $data->seller_fname." " .$data->seller_lname; ?></td>
							<td><?= $data->seller_company_name; ?></td>
							<td><?= $data->seller_email; ?></td>
							<td><?= $data->seller_gst_number; ?></td>
							<td><?= $data->seller_create_date; ?></td>
							<td>
								<?php if($data->seller_status == "Verified"): ?>
									<span class="center badge green white-text">Verified</span>
									<?php else: ?>
										<a href='<?= base_url("index.php/Admin/SellerStatus/{$data->seller_id}"); ?>' class="btn waves-effect waves-light" id="verify-button">Verify</a>
								<?php endif; ?>
							</td>
							<td>
								<?php if($data->seller_status == "Verified"): ?>
									<button type="button" class="btn waves-effect waves-light" id="more-button">More</button>
									<?php else: ?>
										<button type="button" class="btn waves-effect waves-light" disabled id="more-button"="">More</button>
								<?php endif; ?>
							</td>
						</tr>
						<?php endforeach; ?>
						<?php else: ?>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
		<!-- Seller Data Show Section End -->
		<!-- Main Section End -->
		<!-- Body Section End -->

		<!-- JQuery JS file include -->
		<script type="text/javascript" src="<?= base_url('assets/jquery/jquery-3.3.1.min.js') ?>"></script>
		<!-- <script type="text/javascript" src="../assets/jquery/jquery-3.3.1.min.js"></script> -->

		<!-- Ajax JS File Include -->
		<script type="text/javascript" src="<?= base_url('assets/ajax/ajax.js'); ?>"></script>

		<!-- Materialize JS File Include -->
		<script type="text/javascript" src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>
		<!-- <script type="text/javascript" src="../assets/materialize/js/materialize.js"></script> -->
	</body>
</html>

<!-- PHP Message Section Start -->
<?php
	if ($msg = $this->session->flashdata('message'))
	{
		echo "<script>M.toast({html:'$msg'})</script>";
	}
?>
<!-- PHP Message Section End -->