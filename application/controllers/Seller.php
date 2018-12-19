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
			if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
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
			if($this->session->userdata('seller_email') == "" && $this->session->userdata('seller_password') == "")
			{
				return redirect('Seller/index');
			}
			else
			{
				$this->load->view('Seller/dashboard');
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
			if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
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
			if ($this->session->userdata('seller-username') == "" && $this->session->userdata('seller_password') == "")
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
			if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password' == ""))
			{
				return redirect('Seller/index');
			}
			else
			{
				$this->load->view('Seller/Listing/mobile');
			}
		}

		public function InsertMobilesGeneralInformation()
		{
			if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "")
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
			if ($this->session->userdata('seller_username') == "" && $this->sesion->userdata('seller_password') == "")
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
		}

		// Update - 181219
	}
?>