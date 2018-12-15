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

		public function InsertProductName()
		{
			$product_name = $this->input->post('product_name');

			$insert_product_name = $this->db->insert('items',['item_name' => $product_name]);

			if ($insert_product_name)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
?>