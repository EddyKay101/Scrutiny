<?php
	class Mp3_model extends CI_Model{
		public function __construct(){
			 $this->tableName = 'tracks';
			$this->load->database();
			

		}

			public function get_tracks($title = FALSE){
			//Chaeck for the slug
			if($title === FALSE){
				$this->db->order_by('time', 'DESC');
				$query = $this->db->get('tracks');
				return $query->result_array();
			}
			$query = $this->db->get_where('tracks', array('track_id' => $title));
			return $query->row_array();
		}


		 public function upload_track($data = array()){
      
        $insert = $this->db->insert($this->tableName,$data);
        if($insert){
            return $this->db->insert_id();

        }else{
            return false;    
        }
    }



		public function delete_track($track_id){
		$image_file_name = $this->db->select('location')->get_where('tracks', array('track_id' => $track_id))->row()->location;
		$cwd = getcwd(); // save the current working directory
		$image_file_path = $cwd."\\public\\img\\";
		chdir($image_file_path);
		unlink($image_file_name);
		chdir($cwd); // Restore the previous working directory
		$this->db->where('track_id', $track_id);
		$this->db->delete('tracks');
		return true;
	}
		public function update_track($track_id, $data)
		{
		
			$this->db->where('track_id', $track_id);
			$this->db->update('tracks', $data);
		}

		
	


}

?>