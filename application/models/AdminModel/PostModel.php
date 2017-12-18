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
	}
?>