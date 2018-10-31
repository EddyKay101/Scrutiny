<?php

class Chats_model extends CI_Model{
    public function __construct(){
       $this->tableName = 'chat_messages';
       $this->tableName = 'users';
      $this->load->database();
      

    }


    public function get_chat_messages($recipient)
    {


      $session = $this->session->userdata('user_id');

      $query = "SELECT * FROM chat_messages cm JOIN users u on u.user_id = cm.user_id where cm.user_id = $session and cm.recipient = $recipient or cm.user_id = $recipient and cm.recipient = $session ORDER BY cm.chat_message_id ASC ";

      $result = $this->db->query($query, array($recipient));

      return $result;

    }

    public function get_all_messages($session)
    {


        $query = "SELECT cm.*, u.* from chat_messages cm JOIN users u on u.user_id = cm.user_id where cm.recipient = $session AND cm.chat_message_id IN (SELECT MAX(chat_message_id) as mid from chat_messages where recipient = $session group by user_id) ORDER BY cm.date_created DESC";

        $result = $this->db->query($query, array($session));


        return $result;

    }

    public function get_all_messages_date($session)
    {


        $query = "SELECT cm.date_created from chat_messages cm JOIN users u on u.user_id = cm.user_id where cm.recipient = $session AND cm.chat_message_id IN (SELECT MAX(chat_message_id) as mid from chat_messages where recipient = $session group by user_id) ORDER BY cm.date_created DESC";

        $result = $this->db->query($query, array($session));


        return $result;

    }

    

    public function get_chat_message_count($recipient = null){
      $session = $this->session->userdata('user_id');
      $this->db->select('*');
      $this->db->from('chat_messages');
      $this->db->join('users', 'users.user_id = chat_messages.user_id');
      $this->db->where(array('chat_messages.recipient' => $recipient));
      $this->db->where(array('chat_messages.status' => 'unread'));
      return $this->db->count_all_results();
      
    }

    public function add_chat_message($user_id, $recipient, $chat_message_content, $status)
  {
        $query_str ="INSERT INTO chat_messages (user_id, recipient, chat_message_content, status) VALUES (?,?,?,?)";
        $this->db->query($query_str, array($user_id, $recipient, $chat_message_content, $status));
  }

  public function update_chat_notification($recipient){
      $session = $this->session->userdata('user_id');
   

      $query = "UPDATE chat_messages SET status = 'read' WHERE user_id = $recipient and recipient = $session";

      $result = $this->db->query($query, array($recipient));

      return $result;

   
    
    }
}

?>