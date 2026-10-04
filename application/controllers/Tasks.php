<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller
{
	#[Override]
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Task_model');
	}

	public function index()
	{
		$data['tasks'] = $this->Task_model->get_all_tasks();
		$data['title'] = 'Task Manager';

		$this->load->view('tasks/index', $data);
	}
}
