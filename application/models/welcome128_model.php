<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome128_model extends CI_Model {



	public function add_user()
	{
		$this->load->database();
		//input data
       		$uname = $this->input->post('username'); //collected from the form
       		$pword = $this->input->post('password');
			
       		//put in an array
       		$data = array(
       			'username' => $uname,
       			'password' => $pword
       		);
       			
       			//insert into the table users
       		        $query = $this->db->insert('users', $data);       		
       		return $query;			
	
	}


}



