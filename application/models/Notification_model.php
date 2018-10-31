<?php
	class Notification_model extends CI_Model{
		public function __construct(){
			 $this->tableName = 'notifications';
			 $this->tableName = 'users';
			$this->load->database();
			

		}

		public function get_notification($recipient = null){
			$session = $this->session->userdata('user_id');
			$this->db->select('*');
			$this->db->from('notifications');
			$this->db->join('users', 'users.user_id = notifications.user_id');
			$this->db->where(array('notifications.recipient' => $recipient));
			$this->db->where(array('notifications.status' => 'unread'));
 			return $this->db->count_all_results();
			
		}

		public function update_notification($status){
			$session = $this->session->userdata('user_id');
			$this->db->set('status', 'read');
			$this->db->where('status', 'unread');
			$this->db->where('recipient', $session);
			$this->db->update('notifications');
		
		}

			public function get_notification_count($recipient = null){
			$session = $this->session->userdata('user_id');
			$this->db->select('*');
			$this->db->from('notifications');
			$this->db->join('users', 'users.user_id = notifications.user_id');
			$this->db->where(array('notifications.recipient' => $session));
			
 
			$query = $this->db->get();	
			
			return $query->result_array();
		}

		public function get_home_notifications($recipient)
		{


      $session = $this->session->userdata('user_id');

      $query = "SELECT * FROM notifications nt JOIN users u on u.user_id = nt.user_id where nt.recipient = $session and nt.status = 'unread'";

      $result = $this->db->query($query, array($recipient));

      return $result;

    }
		


	}