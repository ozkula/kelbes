<?php
/**
* 
*/
class View_model extends CI_Model
{
	function check_login($username,$password){
		$query = "SELECT * FROM user WHERE username = ? AND password = ?"
	}
}
?>