<?php
class Home extends CI_Controller
{
		public function __construct()
	{
		parent::__construct();
		$user_id = $this->session->userdata('user_id');
		if(!$user_id){
			$this->logout();
		}
	} 

	public function index()
	{
		
		$data['title'] = 'Dashboard';
		$data['subtitle'] = 'Home';
		$this->load->view('admin/templates/header_view');
		$this->load->view('admin/home_view', $data);
		$this->load->view('admin/templates/footer_view');
	}

	
	public function logout(){
		$this->session->sess_destroy();//because we are using session class
		//session_destroy();
		redirect('admin');
	}

}

?>