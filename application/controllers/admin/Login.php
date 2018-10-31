<?php
class Login extends CI_Controller
{
 

	public function index()
	{
		
		
		$this->load->view('admin/login_view');
		
	}
	
	/*public function logout(){
		$this->session->sess_destroy();//because we are using session class
		//session_destroy();
		redirect('/');
	}*/

}

?>