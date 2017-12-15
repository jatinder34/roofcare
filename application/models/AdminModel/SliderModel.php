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
	}
?>