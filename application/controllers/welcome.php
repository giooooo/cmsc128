<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome128');
	}
	
	public function about_us()
	{
		$this->load->view('about');
	}
	
	
	public function process()
	{
		$this->load->helper(array('form', 'url'));	
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'username or email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[30]');
		
				//if the input values did not pass the validation
		if($this->form_validation->run() == FALSE)
		{
			//return to previous view
			$this->load->view('welcome128');
		}//if
		else{
			//load (database) model for registration
			$this->load->model('welcome128_model');
			
			//issue a query to the database ... insert the data 
			if($query = $this->welcome128_model->add_user())
			{				
				$this->load->view('success128');
			}
			//cannot insert the data
			else
			{
				//$this->db->_error_message(); 
				//return to previous view
				$this->load->view('fail128');
			}//else
			
		}//else
		
		
		
		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */