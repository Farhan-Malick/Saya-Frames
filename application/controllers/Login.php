<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$session_data = $this->session->userdata('customer_logged_in');
		if ($session_data) {
			redirect('/home/cart');
		} else {
		    $this->load->view('admin/header');
			$this->load->view('login');
		}
	}
	function verifyLogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('Sitemodel');
		$verify = $this->Sitemodel->verifyLogin($email, $password);
		if ($verify != false) {
			$sess_array = array(
				'id' => $verify["customerId"],
				'name' => $verify["name"],
				'email' => $verify["email"],
				'mobile'=>$verify["mobile"],
				'address'=>$verify["address"],
				'city'=>$verify["city"]
			);
			$this->session->set_userdata('customer_logged_in', $sess_array);
			redirect('/home/cart');
		} else {
			redirect('login/index?err=1');
		}
	}

	// function register()
	// {
	// 	$email = $this->input->post('email');
	// 	$password = $this->input->post('password');
	// 	$name = $this->input->post('name');
	// 	$this->load->model('Sitemodel');
	// 	unset($_POST['cpassword']);
	// 	$verify = $this->Sitemodel->getCustomerByEmail($email);
	// 	if ($verify == false) {
	// 		$inserted = $this->Sitemodel->register($_POST);
	// 		if ($inserted) {
	// 			redirect('login');
	// 		}
	// 	}
	// 	else{
	// 		redirect('login/index?err1=1');
	// 	}

	// 	// print_r($inserted);
	// }

	function logout()
	{
		$this->session->unset_userdata('customer_logged_in');
		session_destroy();
		redirect('login', 'refresh');
	}
}
