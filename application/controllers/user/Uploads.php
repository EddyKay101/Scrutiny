<?php
ob_start();
class uploads extends CI_Controller
{
        function __construct(){
                parent::__construct();
                $this->load->model('Music_model');
                $this->load->model('Ump3_model');
                $this->load->helper(array('form', 'url'));
                $this->load->helper('file');
                $this->load->model('User_model');
                $this->load->model('Notification_model');
                $this->load->model('Chats_model');
                $this->load->model('Mp3_model');
                $this->load->model('Timeline_model');

        }



public function index($user_id = null)
        {
                if(!$this->session->userdata('username')) {
                redirect('user/login');
                }
                
                $user_id = $this->session->userdata('user_id');
                $data['user_id'] = $this->session->userdata('user_id');
                $data['pic'] = $this->User_model->get_users($user_id);
                $data['notification_count'] =$this->Notification_model->get_notification($user_id);
                $data['notification'] = $this->Notification_model->get_notification_count($user_id);
                $data['status'] =  "read";
                $data['entries'] = $this->Music_model->get_entries();
                $data['title'] = 'Dashboard';
                $data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);
                $data['subtitle'] = 'Music Entries';
                
                $data['tracks'] = $this->Mp3_model->get_tracks();
                $this->load->view('user/templates/header_view_subpage', $data);
                $this->load->view('user/user_upload_view', $data);
                
                $this->load->view('user/templates/footer_view');
                
        }
        
        public function insert(){
                 if(!$this->session->userdata('username')) {
                redirect('user/login');
                }
                
                 $user_id = $this->session->userdata('user_id');
                $data['user_id'] = $this->session->userdata('user_id');
                $data['pic'] = $this->User_model->get_users($user_id);
                $data['notification_count'] =$this->Notification_model->get_notification($user_id);
                $data['notification'] = $this->Notification_model->get_notification_count($user_id);
                $data['status'] =  "read";
                $data['entries'] = $this->Music_model->get_entries();
                $data['title'] = 'Dashboard';
                $data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);
                $data['subtitle'] = 'Music Entries';
                $data['tracks'] = $this->Mp3_model->get_tracks();
                
                $this->load->view('user/templates/header_view_subpage', $data);
                $this->load->view('user/user_upload_view.php', $data);
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
                $config['upload_path'] = './public/user_tracks/';
                $config['allowed_types'] = 'mp3|wav|3gp|aa|aac|m4p|mpc|msv|ogg|oga|wma|wv';
                $config['max_size'] = '0';
            //max file name size
                $config['max_filename'] = '500';
                $config['file_name'] = $_FILES['usertrack']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('usertrack')){
                    $uploadTrack = $this->upload->data();
                    $track= $uploadTrack['file_name'];
                     $userData = array(
                    'user_id' => $this->session->userdata('user_id'),
                    'artist' => $this->input->post('artist'),
                    'title' => $this->input->post('title'),
                    'description' => $this->input->post('description'),  
                    'location' => $track,            
                    'art' => $picture               
            );
            
            //Pass user data to model
            $insertUserData = $this->Ump3_model->upload_track($userData);
            $insertToTimeline = $this->Timeline_model->insert_into_timeline_for_upload($user_id, "upload");
                    $this->load->view('user/upload_success', $data);
                }else{
                    $track = '';
                    $this->load->view('user/upload_error', $data);
                }
            }else{
                $track = '';
            }
            
            //Prepare array of user data
            
           

           
 
        
        $this->load->view('user/templates/footer_view', $data);
       
      //  redirect('user/uploads/');
    }
}



       /* public function delete($track_ids){

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
        }   */            
                
                
        
        

}

?>