<?php 
/**
* 
*/
class About extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){
		$this->load->view('about');
	}
}
?>