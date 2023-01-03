<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
	public function index()
	{
		$session_data = $this->session->userdata('customer_logged_in');
		$data=null;
		if ($session_data) {
			$data['customerData']=$session_data;
		} 
		    $this->load->view('admin/header',$data);
			$this->load->view('register',$data);
	}

	function registerCustomer()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$name = $this->input->post('name');
		$this->load->model('Sitemodel');
		unset($_POST['cpassword']);
		$verify = $this->Sitemodel->getCustomerByEmail($email);
		if ($verify == false) {
			$inserted = $this->Sitemodel->register($_POST);
			if ($inserted) { 
			redirect('login');
			}
		}
		else{
			redirect('register/index?err1=1');
		}
		// print_r($inserted);
	}
	function updateCustomer()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$mobile = $this->input->post('mobile');
		
		$this->load->model('Sitemodel');
		if (!isset($_POST['password']) || $_POST['password']=='' || $_POST['password']==null) {
			unset($_POST['password']);
		}
		unset($_POST['cpassword']);
		unset($_POST['email']);
		
		
			$inserted = $this->Sitemodel->updateCustomer($_POST,$email);
			if ($inserted) {
				unset($_POST['password']);
				$_POST['email']=$email;
				$this->session->set_userdata('customer_logged_in', $_POST);
				redirect('register/index?success=1');
			}
		// print_r($inserted);
	}
	// function logout()
	// {
	// 	$this->session->unset_userdata('customer_logged_in');
	// 	session_destroy();
	// 	redirect('login', 'refresh');
	// }
}
