<?php
	class Artist_model extends CI_Model{
		public function __construct(){
			 $this->tableName = 'selection';
			$this->load->database();
		}


			public function get_entries($slug = FALSE){
			//Chaeck for the slug
			if($slug === FALSE){
				$this->db->order_by('date_created', 'DESC');
				$query = $this->db->get('selection');
				return $query->result_array();
			}
			$query = $this->db->get_where('selection', array('entry_id' => $slug));
			return $query->row_array();
		}

		public function getlimit_entries($slug = FALSE){
			if($slug === FALSE){
				$this->db->limit(3);

				$this->db->order_by('date_created', 'DESC');
				$query = $this->db->get('selection');
				return $query->result_array();
			}
			$query = $this->db->get_where('selection', array('entry_id' => $slug));
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
		$image_file_name = $this->db->select('media_img')->get_where('selection', array('entry_id' => $entry_id))->row()->media_img;
		$cwd = getcwd(); // save the current working directory
		$image_file_path = $cwd."\\public\\img\\";
		chdir($image_file_path);
		unlink($image_file_name);
		chdir($cwd); // Restore the previous working directory
		$this->db->where('entry_id', $entry_id);
		$this->db->delete('selection');
		return true;
	}
		public function update_entry($entry_id, $data)
		{
			$this->db->where('entry_id', $entry_id);
			$this->db->update('selection', $data);
		}
}

?>