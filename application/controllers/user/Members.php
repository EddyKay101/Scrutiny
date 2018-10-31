<?php
ob_start();
	class Members extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Chats_model');
			$this->load->model('User_model');
			$this->load->model('Notification_model');
			$this->load->helper(array('form', 'url'));
			$this->load->helper('file');
			$this->load->model('Mp3_model');
			$this->load->model('Ump3_model');
			$this->load->model('Timeline_model');
			$this->load->model('Post_model');
			
		} 

		public function index($user_id = null)
		{
			$user_id = $this->session->userdata('user_id');
			$data['friends'] = $this->User_model->get_friends();
			$data['user_id'] = $this->session->userdata('user_id');
			$data['notification_count'] =$this->Notification_model->get_notification($user_id);
			$data['notification'] = $this->Notification_model->get_notification_count($user_id);
			$data['status'] =  "read";
			$data['read'] = "unread";
			$data['pic'] = $this->User_model->get_users($user_id);
			$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);	
			$data['members'] = $this->User_model->get_user();
			$data['status'] =  "read";
			$data['tracks'] = $this->Mp3_model->get_tracks();

			$this->load->view('user/templates/header_view_subpage', $data);	
			$this->load->view('user/members_view', $data);
			//$this->load->view('user/test_view', $data);
			$this->load->view('user/mp3_view', $data);
			$this->load->view('user/templates/footer_view_subpage');
		}


		public function view($user_id = NULL){
			//$user = $this->uri->segment(3);
			$data['friends'] = $this->User_model->get_friends();
			$data['user_id'] = $this->session->userdata('user_id');
			$user_ids = $this->session->userdata('user_id');
			$data['notification_count'] =$this->Notification_model->get_notification($user_id);
			$data['notification'] = $this->Notification_model->get_notification_count($user_id);
			$data['status'] =  "read";
			$data['pic'] = $this->User_model->get_users($user_ids);
			$data['read'] = "unread";
			$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);	
			$data['friend_id'] = $this->uri->segment(3);
			$data['members'] = $this->User_model->get_users($user_id);
			$data['friends'] = $this->User_model->get_friends();
			$data['following'] = $this->User_model->getFollowing($user_id);	
			$data['isfriend'] = $this->User_model->is_friend($user_id, $data['friend_id']); 
			$data['followers'] = $this->User_model->following($user_id); 
			$data['tracks'] = $this->Ump3_model->get_tracks();
			$data['count_tracks'] = count($data['tracks']);
			$data['viewy_track'] = $this->Ump3_model->get_viewy_track();
			$data['count_viewy_tracks'] = count($data['viewy_track']);
			$data['friends'] = $this->User_model->get_friends();
			$data['count_friends'] = count($data['friends']);
			$data['followers'] = $this->User_model->get_to_follow();
			$data['count_followers'] = count($data['followers']);
			$data['u_friends'] = $this->User_model->get_users_following();
			$data['u_count_friends'] = count($data['u_friends']);
			$data['u_followers'] = $this->User_model->u_get_to_follow();
			$data['u_count_followers'] = count($data['u_followers']);
			$post_id = $this->input->get_post('comms');
			$data['posts'] = $this->Post_model->get_user_posts();
			$data['viewer_posts'] = $this->Post_model->get_post_for_viewer();
			$data['post_comments'] = $this->Post_model->get_comments();
			$this->load->view('user/templates/header_view_subpage', $data);	
			if(!$user_id = $this->User_model->get_users($user_id))
			{
			  show_404();
			}
			else{
		
			
				
			$this->load->view('user/members_entry_view', $data);
			
			
			}
			$this->load->view('user/mp3_view', $data);
			$this->load->view('user/templates/footer_view_subpage');
		
			
		}

		public function create($post_id){
			$session = $this->session->userdata('user_id');	
			$segment =$this->input->post('seg');
			if(!empty($this->input->post('txt')) && $session)
			{
			//$user_id = $this->User_model->get_users($segment);
			$this->Post_model->create_comment($post_id);
			redirect('members/'.$segment);
			}
			else{
				redirect('members/'.$segment);
			}
			
		}

		public function create_post(){
			
			$id =$this->session->userdata('user_id');
			$toPost="$this->input->post('content')";
			$this->Post_model->create_post($toPost);
			redirect('members/'.$id);
		}


		


		public function follow(){
			$session = $this->session->userdata('user_id');		
				if ($session)
				{			
					$user_id = $this->session->userdata('user_id');
					$friend_id = $this->input->post('friend_id');
					$addFriend = $this->User_model->add_friend($user_id, $friend_id);
					$notify = $this->User_model->notify_on_follow($user_id, $friend_id, "follow", "unread");
					$timeline = $this->Timeline_model->insert_into_timeline($user_id, $friend_id, "follow");
					redirect('members/'.$friend_id);
				}
				else{
					redirect('user/login');
				}

		}

		public function unfollow(){
			$session = $this->session->userdata('user_id');
			if($session){
				$user_id = $this->session->userdata('user_id');
				$friend_id = $this->input->post('friend_id');
				$deleteFriend = $this->User_model->unFriend($user_id, $friend_id);
				redirect('members/'.$friend_id);
			}
			else{
					redirect('user/login');
				}
		}

		public function ajax_get_count(){
			echo $this->_count();

		}

		function _count($user_id = null)
		{	
			
				$user_id = $this->session->userdata('user_id');
				$data['notification_count'] = $this->Notification_model->get_notification($user_id);		
				return $data['notification_count']++;	
		}

		public function edit($username){
		$user_id = $this->session->userdata('user_id');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['notification_count'] =$this->Notification_model->get_notification($user_id);
		$data['notification'] = $this->Notification_model->get_notification_count($user_id);
		$data['status'] =  "read";
		$data['read'] = "unread";
		$data['chat_count'] = $this->Chats_model->get_chat_message_count($user_id);
		$data['members'] = $this->User_model->get_users($user_id);
		$data['pic'] = $this->User_model->get_users($user_id);
		

		if(empty($data['members'])){
				show_404();
			}
		$data['title'] = 'Edit Information';
		$this->load->view('user/templates/header_view_subpage', $data);
		$this->load->view('user/members/edit', $data);
		$this->load->view('user/templates/footer_view_subpage');
			
	}

	public function update()
	{

		$this->output->set_content_type('application_json');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|max_length[16]|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'Confirm password', 'required|min_length[4]|max_length[16]');
        if ($this->form_validation->run() == false) {
            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
            return false;
        }
		$id = $this->input->post('user_id');



		if(!empty($_FILES['userfile']['name'])){
                $config['upload_path'] = './public/user_img/';
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
        $url = $this->session->userdata('user_id');
		$password = $this->input->post('password');
		$userData = array(
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'facebook' => $this->input->post('facebook'),
                'twitter' => $this->input->post('twitter'),
                'instagram' => $this->input->post('instagram'),
                'Location' => $this->input->post('location'),
                'info' => $this->input->post('info'),
                'password' => hash('sha256', $password . SALT),
                
                'media_img' => $picture
            );
            
            
            //Pass user data to model
         $this->User_model->update_profile($id, $userData);
			redirect(site_url('members/'.$url));
	}	
		


	}


?>