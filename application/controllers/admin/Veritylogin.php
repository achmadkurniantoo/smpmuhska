
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Veritylogin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model','',TRUE);
	}

	public function index(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'username', 'trim|required');
   		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_check_database');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/login');
		}else{
			redirect('admin/dashboard', 'refresh');
		}

	}

	function check_database($password){
	   //Field validation succeeded.  Validate against database
	   $username = $this->input->post('username');
	 
	   //query the database
	   $result = $this->login_model->login($username, $password);
	 
	   if($result)
	   {
	     $sess_array = array();
	     foreach($result as $row)
	     {
	       $sess_array = array(
	         'username' => $row->username
	       );
	       $this->session->set_userdata('logged_in', $sess_array);
	     }
	     return TRUE;
	   }
	   else
	   {
	     $this->form_validation->set_message('check_database', 'Invalid username or password');
	     return false;
	   }
	 }
}

?>