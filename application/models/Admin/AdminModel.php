<?php
	/**
	 * 
	 */
	class AdminModel extends CI_Model
	{
		public function Login($username, $password)
		{
			$admin_check = $this->db->get_where('admin',['admin_username' => $username, 'admin_password'=>$password]);

			if ($admin_check->num_rows() > 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		public function InsertItemName($item_name)
		{
			$check_item_name = $this->db->get_where('items',['item_name'=>$item_name]);

			// echo $check_item_name->num_rows();
			// echo $this->db->get_where('items',['item_name'=>$item_name]);
			// exit();

			if ($check_item_name->num_rows() > 0)
			{
				// echo "Check Item = ".$check_item_name->num_rows();
				return false;
			}
			else
			{
				$insert_item_name = $this->db->insert('items',['item_name' => $item_name]);

				if ($insert_item_name)
				{
					// echo "Insert Item = ".$insert_item_name;
					return true;
				}
				else
				{
					// echo "Insert Item = ".$insert_item_name;
					return false;
				}				
			}
		}

		public function GetAllItems()
		{
			$get_items = $this->db->select()->from('items')->get();

			if ($get_items->num_rows() > 0)
			{
				return $get_items->result();
			}
			else
			{
				return $get_items->result();
			}
		}

		public function InsertBrandName($item_id, $brand_name)
		{
			$check_brand_name = $this->db->get_where('brands',['item_id'=>$item_id,'brand_name'=>$brand_name]);

			// echo "Check Brand = ".$check_brand_name->num_rows();
			// exit();

			if ($check_brand_name->num_rows() > 0)
			{
				return false;
			}
			else
			{
				$insert_brand_name = $this->db->insert('brands',['item_id'=>$item_id,'brand_name'=>$brand_name]);

				if ($insert_brand_name)
				{
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
			$get_item = $this->db->get_where('items',['item_name'=>'Mobiles']);

			if ($get_item->num_rows() > 0)
			{
				$item_id = $get_item->row('item_id');

				$get_brands = $this->db->get_where('brands',['item_id'=>$item_id]);

				if ($get_brands->num_rows() > 0)
				{
					return $get_brands->result();
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

		public function GetAllSellers()
		{
			$seller_query = $this->db->select()->from('seller')->order_by('seller_id','desc')->get();

			if ($seller_query->num_rows() > 0)
			{
				return $seller_query->result();
			}
			else
			{
				return $seller_query->result();
			}
		}

		public function SellerStatus($seller_id)
		{
			$check_status = $this->db->get_where('seller',['seller_id'=>$seller_id,'seller_status'=>'']);

			if ($check_status->num_rows() > 0)
			{
				$seller_status_query = $this->db->where('seller_id',$seller_id)->update('seller',['seller_status'=>'Verified']);

				if ($seller_status_query)
				{
					$insert_listing = $this->db->insert('seller_listing',['seller_id'=>$seller_id,'sl_start_date'=>date('Y-m-d'),'sl_last_date'=>date('Y-m-d',strtotime('7 days')),'sl_month'=>date('m'),'sl_year'=>date('Y'),'sl_number'=>'2','sl_type'=>'Auction']);

					if ($insert_listing)
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
			else
			{
				return false;
			}
		}
	}
?>