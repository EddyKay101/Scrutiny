<?php
	class Comment_model extends CI_Model{
		public function __construct(){
			$this->tableName = 'comment';
			$this->tableName = 'video_comment';
			$this->load->database();
		}
		public function create_comment($entry_id){
			if($this->session->userdata('user_id')){
			$data = array(
				'entry_id' => $entry_id,
				//'author' => $this->input->post('author'),
				'author' => $this->session->userdata('firstname')." ".$this->session->userdata('lastname'),
				'txt' => $this->input->post('txt')
			);
			return $this->db->insert('comment', $data);
		}
		else{
			$data = array(
				'entry_id' => $entry_id,
				//'author' => $this->input->post('author'),
				'author' => $this->input->post('author'),
				'txt' => $this->input->post('txt')
			);
			return $this->db->insert('comment', $data);

		}
	}
		public function get_comments($entry_id){
			$query = $this->db->get_where('comment', array('entry_id' => $entry_id));
			return $query->result_array();
		}


		public function create_video_comment($video_id){
						if($this->session->userdata('user_id')){
			$data = array(
				'video_id' => $video_id,
				//'author' => $this->input->post('author'),
				'author' => $this->session->userdata('firstname')." ".$this->session->userdata('lastname'),
				'txt' => $this->input->post('txt')
			);
			return $this->db->insert('video_comment', $data);
		}
		else{
			$data = array(
				'video_id' => $video_id,
				//'author' => $this->input->post('author'),
				'author' => $this->input->post('author'),
				'txt' => $this->input->post('txt')
			);
			return $this->db->insert('video_comment', $data);

		}
	}
		public function get_vid_comments($video_id){
			$query = $this->db->get_where('video_comment', array('video_id' => $video_id));
			return $query->result_array();

		}
	}