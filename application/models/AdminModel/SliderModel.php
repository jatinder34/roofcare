<?php

	/**
	* 
	*/
	class SliderModel extends CI_Model
	{
		
		function __construct()
		{
			
		}
		public function Insertsliderdata($slider)
		{
			$this->db->insert('slider',$slider);	
		}

		public function get_slides()
		{
			$this->db->select('*');
			$this->db->from('slider');
			$query = $this->db->get();
			if ($query->num_rows() != 0) {
				return $query->result();
			}
		}

	}
?>