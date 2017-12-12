<?php
	/**
	* 
	*/
	class AddMenusModel extends CI_Model
	{
		public function addmenus()
		{

			if ($this->input->post('parent_menu') != '') {
				$alldata = array(
				'parent_menu_id' => $this->input->post('parent_menu'),
				'name' => $this->input->post('pagetitle'),
				'data' => $this->input->post('pagecontent'),
				'slug' => $this->input->post('pagetitle'),
				'date' => $this->input->post('pagedate'),
			);
				$this->db->insert('sub-menus', $alldata);
			}else{
			$alldata = array(
				'name' => $this->input->post('pagetitle'),
				'data' => $this->input->post('pagecontent'),
				'slug' => $this->input->post('pagetitle'),
				'date' => $this->input->post('pagedate'),
			);
			$this->db->insert('menus', $alldata);
		}
		}
		public function allpagesfunction()
		{
			$this->db->select('*');
			$this->db->from('menus');
			$query = $this->db->get();
			return $query->result();
		}

		public function deletepage($id)
		{
			$this->db->where('id',$id);
			$this->db->delete('menus');
			redirect('Admin/AddPagesController/allpages');
		}
		public function updatepage($id)
		{

			$this->db->select("*");
			$this->db->where('id',$id);
			$this->db->from('menus');
			$querypage = $this->db->get();
			if ($querypage->num_rows() > 0) {
				return $querypage->result();
			}
			else
			{
				echo "<h1>Error 404</h1>";
			}
		}

		function updatepagedata()
		{
			$pagid = $this->input->post('pageid');
			$updatedatapage = array(
				'name' => $this->input->post('uppagetitle'),
				'data' => $this->input->post('uppagecontent'),
				'slug' => $this->input->post('uppagetitle'),
				'date' => $this->input->post('uppagedate'),
				 );
			$this->db->where('id',$pagid);
			$this->db->update('menus',$updatedatapage);

			$this->db->select("*");
			$this->db->from('menus');
			$this->db->where('id',$pagid);
			$openquery = $this->db->get();
			if ($openquery->num_rows() > 0) {
				//echo "hello";
				return $openquery->result();
			}
			else
			{
				echo "errorrrrr";
			}
		}
	}
?>