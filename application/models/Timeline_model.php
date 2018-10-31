<?php
	class timeline_model extends CI_Model{
		public function __construct(){
			$this->tableName = 'timeline';
			$this->load->database();
			

		}

		public function get_timeline(){
			$session = $this->session->userdata('user_id');
			$this->db->select('*');
			$this->db->from('timeline');
			$this->db->join('users', 'users.user_id = timeline.user_id');
			$this->db->where(array('timeline.recipient' => $session));
			$this->db->order_by('timeline.date_created', 'DESC');
			$query = $this->db->get();			
			return $query->result_array();
																																																																																																					
		}

		public function get_timeline_follow(){
			$session = $this->session->userdata('user_id');
			$this->db->select('*');
			$this->db->from('timeline');
			$this->db->join('users', 'users.user_id = timeline.recipient');
			$this->db->where(array('timeline.user_id' => $session));
			$this->db->order_by('timeline.date_created', 'DESC');
			$query = $this->db->get();			
			return $query->result_array();

		}

		public function insert_into_timeline($user_id, $recipient, $action)
	{
			$query_str ="INSERT INTO timeline (user_id, recipient, action) VALUES (?,?,?)";
        	$this->db->query($query_str, array($user_id, $recipient, $action));
	}

		public function insert_into_timeline_for_upload($user_id,  $action)
	{
			$query_str ="INSERT INTO timeline (user_id,  action) VALUES (?,?)";
        	$this->db->query($query_str, array($user_id,  $action));
	}
}