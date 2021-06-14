<?php
ob_start();
class Chats extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Chats_model');
		$this->load->model('Notification_model');
		$this->load->model('Mp3_model');
		$this->load->helper('time');	

	}

	public function index($user_id = null)
	{
		
		$user_ids = $this->session->userdata('user_id');	
		//check they are logged in
		if(!$this->session->userdata('username')) {
			redirect('user/login');
		}

		$data['user_id'] = $this->session->userdata('user_id');	

		$data['recipient'] = $this->User_model->get_users($user_id);
		$data['notification_count'] =$this->Notification_model->get_notification($user_id);
		$data['notification'] = $this->Notification_model->get_notification_count($user_id);
		$data['status'] =  "read";
		$data['read'] = "unread";
		$data['tracks'] = $this->Mp3_model->get_tracks();
		$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);	
		$data['pic'] = $this->User_model->get_users($user_ids);		
		$this->load->view('user/templates/header_view_subpage', $data);
		$this->load->view('user/chats_view', $data);
		$this->load->view('user/mp3_view', $data);
		$this->load->view('user/templates/footer_view');

	}

	public function ajax_add_chat_message(){

		/* Things to be posted
		 * chat_id
		 * user_id
		 * chat_message_contents
		 *
		 *
		 */
		
		$user_id = $this->session->userdata('user_id');
		$recipient = $this->input->post('recipient');
		$chat_message_content = $this->input->post('chat_message_content');
		$read = $this->input->post('read');
		$this->Chats_model->add_chat_message($user_id, $recipient, $chat_message_content, $read);


	}

	public function ajax_get_chat_messages(){
		
		
		echo $this->_get_chat_messages();
		
	}

	public function _get_chat_messages()
	{
		
		$recipient = $this->input->post('recipient');
		$chat = $this->Chats_model->get_chat_messages($recipient);
		
		if($chat->num_rows() > 0){
			
				$c_html = '<div class="chat-discussion">';
			foreach($chat->result() as $cht)
			{
				if($cht->media_img != ""){
					$img = $cht->media_img;
				}

				else{

					$img = "blank_user.png";
				}
				$date = strtotime($cht->date_created);
				$div_class = ($this->session->userdata('user_id') == $cht->user_id) ? 'class="chat-message chat-right"' : 'class="chat-message chat-left"';
				$a_class = ($this->session->userdata('user_id') == $cht->user_id) ? 'class="message-author"' : 'class="message-author_left"';
				$span_class = ($this->session->userdata('user_id') == $cht->user_id) ? 'class="message-date"' : 'class="message-date_left"';
				$c_html .='<div ' . $div_class. '>
							
							
							<div class="message mt-3">
                                           <div class="message-span-container">
												   <span class="message-content">'
												   .$cht->chat_message_content.'
										   		   </span>
											
										   </div>
                                            
                                        </div></div>';
			}
			

				$c_html .= '</div>';

				

			$result = array('status' =>'ok', 'content'=>$c_html);

			
			return json_encode($result);

		}
		

	}

	public function update_chat_notifications(){
		
		$recipient = $this->uri->segment(4);
		$this->Chats_model->update_chat_notification($recipient);
	}


	public function view_chats($user_id = null){
		$user_id = $this->session->userdata('user_id');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['pic'] = $this->User_model->get_users($user_id);
		$data['recipient'] = $this->User_model->get_users($user_id);
		$data['notification_count'] =$this->Notification_model->get_notification($user_id);
		$data['notification'] = $this->Notification_model->get_notification_count($user_id);
		$data['status'] =  "read";
		$data['read'] = "unread";
		$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);	
		$data['notification_count'] =$this->Notification_model->get_notification($user_id);
		$data['notification'] = $this->Notification_model->get_notification_count($user_id);
		//$data['pic'] = $this->User_model->get_users($user_id);
		$this->load->view('user/templates/header_view_subpage', $data);
		$this->load->view('user/chat_general', $data);
		$this->load->view('user/templates/footer_view');

	}

	public function ajax_get_chat_general(){		
		echo $this->_get_general_chat();
	
	}


	function _get_general_chat(){

		$user_id = $this->session->userdata('user_id');
		$messages = $this->Chats_model->get_all_messages($user_id);	
			if($messages->num_rows() > 0){
				$chat_html ='<table class="table table-hover table-mail"><tbody>';	
				foreach($messages->result() as $message)
					{
					if($message->media_img != ""){
						$img = $message->media_img;
						}

					else{
						$img = "blank_user.png";
						}
			if($message->status == "unread")
			{
				$tr = 'unread';
			}

			else{
				$tr = 'read';
			}

			$chat_html.='<tr class="'.$tr.'">
							<td class="check-mail">
                    			
               			    </td>
                			<td class="mail-ontact"><img alt="image" class="img-thumbnail" width=38px height=38px src="'.base_url().'/public/user_img/'.$img.'">
                			</td>
                			<td class="mail-ontact"><a href="'.base_url().'chats/'.$message->user_id.'">'.$message->username.'</a></td>
                			<td class="mail-subject"><a href="'.base_url().'chats/'.$message->user_id.'">'.$message->chat_message_content.'</a></td>
                			
                			<td class="text-right mail-date">'.time_ago($message->date_created).'</td>';
            $chat_html.='</tr>';
					}

			$chat_html.='</tbody></table>';
            $result = array('status' =>'ok', 'content'=>$chat_html);
			return json_encode($result);
		}
	}
}