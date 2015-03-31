<?php 
/**
* 
*/
class Login extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('view_model');
	}

	function index(){
		$data['error'] = "";
		$this->load->view('login',$data);
	}
	function check(){
		$post = $this->input->post();
		$username = $post['username'];
		$password = $post['password'];
		$login = $this->view_model->check_login($username, $password);
		if ($login == true) {
			$session = $this->session->set_userdata('session');
			
		} else {
			$data['error'] = "Login Error Username or Password";
			$this->load->view('login',$data);
		}
	}
}
?>