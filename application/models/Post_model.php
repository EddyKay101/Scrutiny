<?php
	class Post_model extends CI_Model{
		public function __construct(){
			 $this->tableName = 'posts';
			 $this->tableName = 'users';
			 $this->tableName = 'post_comment';
			$this->load->database();
			

		}
			public function create_post($data){
				if(!empty($this->input->post('content'))){
			if($this->session->userdata('user_id')){
			$data = array(
				
				'user_id' => $this->session->userdata('user_id'),
				'entry_text' => $this->input->post('content')
			);
			return $this->db->insert('posts', $data);
		}
	}
	
		
			

		}

	// 	public function create_post($data){
	// 	$this->db->insert('posts', $data);
	// 	return $this->db->insert_id();
	// }

		public function get_user_posts(){
			$session = $this->session->userdata('user_id');
			$this->db->select('*');
			$this->db->from('posts');
			//$this->db->join('post_comment', 'posts.post_id = post_comment.post_id');
			$this->db->join('users', 'users.user_id = posts.user_id');
			$this->db->where(array('users.user_id' => $session));

			//$this->db->where(array('posts.post_id' => 1));
			$this->db->order_by('date_created', 'DESC');
 			$query = $this->db->get();	
			
			return $query->result_array();
			
		}

		public function get_post_for_viewer(){
			$segment = $this->uri->segment(2);
			$this->db->select('*');
			$this->db->from('posts');
			//$this->db->join('post_comment', 'posts.post_id = post_comment.post_id');
			$this->db->join('users', 'users.user_id = posts.user_id');
			$this->db->where(array('users.user_id' => $segment));

			//$this->db->where(array('posts.post_id' => 1));
			$this->db->order_by('date_created', 'DESC');
 			$query = $this->db->get();	
			
			return $query->result_array();
			
		}

		public function get_comments(){
  
	  		$this->db->select('*');
	  		$this->db->from('post_comment');
	  		$this->db->join('posts', 'posts.post_id = post_comment.post_id');
	  		$this->db->join('users', 'users.user_id = post_comment.author');
	  		//$this->db->where(array('posts.post_id' => 1));
	  		$query = $this->db->get();
	  		return $query->result_array();
}

		public function create_comment($post_id){
			if($this->session->userdata('user_id')){
			$data = array(
				'post_id' => $post_id,
				
				'author' => $this->session->userdata('user_id'),
				'txt' => $this->input->post('txt')
			);
			return $this->db->insert('post_comment', $data);
		}
		
			

		}
	}
	