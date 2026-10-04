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

	public function create()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Task Title', 'required|min_length[3]');
		$this->form_validation->set_rules('description', 'Description', 'trim');

		if($this->form_validation->run() === FALSE) {
			$data['title'] = 'Create New Task';
			$this->load->view('tasks/create', $data);
		} else {
			$task_data = [
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'status' => 'pending'
			];

			$this->Task_model->insert_task($task_data);
			redirect('tasks');
		}
	}

	public function edit($id)
	{
		$data['task'] = $this->Task_model->get_task_by_id($id);
		if(empty($data['task'])) {
			show_404();
		}

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Task Title', 'required|min_length[3]');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if($this->form_validation->run() === FALSE) {
			$data['title'] = "Edit Task";
			$this->load->view('tasks/edit', $data);
		} else {
			$update_data = [
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'status' => $this->input->post('status')
			];

			$this->Task_model->update_task($id, $update_data);
			redirect('tasks');
		}
	}

	public function delete($id) {
		$this->Task_model->delete_task($id);
		redirect('tasks');
	}
}
