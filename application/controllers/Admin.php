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

		public function Logout()
		{
			$this->session->unset_userdata('admin_username');
			$this->session->unset_userdata('admin-password');
			return redirect('Admin/index');
		}

		public function InsertItemName()
		{
			if ($this->session->userdata('admin_username') == "" && $this->session->userdata('admin-password') == "")
			{
				return redirect('Admin/index');
			}
			else
			{
				$item_name = $this->input->post('item_name');

				$result = $this->am->InsertItemName($item_name);

				if ($result)
				{
					// return json_encode($result);
					// echo "True Form Admin Model";
					return true;
				}
				else
				{
					// echo "False From Admin Model";
					return false;
				}
			}
		}

		public function GetAllItems()
		{
			if ($this->session->userdata('admin_username') == "" && $this->session->userdata('admin-password') == "")
			{
				return redirect('Admin/index');
			}
			else
			{
				$output = '';
				$result = $this->am->GetAllItems();

				if ($result)
				{
					$output .= '<select name="item-id" id="item-id">';
					$output .= '<option value="">Select Item</option>';
					foreach ($result as $items)
					{
						$output .= '<option value="'.$items->item_id.'">'.$items->item_name.'</option>';
					}
					$output .= '</select>';
				}
				else
				{
					$output .= '<select disable>';
					$output .= '<option>No Item Fond</option>';
					$output .= '</select>';
				}
			}
			echo $output;
		}

		public function InsertBrandName()
		{
			if ($this->session->userdata('admin_username') == "" && $this->session->userdata('admin_password') == "")
			{
				return redirect('Admin/index');
			}
			else
			{
				$item_id = $this->input->post('item_id');
				$brand_name = $this->input->post('brand_name');

				$result = $this->am->InsertBrandName($item_id,$brand_name);

				if ($result)
				{
					// return json_encode($result);
					return true;
				}
				else
				{
					return false;
				}
			}
		}


		public function GetAllMobileBrands()
		{
			$output = '';
			$result = $this->am->GetAllMobileBrands();

			if (count($result))
			{
<<<<<<< HEAD
				$output .= '<select name="mobile-brand-id" id="mobile-brand-id">';
=======
				$output .= '<select name="brand_id" id="brand_id">';
>>>>>>> 5380a1015a9f416600c5cc7c60566b838c4b7ed1
				$output .= '<option value="">Select Brand</option>';
				foreach ($result as $brands)
				{
					$output .= '<option value="'.$brands->brand_id.'">'.$brands->brand_name.'</option>';
				}
				$output .= '</select>';
			}
			else
			{
				$output .= '<select disable></select>';
				$output .= '<option>No Brand Found</option>';
				$output .= '</select>';
			}
			echo $output;
		}
	}
?>