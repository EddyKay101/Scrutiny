<?php
ob_start();
class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Music_model');
		$this->load->model('Video_model');
		$this->load->model('Artist_model');
		$this->load->model('User_model');
		$this->load->model('Mp3_model');
		$this->load->model('Notification_model');
		$this->load->model('Chats_model');

		$this->load->helper('file');
	}


	public function index($user_ids = null)
	{

		$user_id = $this->session->userdata('user_id');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['pic'] = $this->User_model->get_users($user_id);
		$data['notification_count'] = $this->Notification_model->get_notification($user_id);
		$data['notification'] = $this->Notification_model->get_notification_count($user_id);
		$data['status'] =  "read";
		$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);
		$data['entries'] = $this->Music_model->getlimit_entries();
		$data['videos'] = $this->Video_model->getlimit_entries();
		$data['artists'] = $this->Artist_model->getlimit_entries();
		$data['members'] = $this->User_model->limitUsers();
		$data['friends'] = $this->User_model->get_friends();
		$data['get_working'] = "post get working";
		$data['tracks'] = $this->Mp3_model->get_tracks();
		$this->load->view('user/templates/header_view', $data);
		$this->load->view('user/home_view', $data);
		$this->load->view('user/mp3_view', $data);
	}
	public function ajax_get_count()
	{

		echo $this->_count();
	}

	function _count($user_id = null)
	{

		$user_id = $this->session->userdata('user_id');

		$data['notification_count'] = $this->Notification_model->get_notification($user_id);
		//$data['notification'] = $this->Notification_model->get_notification_count($user_id);
		return $data['notification_count']++;
	}


	//For setting the status to read once user has seen notification
	public function update_notifications()
	{

		$status = $this->input->post('status');
		$this->Notification_model->update_notification($status);
	}


	public function ajax_get_chat_count()
	{

		echo $this->_chat_count();
	}

	function _chat_count($user_id = null)
	{

		$user_id = $this->session->userdata('user_id');

		$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);

		return $data['chat_count']++;
	}


	public function ajax_get_chat_messages()
	{


		echo $this->_get_chat_messages();
	}



	public function _get_chat_messages()
	{

		$user_id = $this->session->userdata('user_id');
		$messages = $this->Chats_model->get_all_messages($user_id);


		if ($messages->num_rows() > 0) {



			$chat_html = '<ul class="navchat">';
			foreach ($messages->result() as $message) {
				if ($message->media_img != "") {
					$img = $message->media_img;
				} else {

					$img = "blank_user.png";
				}


				if ($message->status == "unread") {
					$unread = '<div class="container-left">';
					$unread .= '<img alt="image" class="chat-user-image img-circle" src="' . base_url() . '/public/user_img/' . $img . '">&nbsp;<strong>' . $message->username . '</strong><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
					$unread .= '<strong>' . $message->chat_message_content . '</strong></div><br>';
				} else {
					$unread = '<div class="container-left">';
					$unread .= '<img alt="image" class="chat-user-image img-circle" src="' . base_url() . '/public/user_img/' . $img . '">&nbsp;<strong style="font-weight: lighter;">' . $message->username . '</strong><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
					$unread .= '<strong style="font-weight: lighter;">' . $message->chat_message_content . '</strong></div><br>';
				}
				$chat_html .= '<li class="navchat-li" >';
				$chat_html .= '
												<a href="' . base_url() . 'chats/' . $message->user_id . '" onclick="myFunction()" style="text-transform:none;"><div class="dropdown-messages-box">
												<div class="container-right">	<small class="pull-right">' . $this->_time_ago($message->date_created) . '</small></div>' . $unread . '                                                             
													</div></a>';


				$chat_html .= '<div class="divider" ></div></li>';
			}


			$chat_html .= '<li class="navchat-li" text-transform:none;">
                            <div class="mt-2 text-center link-block">
                                <a href="' . site_url('user/chats/view_chats') . '">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div></li>';

			$chat_html .= '</ul>';

			$result = array('status' => 'ok', 'content' => $chat_html);


			return json_encode($result);
		}
	}

	public function ajax_get_notifications_home()
	{
		echo $this->_get_notifications();
	}


	function _get_notifications()
	{
		$user_id = $this->session->userdata('user_id');
		$alert = $this->Notification_model->get_home_notifications($user_id);
		if ($alert->num_rows() > 0) {

			$noti_html = '<ul class="navchat">';
			foreach ($alert->result() as $notif) {
				if ($notif->media_img != "") {
					$img = $notif->media_img;
				} else {

					$img = "blank_user.png";
				}
				if ($notif->type == "follow") {
					$type = '<img alt="image" class="chat-user-image img-circle" width=38px height=38px src="' . base_url() . '/public/user_img/' . $img . '"><i class="fa fa-link fa-fw"></i>';
					$type .= '' . $notif->username . ' is following you';
					$type .= '<span class="pull-right text-muted small">' . $this->_time_ago($notif->date_created) . '</span>';
				} elseif ($notif->type == "like") {
					$type = '<img alt="image" class="chat-user-image img-circle" width=38px height=38px src="' . base_url() . '/public/user_img/' . $img . '"><i class="fa fa-thumbs-up fa-fw"></i>';
					$type .= '' . $notif->username . ' is liked you';
					$type .= '<span class="pull-right text-muted small">' . $this->_time_ago($notif->date_created) . '</span>';
				}


				$noti_html .= '<li class="navchat-li" text-transform:none;">';

				$noti_html .= '<a href="profile.html" style="text-transform:none;">' . $type . '  </a>';

				$noti_html .= '<li class="divider" ></li></li>';
			}

			$noti_html .= '<li class="navchat-li" text-transform:none;">
                            <div class="text-center link-block">
                                <a href="" onclick="myFunction()">
                                    <i class="fa fa-bell"></i> <strong>See All</strong>
                                </a>
                            </div></li>';

			$noti_html .= '</ul>';
		} else {
			$noti_html = '<ul class="navchats">';
			$noti_html .= '<li class="navchat-li" text-transform:none;">
                              <i class="fa fa-bell"></i>
                              <span>
                              No Notifications
                              </span>
                          </li>';

			$noti_html .= '</ul>';
		}

		$result = array('status' => 'ok', 'content' => $noti_html);


		return json_encode($result);
	}

	public function update_chat_notifications()
	{

		//$notification_id = $this->input->post('notification_id');
		$read = $this->input->post('read');

		$this->Chats_model->update_chat_notification($read);
	}


	public function register()
	{

		$this->load->view('user/register_view');
	}

	public function logout()
	{
		$this->session->sess_destroy(); //because we are using session class
		//session_destroy();
		redirect($_SERVER['HTTP_REFERER']);
	}

	function _time_ago($timestamp)
	{
		date_default_timezone_set('Europe/London');
		$time_ago = strtotime($timestamp);
		$current_time = time();
		$time_difference = $current_time - $time_ago;
		$seconds = $time_difference;
		$minutes      = round($seconds / 60);           // value 60 is seconds  
		$hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
		$days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
		$weeks          = round($seconds / 604800);          // 7*24*60*60;  
		$months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
		$years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  
		if ($seconds <= 60) {
			return "Just Now";
		} else if ($minutes <= 60) {
			if ($minutes == 1) {
				return "one minute ago";
			} else {
				return "$minutes minutes ago";
			}
		} else if ($hours <= 24) {
			if ($hours == 1) {
				return "an hour ago";
			} else {
				return "$hours hrs ago";
			}
		} else if ($days <= 7) {
			if ($days == 1) {
				return "yesterday";
			} else {
				return "$days days ago";
			}
		} else if ($weeks <= 4.3) //4.3 == 52/12  
		{
			if ($weeks == 1) {
				return "a week ago";
			} else {
				return "$weeks weeks ago";
			}
		} else if ($months <= 12) {
			if ($months == 1) {
				return "a month ago";
			} else {
				return "$months months ago";
			}
		} else {
			if ($years == 1) {
				return "one year ago";
			} else {
				return "$years years ago";
			}
		}
	}
}