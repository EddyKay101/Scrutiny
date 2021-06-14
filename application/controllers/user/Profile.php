<?php
ob_start();
	class Profile extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('User_model');
		} 

		public function index()
		{
			
			
			$data['media_img'] = $this->session->userdata('media_img');
			$data['username'] = $this->session->userdata('username');
			$data['profiles'] = $this->User_model->get_user($this->session->userdata('user_id'));
			$this->load->view('user/templates/header_view_subpage');	
			$this->load->view('user/profile_view', $data);
			
			$this->load->view('user/templates/footer_view');
		}

	}


?>