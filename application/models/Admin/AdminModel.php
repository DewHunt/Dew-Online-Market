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
	}
?>