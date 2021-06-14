<?php
ob_start();
	class Friends extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('User_model');
			$this->load->model('Notification_model');
			$this->load->model('Chats_model');
					
		}


		public function index($user_id = null){
			if(!$this->session->userdata('username')) {
			redirect('user/login');
		}
			
			$user_id = $this->session->userdata('user_id');
			$data['friends'] = $this->User_model->get_friends();
			$data['user_id'] = $this->session->userdata('user_id');
			$data['notification_count'] =$this->Notification_model->get_notification($user_id);
			$data['notification'] = $this->Notification_model->get_notification_count($user_id);
			$data['status'] =  "read";
			$data['read'] = "unread";
			$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);	
			$data['pic'] = $this->User_model->get_users($user_id);
			$this->load->view('user/templates/header_view_subpage', $data);	
			$this->load->view('user/friends_view', $data);
			$this->load->view('user/templates/footer_view');

		}

		public function view(){
		
			$data['members'] = $this->User_model->get_friends();
			$data['friends'] = $this->User_model->get_friends();
			
			$data['user_id'] = $this->session->userdata('user_id');
			$data['status'] =  "read";
			$data['read'] = "unread";
	
		$this->load->view('user/templates/header_view_subpage');
		$this->load->view('user/members_entry_view', $data);
		$this->load->view('user/templates/footer_view');
			
		
		}

		public function isFriend($user_id){
			return $this->User_model->is_friend($user_id); 
		}


		public function ajax_get_count(){
		//$user_id = $this->input->post('user_id');

		echo $this->_count();

	}

		 function _count($user_id = null)
	{
		
		$user_id = $this->session->userdata('user_id');

		$data['notification_count'] = $this->Notification_model->get_notification($user_id);
		
		return $data['notification_count']++;
	
		}
	}



?>