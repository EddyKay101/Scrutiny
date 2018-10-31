<?php
	class Music_model extends CI_Model{
		public function __construct(){
			 $this->tableName = 'entry';
			$this->load->database();
			

		}

		/*public function get_entries(){
			$this->db->order_by('date_created', 'DESC');
			$query = $this->db->get('entry');
			return $query->result_array();
		}*/

			public function get_entries($slug = FALSE){
			//Chaeck for the slug
			if($slug === FALSE){
				$this->db->order_by('date_created', 'DESC');
				$query = $this->db->get('entry');
				return $query->result_array();
			}
			$query = $this->db->get_where('entry', array('entry_id' => $slug));
			return $query->row_array();
		}

		public function countMusicEntries($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by('date_created', 'DESC');
				$query = $this->db->get('entry');
				return $query->result_array();
			}
			$query = $this->db->get_where('comment', array('entry_id' => $slug));
      return $query->num_rows();
		}

		public function getlimit_entries($slug = FALSE){
			if($slug === FALSE){
				$this->db->limit(6);

				$this->db->order_by('date_created', 'DESC');
				$query = $this->db->get('entry');
				return $query->result_array();
			}
			$query = $this->db->get_where('entry', array('entry_id' => $slug));
			return $query->row_array();
		}

		 public function create_entry($data = array()){
      
        $insert = $this->db->insert($this->tableName,$data);
        if($insert){
            return $this->db->insert_id();

        }else{
            return false;    
        }
    }



		public function delete_entry($entry_id){
		$image_file_name = $this->db->select('media_img')->get_where('entry', array('entry_id' => $entry_id))->row()->media_img;
		$cwd = getcwd(); // save the current working directory
		$image_file_path = $cwd."\\public\\img\\";
		chdir($image_file_path);
		unlink($image_file_name);
		chdir($cwd); // Restore the previous working directory
		$this->db->where('entry_id', $entry_id);
		$this->db->delete('entry');
		return true;
	}
		public function update_entry($entry_id, $data)
		{
		
			$this->db->where('entry_id', $entry_id);
			$this->db->update('entry', $data);
		}

	


}

?>