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
				$this->load->view('Seller/Dashboard');
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
	}
?>