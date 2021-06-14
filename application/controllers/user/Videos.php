<?php
ob_start();
class Videos extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Video_model');
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

		$data['videos'] = $this->Video_model->get_entries();

		$data['title'] = 'Dashboard';
		$data['subtitle'] = 'Video Entries';
		
		$this->load->view('user/video_view', $data);
	   $this->load->view('user/mp3_view');
		$this->load->view('user/templates/footer_view');
	}

	public function v_test(){
		$user_id = $this->session->userdata('user_id');
		$data['pic'] = $this->User_model->get_users($user_id);
		$data['user_id'] = $this->session->userdata('user_id');
		$data['notification_count'] =$this->Notification_model->get_notification($user_id);
		$data['notification'] = $this->Notification_model->get_notification_count($user_id);
		$data['status'] =  "read";
		$data['read'] = "unread";
		$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);	
		$data['videos'] = $this->Video_model->get_entries();
		$data['title'] = 'Videos';
		$data['subtitle'] = 'Video Entries';
		$this->load->view('user/video_view', $data);
		$this->load->view('user/templates/footer_view');
	}


	public function view($video_id = NULL){
		$user_id = $this->session->userdata('user_id');
		$data['pic'] = $this->User_model->get_users($user_id);
		$data['user_id'] = $this->session->userdata('user_id');
		$data['notification_count'] =$this->Notification_model->get_notification($user_id);
		$data['notification'] = $this->Notification_model->get_notification_count($user_id);
		$data['status'] =  "read";
		$data['read'] = "unread";
		$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);	
		$data['videos'] = $this->Video_model->get_entries($video_id);
		$data['countVideoEntries'] = $this->Video_model->countVideoEntries($video_id);
		$data['title']	= $data['videos']['title'];
		$data['vid_comments'] = $this->Comment_model->get_vid_comments($video_id);
		if(empty($data['videos'])){
				show_404();
			}
		
			
		$this->load->view('user/templates/header_view_subpage',$data);
		$this->load->view('user/video_entry_view', $data);
		$this->load->view('user/templates/footer_view');
			
		}
}
?>

