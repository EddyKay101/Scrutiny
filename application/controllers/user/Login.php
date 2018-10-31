<?php
class Login extends CI_Controller
{

	 function __construct(){
        parent::__construct();
    }

 

	public function index()
	{
		
		$data['lRefer'] = $_SERVER['HTTP_REFERER'];
		$this->load->view('user/login_view', $data);
		
	}

	public function referer(){
		if(!empty($_SERVER['HTTP_REFERER'])){
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	
	/*public function logout(){
		$this->session->sess_destroy();//because we are using session class
		//session_destroy();
		redirect('/');
	}*/

}

?>