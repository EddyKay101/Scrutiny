<?php
ob_start();
class Artists extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Artist_model');
		$this->load->helper(array('form', 'url'));
		$this->load->helper('file');
		$this->load->model('Comment_model');
		$this->load->model('Notification_model');
		$this->load->model('User_model');
		$this->load->model('Chats_model');
		$this->load->model('Mp3_model');
	}

	public function index()
	{

		$user_id = $this->session->userdata('user_id');
		$data['pic'] = $this->User_model->get_users($user_id);
		$data['user_id'] = $this->session->userdata('user_id');
		$data['notification_count'] =$this->Notification_model->get_notification($user_id);
		$data['notification'] = $this->Notification_model->get_notification_count($user_id);
		$data['status'] =  "read";
		$data['read'] = "unread";
		$data['tracks'] = $this->Mp3_model->get_tracks();
		$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);	
		$this->load->view('user/templates/header_view_subpage', $data);
		$data['artists'] = $this->Artist_model->get_entries();
		$data['subtitle'] = 'Artist Entries';
		$this->load->view('user/artist_view', $data);
	   $this->load->view('user/mp3_view');
		$this->load->view('user/templates/footer_view_subpage');
	}

	public function a_test(){
		$user_id = $this->session->userdata('user_id');
		$data['pic'] = $this->User_model->get_users($user_id);
		$data['user_id'] = $this->session->userdata('user_id');
		$data['notification_count'] =$this->Notification_model->get_notification($user_id);
		$data['notification'] = $this->Notification_model->get_notification_count($user_id);
		$data['status'] =  "read";
		$data['read'] = "unread";
		$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);	
		$data['artists'] = $this->Artist_model->get_entries();
		$data['title'] = 'Artists';
		$data['subtitle'] = 'Artist Entries';
		$this->load->view('user/artist_view', $data);
		$this->load->view('user/templates/footer_view_subpage');
	}


	public function view($artist_id = NULL){
		$user_id = $this->session->userdata('user_id');
		$data['pic'] = $this->User_model->get_users($user_id);
		$data['user_id'] = $this->session->userdata('user_id');
		$data['notification_count'] =$this->Notification_model->get_notification($user_id);
		$data['notification'] = $this->Notification_model->get_notification_count($user_id);
		$data['status'] =  "read";
		$data['read'] = "unread";
		$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);	
		$data['artists'] = $this->Artist_model->get_entries($artist_id);
		//$data['title']	= $data['artists']['title'];
		
		if(empty($data['artists'])){
				show_404();
			}
		
			
		$this->load->view('user/templates/header_view_subpage',$data);
		$this->load->view('user/artist_entry_view', $data);
		$this->load->view('user/templates/footer_view_subpage');
			
		}
}
?>

