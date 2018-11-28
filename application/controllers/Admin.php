<?php
	/**
	 * 
	 */
	class Admin extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Admin/AdminModel','am');
		}

		public function index()
		{
			if ($this->session->userdata('admin_username') == "" && $this->session->userdata('admin_password') == "")
			{
				$this->load->view('Admin/index');
			}
			else
			{
				return redirect('Admin/Dashboard');
			}
		}

		public function Login()
		{
			$username = $this->input->post('admin-username');
			$password = $this->input->post('admin-password');

			$result = $this->am->Login($username,$password);

			if ($result)
			{
				$admin_session = [
					'admin_username' => $username,
					'admin_password' => $password
				];

				$this->session->set_userdata($admin_session);

				return redirect('Admin/Dashboard');
			}
			else
			{
				$this->session->set_flashdata('msg','Username or Password Incorrect');
				return redirect('Admin/index');
			}
		}

		public function Dashboard()
		{
			if ($this->session->userdata('admin_username') == "" && $this->session->userdata('admin_password') == "")
			{
				return redirect('Admin/index');
			}
			else
			{
				$this->load->view('Admin/dashboard');
			}
		}
	}
?>