<?php
ob_start();
class Reviews extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Music_model');
		$this->load->helper(array('form', 'url'));
		$this->load->helper('file');
		$this->load->model('Comment_model');
		$this->load->model('User_model');
		$this->load->model('Notification_model');
		$this->load->model('Chats_model');
		$this->load->model('Mp3_model');
	}

	public function index($user_id = null)
	{
		
		$user_id = $this->session->userdata('user_id');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['pic'] = $this->User_model->get_users($user_id);
		$data['notification_count'] =$this->Notification_model->get_notification($user_id);
		$data['notification'] = $this->Notification_model->get_notification_count($user_id);
		$data['status'] =  "read";
		$data['entries'] = $this->Music_model->get_entries();

		$data['title'] = 'Dashboard';
		$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);
		$data['subtitle'] = 'Music Entries';
		$data['tracks'] = $this->Mp3_model->get_tracks();
		$this->load->view('user/templates/header_view_subpage', $data);
		$this->load->view('user/music_view', $data);
		$this->load->view('user/mp3_view', $data);
		$this->load->view('user/templates/footer_view_subpage');
	}

	public function m_test(){
			$user_id = $this->session->userdata('user_id');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['pic'] = $this->User_model->get_users($user_id);
		$data['notification_count'] =$this->Notification_model->get_notification($user_id);
		$data['notification'] = $this->Notification_model->get_notification_count($user_id);
		$data['status'] =  "read";
		$data['entries'] = $this->Music_model->get_entries();
		$data['title'] = 'Dashboard';
		$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);
		$data['subtitle'] = 'Music Entries';
		$this->load->view('user/music_view', $data);
		$this->load->view('user/templates/footer_view_subpage');
	}

	public function view($entry_id = NULL){
		
		$user_id = $this->session->userdata('user_id');
		
		$data['pic'] = $this->User_model->get_users($user_id);
		$data['user_id'] = $this->session->userdata('user_id');
		$data['notification_count'] =$this->Notification_model->get_notification($user_id);
		$data['notification'] = $this->Notification_model->get_notification_count($user_id);
		$data['status'] =  "read";
		$data['entries'] = $this->Music_model->get_entries($entry_id);
		$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);
		$musicCount = $this->input->post('musicEntries');
		$data['countMusicEntries'] = $this->Music_model->countMusicEntries($entry_id);
		$data['title']	= $data['entries']['title'];
		$data['comments'] = $this->Comment_model->get_comments($entry_id);
		if(empty($data['entries'])){
				show_404();
			}
		
			
		$this->load->view('user/templates/header_view_subpage', $data);
		$this->load->view('user/music_entry_view', $data);
		$this->load->view('user/templates/footer_view_subpage');
			
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

