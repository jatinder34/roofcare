<?php
	/**
	* 
	*/
	class LoginModel extends CI_Model
	{
		function checklogin($username,$password)
		{
			$this->db->select('*');
			$this->db->from('admindetail');
			$this->db->join('admin', 'admin.id = admindetail.user_id');
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query = $this->db->get();
			if ($query->num_rows() == 1) {
				return $query->result();
			}
			else
			{
				return false;
			}
		}

		public function get_update_user_model($user_up_id)
		{
			$this->db->select('*');
			$this->db->from('admindetail');
			$this->db->join('admin', 'admin.id = admindetail.user_id');
			$this->db->where('admin.id',$user_up_id);
			$up_data = $this->db->get();
			if ($up_data->num_rows() == 1) {
				return $up_data->result();
			}
		}
	}
?>