<?php
Class Project_model extends CI_Model {
	function get_project(){
		$query = $this->db->get('projects');
		return $query->result();
	}
	
	function insertProject()
	{
		$data = array(
				'project_name' => $_POST['project_name'],
				'project_description' => $_POST['project_desc'],
				'project_created_by' => $_POST['project_created_by']
		);
		$this->db->insert('projects', $data);
	}
}