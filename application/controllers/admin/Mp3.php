<?php
class Mp3 extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Music_model');
		$this->load->model('Mp3_model');
		$this->load->helper(array('form', 'url'));
		$this->load->helper('file');

	}


	
	public function insert(){
		$this->load->view('admin/templates/header_view');
		$this->load->view('mp3/insert');
		   if($this->input->post('submit')){
            
            //Check whether user upload picture
            if(!empty($_FILES['userfile']['name'])){
                $config['upload_path'] = './public/images/album/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|svg';
                $config['file_name'] = $_FILES['userfile']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('userfile')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }

            if(!empty($_FILES['usertrack']['name'])){
                $config['upload_path'] = './public/tracks/';
                $config['allowed_types'] = 'mp3|wav|3gp|aa|aac|mp4|mpc|msv|ogg|oga|wma|wv|mpeg|mpga|mp2';
                 $config['max_size'] = '0';
                 $config['overwrite'] = 'TRUE';
            //max file name size
            	//$config['max_filename'] = '500';
                $config['file_name'] = $_FILES['usertrack']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('usertrack')){
                    $uploadTrack = $this->upload->data();
                    $track= $uploadTrack['file_name'];
                }else{
                    $track = '';
                }
            }else{
                $track = '';
            }
            
            //Prepare array of user data
            
            $userData = array(
                'title' => $this->input->post('title'),
                'artist' => $this->input->post('artist'),
                'description' => $this->input->post('description'),              
                'art' => $picture,
                'location' => $track
            );
            
            //Pass user data to model
            $insertUserData = $this->Mp3_model->upload_track($userData);
 
        
        $this->load->view('admin/templates/footer_view');
        redirect('admin/mp3/insert');
    }
}



	public function delete($track_ids){

		$this->Mp3_model->delete_entry($track_ids);
		redirect('admin/mp3');
	}

	public function edit($title){
		
		$data['tracks'] = $this->Mp3_model->get_tracks($title);
			
		
		if(empty($data['tracks'])){
				show_404();
			}
		$data['title'] = 'Edit Entry';
		$this->load->view('admin/templates/header_view');
		$this->load->view('mp3/edit', $data);
		$this->load->view('admin/templates/footer_view');
			
	}	
	
	public function update()
	{
		$id = $this->input->post('entry_id');

		if(!empty($_FILES['userfile']['name'])){
                $config['upload_path'] = './public/img/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|svg';
                $config['file_name'] = $_FILES['userfile']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('userfile')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
		 $slug = url_title($this->input->post('title'));
		$userData = array(
                 'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'entry_text' => $this->input->post('entry_text'),
                'art' => $picture
            );
            
            
            //Pass user data to model
         $this->Music_model->update_entry($id, $userData);
			redirect('admin/mp3');
	}		
		
		
	
	
	
	/*public function logout(){
		$this->session->sess_destroy();//because we are using session class
		//session_destroy();
		redirect('/');
	}*/

}

?>