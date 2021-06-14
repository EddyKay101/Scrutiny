<?php
	class Ump3_model extends CI_Model{
		public function __construct(){
			 $this->tableName = 'user_tracks';
			$this->load->database();
			

		}

			public function get_tracks($user_id = null){
				$session = $this->session->userdata('user_id');
				$this->db->select('*');
				$this->db->from('user_tracks');
				$this->db->join('users', 'users.user_id = user_tracks.user_id');
				$this->db->where(array('user_tracks.user_id' => $session));
				$query = $this->db->get();				
				return $query->result_array();
		}


		public function get_viewy_track($user_id = null){
				$view = $this->uri->segment(2) ;
				$this->db->select('*');
				$this->db->from('user_tracks');
				$this->db->join('users', 'users.user_id = user_tracks.user_id');
				$this->db->where(array('user_tracks.user_id' => $view));
				$query = $this->db->get();				
				return $query->result_array();
		}


		 public function upload_track($data = array()){
      
        $insert = $this->db->insert($this->tableName,$data);
        if($insert){
            return $this->db->insert_id();

        }else{
            return false;    
        }
    }



		public function delete_track($utrack_id){
		$image_file_name = $this->db->select('location')->get_where('user_tracks', array('utrack_id' => $utrack_id))->row()->location;
		$cwd = getcwd(); // save the current working directory
		$image_file_path = $cwd."\\public\\img\\";
		chdir($image_file_path);
		unlink($image_file_name);
		chdir($cwd); // Restore the previous working directory
		$this->db->where('utrack_id', $utrack_id);
		$this->db->delete('user_tracks');
		return true;
	}
		public function update_track($utrack_id, $data)
		{
		
			$this->db->where('utrack_id', $utrack_id);
			$this->db->update('user_tracks', $data);
		}

		public function contentDownloadable(){
			$session = $this->session->userdata('user_id');
			$this->db->set('downloadable', 'true');
			$this->db->where('user_id', $session);
			$this->db->update('user_tracks');
		
		}

		public function falseDownloadable(){
			$session = $this->session->userdata('user_id');
			$this->db->set('downloadable', 'false');
			$this->db->where('user_id', $session);
			$this->db->update('user_tracks');
		
		}

		// public function contentDownloadable($stat){
  //     $session = $this->session->userdata('user_id');
   

  //     $query = "UPDATE user_tracks SET downloadable = 'true' WHERE user_id = $session";

  //     $result = $this->db->query($query, array($stat));

  //     return $result;

   
    
  //   }

  //   public function falseDownloadable($stat){
  //     $session = $this->session->userdata('user_id');
   

  //     $query = "UPDATE user_tracks SET downloadable = 'false' WHERE user_id = $session";

  //     $result = $this->db->query($query, array($stat));

  //     return $result;

   
    
  //   }


	


}

?>