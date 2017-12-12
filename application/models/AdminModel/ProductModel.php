<?php

	/**
	* 
	*/
	class ProductModel extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		/*********************Product Section********************************/

		function AddProduct($productdetail)
		{
			$this->db->insert('product',$productdetail);
		}

		function GetProductDetail($limit, $id)
		{
			$this->db->limit($limit, $id);
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
		function getcate_rr($limit, $id)
		{
			$this->db->limit($limit, $id);
			return $this->db->get('categories')->result_array();
		}
		/******************End Category Section**********************/
		function product_count()
		{
			return $this->db->count_all("product");
		}
	}
?>