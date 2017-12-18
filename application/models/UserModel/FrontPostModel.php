<?php
	/**
	* 
	*/
	class FrontPostModel extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();	
		}
		public function get_service_post()
		{
			$this->db->select('*');
			$this->db->from('product');
			$this->db->limit('3');
			$this->db->where('post_categories','["8"]');
			$query = $this->db->get();
			if ($query->num_rows() == 0) {
				echo "FrontPostModel get_service_post function";
			}else{
				 return $query->result();
				// echo "<pre>";
				// print_r($data);
			}
		}

		public function get_saveroof_post()
		{
			$this->db->select('*');
			$this->db->from('product');
			$this->db->limit('1');
			$this->db->where('post_categories','["9"]');
			$query = $this->db->get();
			if ($query->num_rows() == 0) {
				echo "FrontPostModel get_saveroof_post function";
			}else{
				 return $query->result();
				// echo "<pre>";
				// print_r($data);
			}
		}

		public function get_shielding_post()
		{
			$this->db->select('*');
			$this->db->from('product');
			$this->db->limit('1');
			$this->db->where('post_categories','["13"]');
			$query = $this->db->get();
			if ($query->num_rows() == 0) {
				echo "FrontPostModel get_shielding_post function";
			}else{
				 return $query->result();
				// echo "<pre>";
				// print_r($data);
			}
		}

		public function get_shieldingall_post()
		{
			$this->db->select('*');
			$this->db->from('product');
			$this->db->limit('6');
			$this->db->where('post_categories','["10"]');
			$query = $this->db->get();
			if ($query->num_rows() == 0) {
				echo "FrontPostModel get_shielding_post function";
			}else{
				 return $query->result();
				// echo "<pre>";
				// print_r($data);
			}
		}

		public function get_testimonials_post()
		{
			$this->db->select('*');
			$this->db->from('product');
			$this->db->limit('1');
			$this->db->where('post_categories','["14"]');
			$query = $this->db->get();
			if ($query->num_rows() == 0) {
				echo "FrontPostModel get_testimonials_post function";
			}else{
				 return $query->result();
				// echo "<pre>";
				// print_r($data);
			}
		}
		public function get_ourblog_post()
		{
			$this->db->select('*');
			$this->db->from('product');
			$this->db->limit('1');
			$this->db->where('post_categories','["15"]');
			$query = $this->db->get();
			if ($query->num_rows() == 0) {
				echo "FrontPostModel get_ourblog_post function";
			}else{
				 return $query->result();
				// echo "<pre>";
				// print_r($data);
			}
		}
		public function get_blogposts_post()
		{
			$this->db->select('*');
			$this->db->from('product');
			$this->db->limit('3');
			$query = $this->db->get();
			if ($query->num_rows() == 0) {
				echo "FrontPostModel get_blogposts_post function";
			}else{
				 return $query->result();
				// echo "<pre>";
				// print_r($data);
			}
		}

		public function get_ourproject_post()
		{
			$this->db->select('*');
			$this->db->from('product');
			$this->db->limit('3');
			$query = $this->db->get();
			if ($query->num_rows() == 0) {
				echo "FrontPostModel get_ourproject_post function";
			}else{
				 return $query->result();
				// echo "<pre>";
				// print_r($data);
			}
		}

		public function get_ourproject_sec_post()
		{
			$this->db->select('*');
			$this->db->from('product');
			$this->db->limit('1');
			$this->db->where('post_categories','["16"]');
			$query = $this->db->get();
			if ($query->num_rows() == 0) {
				echo "FrontPostModel get_ourblog_post function";
			}else{
				 return $query->result();
				// echo "<pre>";
				// print_r($data);
			}
		}
		public function get_ourprojectmain_post()
		{
			$this->db->select('*');
			$this->db->from('product');
			$this->db->limit('6');
			$this->db->where('post_categories','["11"]');
			$query = $this->db->get();
			if ($query->num_rows() == 0) {
				echo "FrontPostModel get_ourblogmain_post function";
			}else{
				 return $query->result();
				// echo "<pre>";
				// print_r($data);
			}
		}
	}

?>