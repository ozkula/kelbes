<?php 
/**
* 
*/
class Picture extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){
		$this->load->view('picture');
	}
}
?>