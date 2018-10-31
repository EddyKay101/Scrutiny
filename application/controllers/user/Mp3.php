<?php
ob_start();
class MP3 extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('Music_model');
		$this->load->model('Video_model');
		$this->load->model('Artist_model');
		$this->load->model('User_model');
		$this->load->model('Notification_model');
		$this->load->model('Chats_model');
		$this->load->model('Mp3_model');
		
		$this->load->helper('file');
		

	}


	public function index($user_id = null)
	{
		
		$user_id = $this->session->userdata('user_id');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['pic'] = $this->User_model->get_users($user_id);
		$data['notification_count'] =$this->Notification_model->get_notification($user_id);
		$data['notification'] = $this->Notification_model->get_notification_count($user_id);
		$data['status'] =  "read";
		$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);
		$data['tracks'] = $this->Mp3_model->get_tracks();
		//$data['recipient'] = $this->User_model->get_users($user_id);
		$data['get_working'] = "post get working";		
		$this->load->view('user/templates/header_view', $data);
		$this->load->view('user/upload_view', $data);
		//$this->load->view('user/templates/footer_view');
		}
		public function ajax_get_count(){
			
		echo $this->_count();

	}

		
		
}