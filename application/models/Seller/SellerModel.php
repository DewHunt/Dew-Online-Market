<?php
	/**
	 * 
	 */
	class SellerModel extends CI_Model
	{
		public function CreateAccount()
		{
			$company_name = $this->input->post('company_name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$mobile_number = $this->input->post('mobile_number');
			$pin_code = $this->input->post('pin_code');
			$company_pan_number = $this->input->post('company_pan_number');
			$gst_number = $this->input->post('gst_number');

			$seller_insert_query = $this->db->insert('seller',['seller_company_name'=>$company_name,'seller_email'=>$email,'seller_password'=>$password,'seller_mobile_number'=>$mobile_number,'seller_pin_code'=>$pin_code,'seller_company_pan_number'=>$company_pan_number,'seller_gst_number'=>$gst_number,'create_date'=>date('Y-m-d'),'seller_month'=>date('m'),'seller_year'=>date('Y')]);

			if ($seller_insert_query) {
				return true;
			}
			else {
				return false;
			}
		}

		public function Login()
		{
			$seller_username = $this->input->post('seller-username');
			$seller_password = $this->input->post('seller-password');

			$check_user = $this->db->get_where('seller',['seller_email' => $seller_username, 'seller_password' => $seller_password]);

			if($check_user->num_rows() > 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		public function CheckContact()
		{
			$username = $this->session->userdata('seller_username');
			$password = $this->session->userdata('seller_password');

			$check_seller = $this->db->get_where('seller',['seller_email'=>$username, 'seller_password'=>$password]);

			if ($check_seller->num_rows() > 0)
			{
				$seller_id = $check_seller->row('seller_id');

				$seller_address = $this->db->get_where('seller',['seller_id'=>$seller_id, 'seller_address' => '']);

				if ($seller_address->num_rows() > 0)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}

		public function InsertSellerContact()
		{
			$seller_first_name = $this->input->post('seller-first-name');
			$seller_last_name = $this->input->post('seller-last-name');
			$seller_address = $this->input->post('seller-address');
			$seller_city = $this->input->post('seller-city');

			$username = $this->session->userdata('seller_username');
			$password = $this->session->userdata('seller_password');


			$check_seller = $this->db->get_where('seller',['seller_email'=>$username,'seller_password'=>$password]);

			if ($check_seller->num_rows() > 0)
			{
				$seller_id = $check_seller->row('seller_id');

				$update_seller = $this->db->where('seller_id',$seller_id)->update('seller',['seller_fname'=>$seller_first_name,'seller_lname'=>$seller_last_name,'seller_address'=>$seller_address,'seller_city'=>$seller_city]);

				if ($update_seller)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}

		public function GetSellerInformation()
		{
			$username = $this->session->userdata('seller_username');
			$password = $this->session->userdata('seller_password');

			$seller_info = $this->db->get_where('seller',['seller_email'=>$username,'seller_password'=>$password]);

			if ($seller_info->num_rows() > 0)
			{
				return $seller_info->row();
			}
			else
			{
				return false;
			}
		}

		public function InsertMoilesGeneralInformation($mobile_title,$mobile_brand_id,$mobile_model_number,$mobile_model_name,$mobile_color,$mobile_sim,$mobile_sim_type,$mobile_otg,$seller_id)
		{
			$insert_query = $this->db->insert('mobiles',['mobile_title'=>$mobile_title,'mobile_brand_id'=>$mobile_brand_id,'mobile_model_number'=>$mobile_model_number,'mobile_model_name'=>$mobile_model_name,'mobile_color'=>$mobile_color,'mobile_sim'=>$mobile_sim,'mobile_sim_type'=>$mobile_sim_type,'mobile_otg'=>$mobile_otg,'seller_id'=>$seller_id]);

			if ($insert_query)
			{
				return $this->db->insert_id();
			}
			else
			{
				return false;
			}
		}
	}
?>