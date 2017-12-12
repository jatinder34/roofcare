<?php
	/**
	* 
	*/
	class UserMenusModel extends CI_Model
	{
		public function usermenu()
		{
			$this->db->select("*");
			$this->db->from("menus");
			$query = $this->db->get();

			$final = array();
			if ($query->num_rows() > 0) {
				foreach($query->result() as $row)
				{
					$this->db->select("*");
					$this->db->from("sub-menus");
					$this->db->where("parent_menu_id", $row->id);
					$query = $this->db->get();
					if($query->num_rows() > 0)
					{
						$row->children = $query->result();
					}
					array_push($final, $row);
				}
			}
			return $final;
		}

		public function getlogo()
		{
			$this->db->select("*");
			$this->db->from('logo');
			$logoquery = $this->db->get();
			if ($logoquery->num_rows() > 0 ) {
				return $logoquery;
					//echo "string";
			}
			else{
				echo "<h1>Error</h1>";
			}
		}
	}
?>