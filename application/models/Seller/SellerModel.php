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

			$seller_insert_query = $this->db->insert('seller',['seller_company_name'=>$company_name,'seller_email'=>$email,'seller_password'=>$password,'seller_mobile_number'=>$mobile_number,'seller_pin_code'=>$pin_code,'seller_company_pan_number'=>$company_pan_number,'seller_gst_number'=>$gst_number,'seller_create_date'=>date('Y-m-d'),'seller_month'=>date('m'),'seller_year'=>date('Y')]);

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

		public function InsertMobilesGeneralInformation($mobile_title,$seller_id,$mobile_brand_id,$mobile_model_number,$mobile_model_name,$mobile_color,$mobile_sim,$mobile_sim_type,$mobile_otg)
		{
			$insert_query = $this->db->insert('mobiles',['mobile_title'=>$mobile_title,'seller_id'=>$seller_id,'mobile_brand_id'=>$mobile_brand_id,'mobile_model_number'=>$mobile_model_number,'mobile_model_name'=>$mobile_model_name,'mobile_color'=>$mobile_color,'mobile_sim'=>$mobile_sim,'mobile_sim_type'=>$mobile_sim_type,'mobile_otg'=>$mobile_otg]);

			if ($insert_query)
			{
				return $this->db->insert_id();
			}
			else
			{
				return false;
			}
		}

		public function InsertMobilesDisplayInformation($mobile_id,$mobile_display_size,$mobile_display_resolution,$mobile_display_type,$mobile_resolution_type)
		{
			$update_query = $this->db->where('mobile_id',$mobile_id)->update('mobiles',['mobile_display_size'=>$mobile_display_size,'mobile_display_resolution'=>$mobile_display_resolution,'mobile_display_type'=>$mobile_display_type,'mobile_resolution_type'=>$mobile_resolution_type]);

			if ($update_query)
			{
				return $mobile_id;
			}
			else
			{
				return false;
			}
		}

		public function InsertMobilesProcessorInformation($mobile_id,$mobile_os,$mobile_os_version,$mobile_processor_type,$mobile_processor_size)
		{
			$update_query = $this->db->where('mobile_id',$mobile_id)->update('mobiles',['mobile_os'=>$mobile_os,'mobile_os_version'=>$mobile_os_version,'mobile_processor_type'=>$mobile_processor_type,'mobile_processor_size'=>$mobile_processor_size]);

			if ($update_query)
			{
				return $mobile_id;
			}
			else
			{
				return false;
			}
		}

		public function InsertMobilesStorageInformation($mobile_id,$mobile_internal_storage,$mobile_ram,$mobile_expandable_storage,$mobile_memory_card_slot,$mobile_memory_card_type)
		{
			$update_query = $this->db->where('mobile_id',$mobile_id)->update('mobiles',['mobile_internal_storage'=>$mobile_internal_storage,'mobile_ram'=>$mobile_ram,'mobile_expandable_storage'=>$mobile_expandable_storage,'mobile_memory_card_slot'=>$mobile_memory_card_slot,'mobile_memory_card_type'=>$mobile_memory_card_type]);

			if ($update_query)
			{
				return $mobile_id;
			}
			else
			{
				return false;
			}
		}

		public function InsertMobilesCameraInformation($mobile_id,$mobile_primary_camera,$mobile_secondary_camera,$mobile_flash,$mobile_primary_camera_resolution,$mobile_secondary_camera_resolution)
		{
			$update_query = $this->db->where('mobile_id',$mobile_id)->update('mobiles',['mobile_primary_camera'=>$mobile_primary_camera,'mobile_secondary_camera'=>$mobile_secondary_camera,'mobile_flash'=>$mobile_flash,'mobile_primary_camera_resolution'=>$mobile_primary_camera_resolution,'mobile_secondary_camera_resolution'=>$mobile_secondary_camera_resolution]);

			if ($update_query)
			{
				return $mobile_id;
			}
			else
			{
				return false;
			}
		}

		public function InsertMobilesConnectivityInformation($mobile_id,$mobile_network_type,$mobile_battery,$mobile_bluetooth,$mobile_wifi,$mobile_usb_slot)
		{
			$update_query = $this->db->where('mobile_id',$mobile_id)->update('mobiles',['mobile_network_type'=>$mobile_network_type,'mobile_battery'=>$mobile_battery,'mobile_bluetooth'=>$mobile_bluetooth,'mobile_wifi'=>$mobile_wifi,'mobile_usb_slot'=>$mobile_usb_slot]);

			if ($update_query)
			{
				return $mobile_id;
			}
			else
			{
				return false;
			}
		}

		public function InsertMobilesListingInformation($mobile_id,$mobile_duration_formate,$mobile_return_policy,$mobile_offers,$mobile_price,$mobile_shipping_charge)
		{
			$update_query = $this->db->where('mobile_id',$mobile_id)->update('mobiles',['mobile_duration_formate'=>$mobile_duration_formate,'mobile_return_policy'=>$mobile_return_policy,'mobile_offers'=>$mobile_offers,'mobile_price'=>$mobile_price,'mobile_shipping_charge'=>$mobile_shipping_charge,'mobile_upload_date'=>date('Y-m-d'),'mobile_upload_month'=>date('m'),'mobile_upload_year'=>date('Y'),'mobile_status'=>'Active']);

			if ($update_query)
			{
				return $mobile_id;
			}
			else
			{
				return false;
			}
		}

		public function InsertMobileImageUpload($mobile_id)
		{
			// $config['upload_path'] = base_url('mobile_image')."/";
			$config['upload_path'] = "mobile_image/";
			$config['allowed_types'] = "jpg|jpeg|png|gif";
			$this->load->library('upload',$config);

			$mobile_img_one = $this->upload->do_upload('mobile-img-one').$config['upload_path'].$this->upload->data('file_name');

			$mobile_img_two = $this->upload->do_upload('mobile-img-two').$config['upload_path'].$this->upload->data('file_name');

			$mobile_img_three = $this->upload->do_upload('mobile-img-three').$config['upload_path'].$this->upload->data('file_name');
			
			$mobile_img_four = $this->upload->do_upload('mobile-img-four').$config['upload_path'].$this->upload->data('file_name');

			$path_one = substr($mobile_img_one,1);
			$path_two = substr($mobile_img_two,1);
			$path_three = substr($mobile_img_three,1);
			$path_four = substr($mobile_img_four,1);

			$update_query = $this->db->where('mobile_id',$mobile_id)->update('mobiles',['mobile_img_one'=>$path_one,'mobile_img_two'=>$path_two,'mobile_img_three'=>$path_three,'mobile_img_four'=>$path_four]);

			if ($update_query)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		public function GetAllMobileImage($mobile_id)
		{
			$get_all_img = $this->db->get_where('mobiles',['mobile_id'=>$mobile_id]);

			if ($get_all_img->num_rows() > 0)
			{
				return $get_all_img->row();
			}
			else
			{
				return false;
			}
		}

		public function GetSellerID($seller_email,$seller_password)
		{
			$seller_query = $this->db->get_where('seller',['seller_email'=>$seller_email,'seller_password'=>$seller_password]);

			if ($seller_query->num_rows() > 0)
			{
				return $seller_query->row('seller_id');
			}
			else
			{
				return false;
			}
		}

		public function GetListing($seller_email,$seller_password,$sl_type)
		{
			$seller_id = $this->GetSellerID($seller_email,$seller_password);

			if ($seller_id)
			{
				$seller_listing_query = $this->db->get_where('seller_listing',['seller_id'=>$seller_id,'sl_type'=>$sl_type]);

				if ($seller_listing_query->num_rows() > 0)
				{
					return $seller_listing_query->row();
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

		public function GetUsedCurrentAuctionListing($seller_email,$seller_password)
		{
			$seller_listing_data = $this->GetListing($seller_email,$seller_password,'Auction');

			if ($seller_listing_data)
			{
				$seller_id = $seller_listing_data->seller_id;
				$start_date = $seller_listing_data->sl_start_date;
				$last_date = $seller_listing_data->sl_last_date;

				$get_mobile_data = $this->db->get_where('mobiles',['seller_id'=>$seller_id,'mobile_upload_date>='=>$start_date,'mobile_upload_date<='=>$last_date]);
				$this->db->or_where(['mobile_duration_formate'=>'7 Days','mobile_duration_formate'=>'10 Days']);

				if ($get_mobile_data->num_rows() > 0)
				{
					return $get_mobile_data->result();
				}
				else
				{
					return $get_mobile_data->result();
				}
			}
			else
			{
				return false;
			}
		}

		public function CheckAuctionOrFixedPriceListingFees($mobile_duration_formate,$seller_email,$seller_password)
		{
			if ($mobile_duration_formate == '7 Days' || $mobile_duration_formate == '10 Days')
			{
				$auction_listing_data = $this->GetListing($seller_email,$seller_password,'Auction');

				if ($auction_listing_data)
				{
					$seller_id = $auction_listing_data->seller_id;
					$start_date = $auction_listing_data->sl_start_date;
					$last_date = $auction_listing_data->sl_last_date;
					$total_listing = $auction_listing_data->sl_number;

					$auction_mobile_data = $this->db->get_where('mobiles',['seller_id'=>$seller_id,'mobile_upload_date>='=>$start_date,'mobile_upload_date<='=>$last_date,'mobile_duration_formate<='=>10]);

					if ($auction_mobile_data->num_rows() > 0)
					{
						$count_mobile_data = $auction_mobile_data->num_rows();

						if ($count_mobile_data > $total_listing)
						{
							$listing_fees = 50;
						}
						else
						{
							$listing_fees = 0;
						}
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
			else
			{
				$fixed_listing_data = $this->GetListing($seller_email,$seller_password,'Fixed');

				if ($fixed_listing_data)
				{
					$seller_id = $fixed_listing_data->seller_id;
					$start_date = $fixed_listing_data->sl_start_date;
					$last_date = $fixed_listing_data->sl_last_date;
					$total_listing = $fixed_listing_data->sl_number;

					$fixed_mobile_data = $this->db->get_where('mobiles',['seller_id'=>$seller_id,'mobile_upload_date>='=>$start_date,'mobile_upload_date<='=>$last_date,'mobile_duration_formate>'=>10]);

					if ($fixed_mobile_data->num_rows() > 0)
					{
						$count_mobile_data = $fixed_mobile_data->num_rows();

						if ($count_mobile_data > $total_listing)
						{
							$listing_fees = 500;
						}
						else
						{
							$listing_fees = 0;
						}
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

			echo $listing_fees;
		}
	}
?>