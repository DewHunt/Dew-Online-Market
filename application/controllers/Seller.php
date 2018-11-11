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
			$this->load->view('Seller/index');
		}

		public function CreateAccount()
		{
			$result = $this->sm->CreateAccount();
			$seller_email = $this->input->post('email');
			$seller_password = $this->input->post('password');

			$this->load->view('Seller/my-mail','',true);

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

				$ssession_data = [
					'seller_username' = $seller_email;
					'seller_password' = $seller_password;
				];
				$this->session->set_userdata($session_data);


				$this->load->view('session_data');				
			}
			else {
				return redirect('Seller/index');
			}
		}
	}
?>