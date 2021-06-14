<?php
ob_start();
class Connect extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Chats_model');
		$this->load->model('User_model');
		$this->load->model('Notification_model');
		$this->load->helper(array('form', 'url'));
		$this->load->helper('file');
		$this->load->model('Mp3_model');
		$this->load->model('Ump3_model');
		$this->load->model('Timeline_model');
			
	} 

	public function index($user_id = null){
		if(!$this->session->userdata('username')) {
			redirect('user/login');
		}
		$user_id = $this->session->userdata('user_id');

		$data['user_id'] = $this->session->userdata('user_id');
		$data['notification_count'] =$this->Notification_model->get_notification($user_id);
		$data['notification'] = $this->Notification_model->get_notification_count($user_id);
		$data['status'] =  "read";
		$data['read'] = "unread";
		$data['trueDownload'] = "true";
		$data['falseDownload'] = "false";
		$data['pic'] = $this->User_model->get_users($user_id);
		$data['chats'] = $this->Chats_model->get_all_messages($user_id);
		$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);	
		$data['members'] = $this->User_model->get_user();
		$data['status'] =  "read";
		$data['tracks'] = $this->Ump3_model->get_tracks();
		$data['timeline'] = $this->Timeline_model->get_timeline();
		$data['timeline_follow'] = $this->Timeline_model->get_timeline_follow();
		$data['count_timeline'] = count($data['timeline']);
		$data['friends'] = $this->User_model->get_friends();
		$data['count_friends'] = count($data['friends']);
		$data['followers'] = $this->User_model->get_to_follow();
		$data['count_followers'] = count($data['followers']);
		$this->load->view('user/templates/header_view_subpage', $data);	
		$this->load->view('user/connect_view', $data);
		$this->load->view('user/mp3_view', $data);
		$this->load->view('user/templates/footer_view');		
	}

	public function updateTrueDownloadable(){
		//$stat = $this->input->post('downloadable');
		$this->Ump3_model->contentDownloadable();
	}

	public function updateFalseDownloadable(){
		//$stat = $this->input->post('downloadable');
		$this->Ump3_model->falseDownloadable();
	}
}


?>