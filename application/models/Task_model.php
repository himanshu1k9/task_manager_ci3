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
}
