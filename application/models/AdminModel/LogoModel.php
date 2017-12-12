<?php
	/**
	* 
	*/
	class LogoModel extends CI_Model
	{
		
		public function Logoup($img_name)
		{
			$this->db->select_max('id');
			$query = $this->db->get('logo');
			if ($query->num_rows() > 0) {
				$maxid = $query->result();
				$id = $maxid[0]->id;
				$this->db->where("id",$id);
				$this->db->delete('logo');
			}
			$data = array(
				'logo_image' => $img_name,
				 );
				$this->db->insert('logo',$data);
				 
				
		}

		public function getlogo()
		{
			$this->db->select_max('id');
			$query = $this->db->get('logo');
			if ($query->num_rows() > 0) {
				$maxid = $query->result();
				$id = $maxid[0]->id;
				$this->db->select('*');
				$this->db->from('logo');
				$this->db->where("id",$id);
				$logopath = $this->db->get();
				if ($logopath->num_rows() > 0) {
					return $logopath->result();
				}
			}else {
				echo "Error";
			}
		}
	}
?>