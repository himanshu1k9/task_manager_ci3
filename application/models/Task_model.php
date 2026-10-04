<?php

defined('BASEPATH') OR exif_imagetype('No direct script access allowed');

class Task_model extends CI_Model
{
	#[Override]
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all_tasks()
	{
		$query = $this->db->get('tasks');
		return $query->result_array();
	}

	public function insert_task($data) {
		return $this->db->insert('tasks', $data);
	}

	public function get_task_by_id($id) {
		$query = $this->db->get_where('tasks', array('id', $id));
		return $query->row_array();
	}

	public function update_task($id, $data) {
		$this->db->where('id', $id);
		return $this->db->update('tasks', $data);
	}

	public function delete_task($id) {
		$this->db->where('id', $id);
		return $this->db->delete('tasks');
	}
}
