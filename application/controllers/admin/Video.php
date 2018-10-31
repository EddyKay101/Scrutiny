<?php
class Video extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Video_model');
		$this->load->helper(array('form', 'url'));
		$this->load->helper('file');

	}

	public function index()
	{
		$this->load->view('admin/templates/header_view');

		$data['entries'] = $this->Video_model->get_entries();
		$data['title'] = 'Dashboard';
		$data['subtitle'] = 'Video Entries';
		
		$this->load->view('admin/video_entries_view', $data);
		$this->load->view('admin/templates/footer_view');
	}
	
	public function insert(){
		$this->load->view('admin/templates/header_view');
		$this->load->view('videos/insert');
		   if($this->input->post('submit')){
            
            //Check whether user upload picture
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
            
            //Prepare array of user data
            $slug = url_title($this->input->post('title'));
            $userData = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'entry_text' => $this->input->post('entry_text'),
                'media_img' => $picture
            );
            
            //Pass user data to model
            $insertUserData = $this->Video_model->create_video($userData);
 
        
        $this->load->view('admin/templates/footer_view');
        redirect('admin/video');
    }
}



	public function delete($video_ids){

		$this->Video_model->delete_video($video_ids);
		redirect('admin/video');
	}

	public function edit($slug){
		
		$data['entries'] = $this->Video_model->get_entries($slug);
			
		
		if(empty($data['entries'])){
				show_404();
			}
		$data['title'] = 'Edit Entry';
		$this->load->view('admin/templates/header_view');
		$this->load->view('videos/edit', $data);
		$this->load->view('admin/templates/footer_view');
			
	}	
	
	public function update()
	{
		$id = $this->input->post('video_id');

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
                'slug' => $slug,
                'entry_text' => $this->input->post('entry_text'),
                'media_img' => $picture
            );
            
            
            //Pass user data to model
         $this->Video_model->update_video($id, $userData);
			redirect('admin/video');
	}		
		
		
	
	
	
	/*public function logout(){
		$this->session->sess_destroy();//because we are using session class
		//session_destroy();
		redirect('/');
	}*/

}

?>