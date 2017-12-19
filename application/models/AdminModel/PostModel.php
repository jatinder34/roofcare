<?php

	/**
	* 
	*/
	class PostModel extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		/*********************Product Section********************************/

		function AddPost($postdetail)
		{
			$this->db->insert('product',$postdetail);
		}

		function GetPostDetail()
		{
			$this->db->select("*");
			$query = $this->db->get('product');
			if ($query->num_rows() > 0) {
				foreach($query->result() as $row){
					$data[] = $row;
				}
				return $data;
			}
			return false;
		}
		/***********************End Product Section*************************/
		/******************Categories Section**********************/
		function addcatmodelfunction($cate_name)
		{
			$this->db->insert('categories',$cate_name);
		}
		function getcate()
		{
			return $this->db->get('categories')->result();
		}
		function getcate_rr()
		{
			$this->db->select("*");
			return $this->db->get('categories')->result_array();
		}
		/******************End Category Section**********************/
		function post_count()
		{
			return $this->db->count_all("product");
		}

		function get_foo_con()
		{
			$this->db->select("*");
			$this->db->from('footersetting');
			$foo_query = $this->db->get();
			if ($foo_query->num_rows() > 0) {
				return $foo_query->result();
			}else{
				echo "Error in PostModel line 57";
			}
		}


		function get_update_data($id)
		{
			$this->db->select('*');
			$this->db->from('product');
			$this->db->where('id',$id);
			$upquey = $this->db->get();
			if ($upquey->num_rows() == 1) {
				return $upquey->result();
			}else{
				return false;
			}
		}


		function updatepostdata($updatepost,$upid)
		{
			$this->db->where('id',$upid);
			$this->db->update('product',$updatepost);
		}



		function postdelete($id)
		{
			$this->db->where('id',$id);
			$this->db->delete('product');
			redirect('Admin/PostController/allpost');
		}
	}
?>