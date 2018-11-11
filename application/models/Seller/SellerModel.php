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

			$seller_insert_query = $this->db->insert('seller',['seller_company_name'=>$company_name,'seller_email'=>$email,'seller_password'=>$password,'seller_mobile_number'=>$mobile_number,'seller_pin_code'=>$pin_code,'seller_company_pan_number'=>$company_pan_number,'seller_gst_number'=>$gst_number]);

			if ($seller_insert_query) {
				return true;
			}
			else {
				return false;
			}
		}
	}
?>