<?php
ob_start();
class User extends CI_Controller
{
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('User_model');
    }
    
    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');


        $result = $this->User_model->get_user([
            'email' => $email,
            'password' => hash('sha256', $password . SALT)
            
        ]);


                    
        
        $this->output->set_content_type('application_json');
        $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($result) {
            $this->session->set_userdata(['user_id' => $result[0]['user_id']]);
            $this->session->set_userdata(['email' => $result[0]['email']]);
            $this->session->set_userdata(['username' => $result[0]['username']]);
           //$this->session->set_userdata(['firstname' => $result[0]['firstname']]);
            //$this->session->set_userdata(['lastname' => $result[0]['lastname']]);
            //$this->session->set_userdata(['media_img' => $result[0]['media_img']]);
            
           //$this->session->set_userdata(['user_id' => $result['email']);
            
            $this->output->set_output(json_encode(['result' => 1]));
            //$this->output->set_output(json_encode(['result' => 2]));

            return false;
        }

        if ($result) {
            $this->session->set_userdata(['user_id' => $result[0]['user_id']]);
            $this->output->set_output(json_encode(['result' => 1]));
            return false;
        }

        $this->output->set_output(json_encode(['result' => 0]));
      

    }


    public function userLogin(){
        $login = $this->input->post('email');
        $password = $this->input->post('password');

        $result = $this->User_model->get([
            'email' => $login,
            'password' => hash('sha256', $password . SALT)
        ]);
        
        $this->output->set_content_type('application_json');
        
        if ($result) {
            $this->session->set_userdata(['user_id' => $result[0]['user_id']]);
            $this->output->set_output(json_encode(['result' => 1]));
            return false;
        }
        
        $this->output->set_output(json_encode(['result' => 0]));
    }


    
    public function register()
    {
        $this->output->set_content_type('application_json');
        $this->form_validation->set_rules('firstname', 'Firstname', 'required|min_length[4]|max_length[16]|is_unique[users.firstname]');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required|min_length[4]|max_length[16]|is_unique[users.lastname]');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[16]|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|max_length[16]|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'Confirm password', 'required|min_length[4]|max_length[16]');
        
        if ($this->form_validation->run() == false) {
            $this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
            return false;
        }
            
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('confirm_password');

        $user_id = $this->User_model->insert([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username' => $username,
            'password' => hash('sha256', $password . SALT),
            'email' => $email
           
        ]);
        
        if ($user_id) {
            $this->session->set_userdata(['user_id' => $user_id]);
            $this->output->set_output(json_encode(['result' => 1]));
            return false;
        }
        
        $this->output->set_output(json_encode(['result' => 0, 'error' => 'User not created.']));

    }




      
  

    
}