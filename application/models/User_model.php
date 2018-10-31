<?php
class User_model extends CI_Model{
	public function __construct(){
			 $this->tableName = 'notifications';
			 $this->tableName = 'users';
			$this->load->database();
			

		}

	public $friend_id;

	public function get($user_id = null){
	 if($user_id === null){
	 $q = $this->db->get('admin');
	 }elseif(is_array($user_id)) {
	 	$q = $this->db->get_where('admin', $user_id);
	 }

	 else {
		$q = $this->db->get_where('admin',['user_id' => $user_id]);
	 }
		return $q->result_array();
		
	}
	public function get_user($user_id = null){
	 if($user_id === null){
	 $i = $this->db->get('users');
	 }elseif(is_array($user_id)) {
	 	$i = $this->db->get_where('users', $user_id);
	 }

	 else {
		$i = $this->db->get_where('users',['user_id' => $user_id]);
	 }
		return $i->result_array();
		
	}

	public function limitUsers($user_id = null){
	 if($user_id === null){
	 	$this->db->order_by('rand()');
	 	$this->db->limit(4);
	 $i = $this->db->get('users');
	 }elseif(is_array($user_id)) {
	 	$i = $this->db->get_where('users', $user_id);
	 }

	 else {
		$i = $this->db->get_where('users',['user_id' => $user_id]);
	 }
		return $i->result_array();
		
	}

	public function get_users($username = FALSE){
			//Chaeck for the slug
			if($username === FALSE){
				$this->db->order_by('date_created', 'DESC');
				$query = $this->db->get('users');
				return $query->result_array();
			}
			$query = $this->db->get_where('users', array('user_id' => $username));
			return $query->row_array();
		}


	



	
		
	public function insert($data){
		$this->db->insert('users', $data);
		return $this->db->insert_id();
	}
		
	public function update($data, $user_id){
		$this->db->where(['user_id' => $user_id]);
		$this->db->update('users', $data);
		return $this->db->affected_rows();
	}
		
	public function delete($user_id){
		$this->db->delete('users', ['user_id' => $user_id]);
		return $this->db->affected_rows();
	}



	public function get_friends(){
			$session = $this->session->userdata('user_id');
			$this->db->select('*');
			$this->db->from('friends');
			$this->db->join('users', 'users.user_id = friends.friend_id');
			$this->db->where(array('friends.user_id' => $session));
 
			$query = $this->db->get();	
			return $query->result_array();
		}

		public function get_to_follow(){
			$session = $this->session->userdata('user_id');
			$this->db->select('users.*');
			$this->db->select('friends.user_id');

			$this->db->from('friends');
			$this->db->join('users', 'users.user_id = friends.user_id');
			$this->db->where(array('friends.friend_id' => $session));
			$query = $this->db->get();	
			return $query->result_array();
		}

		public function get_users_following($recipient = null){
			$segment = $this->uri->segment(2);
			$this->db->select('*');
			$this->db->from('friends');
			$this->db->join('users', 'users.user_id = friends.friend_id');
			$this->db->where(array('friends.user_id' => $segment));
 
			$query = $this->db->get();	
			return $query->result_array();
		}

		public function u_get_to_follow(){
			$segment = $this->uri->segment(2);
			$this->db->select('users.*');
			$this->db->select('friends.user_id');

			$this->db->from('friends');
			$this->db->join('users', 'users.user_id = friends.user_id');
			$this->db->where(array('friends.friend_id' => $segment));
			$query = $this->db->get();	
			return $query->result_array();
		}

		public function getFollowing($userId)//$userId to be passed as the person viewing.
{
    $this->db->where('user_id',$userId);
    $data = $this->db->get('friends');
    if($data->num_rows() > 0)
    {
       return $data;
    } else {
       $data = array();
       return $data;
    }
}



	public function add_friend($user_id, $friend_id)
	{

        $query_str ="INSERT INTO friends (user_id, friend_id) VALUES (?,?)";
        $this->db->query($query_str, array($user_id, $friend_id));
	}

	public function unFriend($user_id, $friend_id){
		$query_str = "DELETE FROM friends WHERE user_id = $user_id AND friend_id = $friend_id";
		$this->db->query($query_str, array($user_id, $friend_id));
	}

	public function notify_on_follow($user_id, $recipient, $type, $status)
	{
		$query_str ="INSERT INTO notifications (user_id, recipient, type, status) VALUES (?,?,?,?)";
        $this->db->query($query_str, array($user_id, $recipient, $type, $status));
	}

	public function is_friend($friend_id){ 
		if(isset($friend_id)){
            $user_id = $this->session->userdata('user_id');
             
            $this->db->from('friends');
            $this->db->where('user_id',$user_id);
            $this->db->where('friend_id',$friend_id);
            //$this->db->where('user_id', $friend_id);
            $res = $this->db->count_all_results('');
         
            if($res) //1
             return true; //friend
 
            else return false;
             
        } 
    }

    public function homeFriends($friend_id){
    	
            $user_id = $this->session->userdata('user_id');
             
            $this->db->from('friends');
            $this->db->where('user_id',$user_id);
            $this->db->where('friend_id',$friend_id);
            //$this->db->where('user_id', $friend_id);
            $res = $this->db->count_all_results('');
         
            if($res) //1
             return true; //friend
 
            else return false;
             
         
             
        

    }

    public function trueFriends($friend_id){ 
		
           if(isset($friend_id)){
            $user_id = $this->session->userdata('user_id');
             
            $this->db->from('friends');
            $this->db->where('user_id',$user_id);
            $this->db->where('friend_id',$friend_id);
            //$this->db->where('user_id', $friend_id);
            $res = $this->db->count_all_results('');
         
            if($res) //1
             return true; //friend
 
            else return false;
        }
             
        
    }

        public function following($user_id){
        	$this->db->where('user_id',$user_id);
    		$data = $this->db->get('friends');
    		if($data->num_rows() > 0)
    		{
       			return $data;
    		} 
    		else 
    		{
      		 $data = array();
      		 return $data;
        }  	
}


	public function update_profile($user_id, $data)
		{
		
			$this->db->where('user_id', $user_id);
			$this->db->update('users', $data);
		}

	

}

?>