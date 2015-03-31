<?php
/**
* 
*/
class View_model extends CI_Model
{
	function check_login($username, $password){
		$query = "SELECT * FROM user WHERE username = ? AND password = ?";
		$parameter = array($username,$password);
        $result = $this->db->query($query,$parameter);
        return $result->result_array();
    }
}
?>