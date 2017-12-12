<?php
	/**
	* 
	*/
	class FrontendModel extends CI_Model
	{
		
		public function getpage_datamenu($id)
		{
			$this->db->select('data');
			$this->db->from('menus');
			$this->db->where('id',$id);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result();
			}
			else{
				echo "Page Not Found";
			}
		}
		public function getpage_datasub($sid)
		{
			$this->db->select('data');
			$this->db->from('sub-menus');
			$this->db->where('id',$sid);
			$subquery = $this->db->get();
			if ($subquery->num_rows() > 0) {
				return $subquery->result();
			}else{
				echo "Page Not Found";
			}
		} 
	}
?>