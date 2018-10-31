<?php
class Friend_model extends CI_Model{
	public function __construct(){
		$this->tableName = 'friends_copy';
		$this->tableName = 'users';
		$this->load->database();
	}

	/*public function get_friends_copy(){
		$session = $this->session->userdata('user_id');
		$query = "SELECT * FROM users u JOIN friends_copy fm ON u.user_id = fm.friend_id where fm.user_id = $session";
			$result = $this->db->query($query)->result_array();

			return $result;

	}*/



	/*public function get_friends_copy($user_id = NULL){
		if ($user_id = $this->session->userdata('user_id')){
		$this->db->select('*');
    	$this->db->from('users');    	
    	$this->db->join('friends_copy', 'users.user_id = friends_copy.user_id');
    	//$this->db->get_where('friends_copy', array('friend_id' => $user_id));
    	$this->db->where('friends_copy.friend_id', $user_id);
   		$query = $this->db->get();
    	return $query->result_array($user_id);
    		}
		}*/

		

	//////////////////////////////


	/*public function get_friends_copy_copy(){
		$session = $this->session->userdata('user_id');
			$this->db->select('friends_copy_copy.user_id, friends_copy_copy.friend_id, users.username, users.media_img');
			$this->db->from('friends_copy_copy');
			$this->db->join('users', 'users.user_id = friends_copy_copy.user_id');
			$this->db->where(array('friends_copy_copy.friend_id' => $session));
			//$this->db->where('friends_copy.friend_id', $session);
 
			$query = $this->db->get();	
			return $query->result_array();
	}

	public function friendOf(){ 
			$this->db->select('users.user_id, friends_copy_copy.friend_id, users.username, users.media_img');
			$this->db->from('friends_copy_copy');
			$this->db->join('users', 'users.user_id = friends_copy_copy.user_id');

			$query = $this->db->get();	
			return $query->result_array();
			
		} 

	public function friends_copy(){
			return $this->get_friends_copy_copy()->get_where('friends_copy_copy.accepted', TRUE);


		}*/

}