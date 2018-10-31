<?php
class Chat extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Chat_model');
		$this->load->model('Notification_model');
		
		

	}

	public function index($user_id = null)
	{
		

		//check they are logged in
		if(!$this->session->userdata('username')) {
			redirect('user/login');
		}
		$data['chat_id'] = 1;
		$data['user_id'] = $this->session->userdata('user_id');
		$data['recipient'] = $this->User_model->get_users($user_id);
		
		$data['title'] = 'Chat';
		$data['notification_count'] = $this->Notification_model->get_notification_count($user_id);
		$this->session->set_userdata('last_chat_message_id_' . $data['chat_id'], 0);
		$this->load->view('user/templates/header_view_subpage', $data);
		$this->load->view('user/chat_view', $data);
		$this->load->view('user/templates/footer_view_subpage');

	}

	public function ajax_add_chat_message(){

		/* Things to be poseted
		 * chat_id
		 * user_id
		 * chat_message_contents
		 *
		 *
		 */
		$chat_id = $this->input->post('chat_id');
		$user_id = $this->input->post('user_id');
		$recipient = $this->input->post('recipient');
		$chat_message_content = $this->input->post('chat_message_content', TRUE);
		$this->Chat_model->add_chat_message($chat_id, $user_id, $recipient, $chat_message_content);



		//grab and return messages
		echo $this->_get_chat_messages($chat_id);


	}

	public function ajax_get_chat_messages(){
		$chat_id = $this->input->post('chat_id');
		$recipient = $this->input->post('recipient');

		if (!$recipient){
		echo $this->_get_chat_messages($chat_id);
		}
	}

	 function _get_chat_messages($chat_id){

	 	$last_chat_message_id = (int)$this->session->userdata('last_chat_message_id_' . $chat_id);

		$chat_messages = $this->Chat_model->get_chat_messages($chat_id, $last_chat_message_id);

		if ($chat_messages->num_rows() > 0)
		{

			//store last chat message id
			$last_chat_message_id = $chat_messages->row($chat_messages->num_rows() - 1)->chat_message_id;
			$this->session->set_userdata('last_chat_message_id_' . $chat_id, $last_chat_message_id);
			$chat_messages_html = '<ul>';
			foreach($chat_messages->result() as $chat_message)
			{

				$li_class = ($this->session->userdata('user_id') == $chat_message->user_id) ? 'class="by_current_user"' : '';

				$chat_messages_html .='<li ' . $li_class. '>' . '<span class="chat_message_header">' . $chat_message->chat_message_timestamp . ' by ' . $chat_message->username . '</span><p class="message_content">' .$chat_message->chat_message_content . '</p></li>';
			}

			$chat_messages_html .='</ul>';

			

			$result = array('status' =>'ok', 'content'=>$chat_messages_html);

			
			return json_encode($result);

		}
		else
		{
			$result = array('status' =>'ok', 'content'=>'');
			//print_r($result);

			return json_encode($result);
			
			exit();

		}
		
		
	}


	}

	?>