<?php

class Chat_model extends CI_Model{
public function __construct(){
			 $this->tableName = 'chat_messages';
			$this->load->database();
			

		}


	public function add_chat_message($chat_id, $chat_message_content)
	{
        $query_str ="INSERT INTO chat_messages (chat_id, user_id, recipient, chat_message_content) VALUES (?,?,?,?)";
        $this->db->query($query_str, array($chat_id, $user_id, $recipient, $chat_message_content));
	}


	public function get_chat_messages($chat_id,  $last_chat_message_id = 0){
			
			$session = $this->session->userdata('user_id');
			$query_str = "SELECT cm.chat_message_id, cm.user_id, cm.chat_message_content, DATE_FORMAT(cm.date_created, '%D of %M %Y at %H:%i:%s') AS chat_message_timestamp, u.username FROM chat_messages cm JOIN users u ON u.user_id = cm.user_id WHERE cm.chat_id = ? and cm.chat_message_id > ? ORDER BY cm.chat_message_id ASC";

			$result = $this->db->query($query_str, array($chat_id,  $last_chat_message_id));

			return $result;
		}


	public function get_chat_messagess($chat_id, $last_chat_message_id = 0){
			
			$session = $this->session->userdata('user_id');
			$this->db->select('cm.chat_message_id , cm.user_id, cm.recipient, cm.chat_message_content, DATE_FORMAT(cm.date_created, "%D of %M %Y at %H:%i:%s") AS chat_message_timestamp');
			$this->db->from('chat_messages as cm');
			$this->db->join('users as u', 'u.user_id = cm.recipient_id');
			//$this->db->where(array('cm.user_id' => $session));
			$this->db->where(array('cm.chat_id' => $chat_id));
			$this->db->where(array('cm.chat_message_id' => $last_chat_message_id));

			$result = $this->db->query($query_str, array($chat_id, $recipient, $last_chat_message_id));

			return $result;
		}

}