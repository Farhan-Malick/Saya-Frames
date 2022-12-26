<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminLogin extends CI_Controller
{
	public function index()
	{
		$session_data = $this->session->userdata('logged_in');
		if ($session_data) {
			redirect('admin');
		} else {
			$this->load->view('admin/header');
			$this->load->view('admin-login');
		}
	}

	function verifyLogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('Sitemodel');
		$verify = $this->Sitemodel->adminVerifyLogin($email, $password);
		if ($verify != false) {
			$sess_array = array(
				'id' => $verify["id"],
				'name' => $verify["name"],
				'email' => $verify["email"]
			);
			$this->session->set_userdata('logged_in', $sess_array);
			redirect('admin');
		} else {
			redirect('adminlogin/index?err=1');
		}
	}

	function register()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$name = $this->input->post('name');
		$this->load->model('Sitemodel');
		$inserted = $this->Sitemodel->adminRegister($email, $password, $name);
		if ($inserted) {
			redirect('adminlogin');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('adminlogin', 'refresh');
	}
}
