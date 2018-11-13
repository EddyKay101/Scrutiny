<?php
	class Post_Comment_model extends CI_Model{
		public function __construct(){
			$this->tableName = 'post_comment';
			$this->tableName = 'posts';
			$this->tableName = 'users';
			$this->load->database();
		}
		public function create_comment($postid){
			if($this->session->userdata('user_id')){
			$data = array(
				'post_id' => $post_id,
				'author' => $this->session->userdata('username'),
				'txt' => $this->input->post('txt')
			);
			return $this->db->insert('post_comment', $data);
		}
		else{
			$data = array(
				'post_id' => $post_id,
				'author' => $this->input->post('author'),
				'txt' => $this->input->post('txt')
			);
			return $this->db->insert('post_comment', $data);

		}
	}
		public function get_comments(){
			//$session = $this->session->userdata('user_id');
			$this->db->select('*');
			$this->db->from('post_comment');
			$this->db->join('posts', 'posts.post_id = post_comment.post_id');
			$this->db->join('users', 'users.user_id = post_comment.author');
			//$this->db->group_by('posts.post_id');
			$this->db->where(array('post_comment.post_id' => 'posts.post_id'));
 			
			$query = $this->db->get();	
			return $query->result_array();
		}
		/*public function get_comments($post_id){
		$query = $this->db->get_where('post_comment', array('post_id' => $post_id));
			return $query->result_array();
		}*/

	
		
	}