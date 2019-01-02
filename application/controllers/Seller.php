<?php
	/**
	 * 
	 */
	class Seller extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Seller/SellerModel','sm');
		}

		public function index()
		{
			if ($this->session->userdata('seller_username') == "" || $this->session->userdata('seller_password') == "")
			{
				$this->load->view('Seller/index');
			}
			else
			{
				return redirect('Seller/Dashboard');
			}
			
		}

		public function CreateAccount()
		{
			$result = $this->sm->CreateAccount();
			$seller_email = $this->input->post('email');
			$seller_password = $this->input->post('password');

			// $this->load->view('Seller/my-mail','',true);

			if ($result) {
				// $this->load->library('email');
				// $config['charset'] = 'utf-8';
				// $config['mailtype'] = 'html';

				// $this->email->initialize($config);
				// $this->email->to($seller_email);
				// $this->email->from('dew.fog1553@gmail.com');
				// $this->email->subject('Create Account On DOM');
				// $this->email->message($msg);

				// if ($this->email->send()) {
				// 	$this->load->view('Seller/Dashboard');
				// }
				// else {
				// 	return redirect('Seller/index');
				// }

				$session_data = [
					'seller_username' => $seller_email,
					'seller_password' => $seller_password
				];
				$this->session->set_userdata($session_data);
				// $this->load->view('Seller/Dashboard');
				return redirect('Seller/Dashboard');				
			}
			else {
				return redirect('Seller/index');
			}
		}

		public function Login()
		{
			$seller_username = $this->input->post('seller-username');
			$seller_password = $this->input->post('seller-password');

			$result = $this->sm->Login();

			if ($result)
			{
				$session_data = [
					'seller_username' => $seller_username,
					'seller_password' => $seller_password
				];

				$this->session->set_userdata($session_data);
				return redirect('Seller/Dashboard');
			}
			else
			{
				return redirect('Seller/index');
			}
		}

		public function Dashboard()
		{
			$user_name = $this->session->userdata('seller_username');
			$user_password = $this->session->userdata('seller_password');

			if($user_name == "" || $user_password == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$gal_result = $this->sm->GetListing($user_name,$user_password,'Auction');

				$gscal_result = $this->sm->GetUsedCurrentAuctionListing($user_name,$user_password);

				$this->load->view('Seller/dashboard',['auction_listing'=>$gal_result,'used_auction_listing'=>$gscal_result]);
			}
		}

		public function Logout()
		{
			$this->session->unset_userdata('seller_username');
			$this->session->unset_userdata('seller_password');

			return redirect('Seller/index');
		}

		public function CreateListing()
		{
			if ($this->session->userdata('seller_username') == "" || $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$result = $this->sm->CheckContact();

				if ($result)
				{
					$this->load->view('Seller/contact-info');
				}
				else
				{
					$this->load->view('Seller/create-listing');
				}
			}
		}

		public function InsertSellerContact()
		{
			if ($this->session->userdata('seller-username') == "" || $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/Index');
			}
			else
			{
				$result = $this->sm->InsertSellerContact();

				if ($result)
				{
					return redirect('Seller/Dashboard');
				}
				else
				{
					$this->load->view('Seller/contact-info');
				}
			}
		}

		public function MobileUpload()
		{
			$user_name = $this->session->userdata('seller_username');
			$user_password = $this->session->userdata('seller_password');
			if ($user_name == "" || $user_password == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$gal_result = $this->sm->GetListing($user_name,$user_password,'Auction');

				$gscal_result = $this->sm->GetUsedCurrentAuctionListing($user_name,$user_password);
				$this->load->view('Seller/Listing/mobile',['auction_listing'=>$gal_result,'used_auction_listing'=>$gscal_result]);
			}
		}

		public function InsertMobilesGeneralInformation()
		{
			if ($this->session->userdata('seller_username') == "" || $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$mobile_title = $this->input->post('mobile_title');
				$mobile_brand_id = $this->input->post('mobile_brand_id');
				$mobile_model_number = $this->input->post('mobile_model_number');
				$mobile_model_name = $this->input->post('mobile_model_name');
				$mobile_color = $this->input->post('mobile_color');
				$mobile_sim = $this->input->post('mobile_sim');
				$mobile_sim_type = $this->input->post('mobile_sim_type');
				$mobile_otg = $this->input->post('mobile_otg');

				$output = "";

				$seller_info = $this->sm->GetSellerInformation();
				$seller_id = $seller_info->seller_id;

				$result = $this->sm->InsertMobilesGeneralInformation($mobile_title,$seller_id,$mobile_brand_id,$mobile_model_number,$mobile_model_name,$mobile_color,$mobile_sim,$mobile_sim_type,$mobile_otg);

				if ($result)
				{
					$output .= $result;
				}
				else
				{
					return false;
				}
			}
			
			echo $output;
		}

		public function InsertMobilesDisplayInformation()
		{
			if ($this->session->userdata('seller_username') == "" || $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$mobile_id = $this->input->post('mobile_id');

				$mobile_display_size = $this->input->post('mobile_display_size');
				$mobile_display_resolution = $this->input->post('mobile_display_resolution');

				$mobile_display_type = $this->input->post('mobile_display_type');
				$mobile_resolution_type = $this->input->post('mobile_resolution_type');

				$output = "";

				$result = $this->sm->InsertMobilesDisplayInformation($mobile_id,$mobile_display_size,$mobile_display_resolution,$mobile_display_type,$mobile_resolution_type);

				if ($result)
				{
					$output .= $result;
				}
				else
				{
					return false;
				}				
			}

			echo $output;
		}

		public function InsertMobilesProcessorInformation()
		{
			if ($this->session->userdata('seller_username') == "" || $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$mobile_id = $this->input->post('mobile_id');
				$mobile_os = $this->input->post('mobile_os');
				$mobile_os_version = $this->input->post('mobile_os_version');
				$mobile_processor_type = $this->input->post('mobile_processor_type');
				$mobile_processor_size = $this->input->post('mobile_processor_size');

				$output = "";

				$result = $this->sm->InsertMobilesProcessorInformation($mobile_id,$mobile_os,$mobile_os_version,$mobile_processor_type,$mobile_processor_size);

				if ($result)
				{
					$output .= $result;
				}
				else
				{
					return false;
				}
			}
			
			echo $output;
		}

		public function InsertMobilesStorageInformation()
		{
			if ($this->session->userdata('seller_username') == "" || $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$mobile_id = $this->input->post('mobile_id');
				$mobile_internal_storage = $this->input->post('mobile_internal_storage');
				$mobile_ram = $this->input->post('mobile_ram');
				$mobile_expandable_storage = $this->input->post('mobile_expandable_storage');
				$mobile_memory_card_slot = $this->input->post('mobile_memory_card_slot');
				$mobile_memory_card_type = $this->input->post('mobile_memory_card_type');

				$output = "";

				$result = $this->sm->InsertMobilesStorageInformation($mobile_id,$mobile_internal_storage,$mobile_ram,$mobile_expandable_storage,$mobile_memory_card_slot,$mobile_memory_card_type);

				if ($result)
				{
					$output .= $result;
				}
				else
				{
					return false;
				}
			}

			echo $output;
		}

		public function InsertMobilesCameraInformation()
		{
			if ($this->session->userdata('seller_username') == "" || $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$mobile_id =$this->input->post('mobile_id');
				$mobile_primary_camera = $this->input->post('mobile_primary_camera');
				$mobile_secondary_camera = $this->input->post('mobile_secondary_camera');
				$mobile_flash = $this->input->post('mobile_flash');
				$mobile_primary_camera_resolution = $this->input->post('mobile_primary_camera_resolution');
				$mobile_secondary_camera_resolution = $this->input->post('mobile_secondary_camera_resolution');

				$output = "";

				$result = $this->sm->InsertMobilesCameraInformation($mobile_id,$mobile_primary_camera,$mobile_secondary_camera,$mobile_flash,$mobile_primary_camera_resolution,$mobile_secondary_camera_resolution);

				if ($result)
				{
					$output .= $result;
				}
				else
				{
					return false;
				}
			}

			echo $output;
		}

		public function InsertMobilesConnectivityInformation()
		{
			if ($this->session->userdata('seller_username') == "" || $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$mobile_id = $this->input->post('mobile_id');
				$mobile_network_type = $this->input->post('mobile_network_type');
				$mobile_battery = $this->input->post('mobile_battery');
				$mobile_bluetooth = $this->input->post('mobile_bluetooth');
				$mobile_wifi = $this->input->post('mobile_wifi');
				$mobile_usb_slot = $this->input->post('mobile_usb_slot');

				$output = "";

				$result = $this->sm->InsertMobilesConnectivityInformation($mobile_id,$mobile_network_type,$mobile_battery,$mobile_bluetooth,$mobile_wifi,$mobile_usb_slot);

				if ($result)
				{
					$output .= $result;
				}
				else
				{
					return false;
				}
			}
			echo $output;
		}

		public function InsertMobilesListingInformation()
		{
			if ($this->session->userdata('seller_username') == "" || $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$mobile_id = $this->input->post('mobile_id');
				$mobile_duration_formate = $this->input->post('mobile_duration_formate');
				$mobile_return_policy = $this->input->post('mobile_return_policy');
				$mobile_offers = $this->input->post('mobile_offers');
				$mobile_price = $this->input->post('mobile_price');
				$mobile_shipping_charge = $this->input->post('mobile_shipping_charge');

				$output = "";

				$result = $this->sm->InsertMobilesListingInformation($mobile_id,$mobile_duration_formate,$mobile_return_policy,$mobile_offers,$mobile_price,$mobile_shipping_charge);

				if ($result)
				{
					$output .= $result;
				}
				else
				{
					return false;
				}
			}
			echo $output;
		}

		public function InsertMobileImageUpload()
		{
			if ($this->session->userdata('seller_username') == "" || $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$mobile_id = $this->input->post('mobile-img-id');

				$result = $this->sm->InsertMobileImageUpload($mobile_id);

				if ($result)
				{
					$output = "";
					$get_all_img = $this->sm->GetAllMobileImage($mobile_id);

					$output .= "
						<div class='row'>
							<div class='col l3 m3 s12' id='show-img-section'>
								<center>
									<img src='".base_url().$get_all_img->mobile_img_one."' id='show-img' alt='Select First Image'>
								</center>
							</div>
							<div class='col l3 m3 s12' id='show-img-section'>
								<center>
									<img src='".base_url().$get_all_img->mobile_img_two."' id='show-img' alt='Select Second Image'>
								</center>
							</div>
							<div class='col l3 m3 s12' id='show-img-section'>
								<center>
									<img src='".base_url().$get_all_img->mobile_img_three."' id='show-img' alt='Select Third Image'>
								</center>
							</div>
							<div class='col l3 m3 s12' id='show-img-section'>
								<center>
									<img src='".base_url().$get_all_img->mobile_img_four."' id='show-img' alt='Select Fourth Image'>
								</center>
							</div>
						</div>
						";

					echo $output;
				}
				else
				{
					return false;
				}
			}
		}

		public function CheckAuctionOrFixedPriceListingFees()
		{
			$user_name = $this->session->userdata('seller_username');
			$user_password = $this->session->userdata('seller_password');

			if ($user_name == "" || $user_password == "")
			{
				return redirect('Seller/index');
			}
			else
			{

				$mobile_duration_formate = $this->input->post('mobile_duration_formate');
				$result = $this->sm->CheckAuctionOrFixedPriceListingFees($mobile_duration_formate,$user_name,$user_password);

				if ($result)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
		}
	}
?>