<?php
	class Video_model extends CI_Model{
		public function __construct(){
			 $this->tableName = 'video';
			$this->load->database();
			

		}

		/*public function get_entries(){
			$this->db->order_by('date_created', 'DESC');
			$query = $this->db->get('video');
			return $query->result_array();
		}*/

			public function get_entries($slug = FALSE){
			//Chaeck for the slug
			if($slug === FALSE){
				$this->db->order_by('date_created', 'DESC');
				$query = $this->db->get('video');
				return $query->result_array();
			}
			$query = $this->db->get_where('video', array('video_id' => $slug));
			return $query->row_array();
		}

		public function countVideoEntries($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by('date_created', 'DESC');
				$query = $this->db->get('video');
				return $query->result_array();
			}
			$query = $this->db->get_where('video_comment', array('video_id' => $slug));
      return $query->num_rows();
		}

		public function getlimit_entries($slug = FALSE){
			//Chaeck for the slug
			if($slug === FALSE){
				$this->db->limit(6);
				$this->db->order_by('date_created', 'DESC');
				$query = $this->db->get('video');
				return $query->result_array();
			}
			$query = $this->db->get_where('video', array('video_id' => $slug));
			return $query->row_array();
		}


		 public function create_video($data = array()){
      
        $insert = $this->db->insert($this->tableName,$data);
        if($insert){
            return $this->db->insert_id();

        }else{
            return false;    
        }
    }



		public function delete_video($video_id){
		$image_file_name = $this->db->select('media_img')->get_where('video', array('video_id' => $video_id))->row()->media_img;
		$cwd = getcwd(); // save the current working directory
		$image_file_path = $cwd."\\public\\img\\";
		chdir($image_file_path);
		unlink($image_file_name);
		chdir($cwd); // Restore the previous working directory
		$this->db->where('video_id', $video_id);
		$this->db->delete('video');
		return true;
	}
		public function update_video($video_id, $data)
		{
		
			$this->db->where('video_id', $video_id);
			$this->db->update('video', $data);
		}

		/*public function update_video($data, $video_id){
		$this->db->where(['video_id' => $video_id]);
		$this->db->update('video', $data);
		return;
		}*/


}

?>