<?php
ob_start();
class Notifications extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Notification_model');
		
		} 

		public function index($user_id = null)
		{
			$user_id = $this->session->userdata('user_id');
			$data['notifications'] = $this->Notification_model->get_notification($user_id);
			$data['notification_count'] = $this->Notification_model->get_notification_count($user_id);
			$data['status'] =  "read";
			$data['pic'] = $this->User_model->get_users($user_id);
			$this->load->view('user/templates/header_view_subpage', $data);	
			$this->load->view('user/notifications_view', $data);
			$this->load->view('user/templates/footer_view_subpage');
		}

			/*public function count($user_id = null)
		{
			$user_id = $this->session->userdata('user_id');
			
			$data['notification_count'] = $this->Notification_model->get_notification_count($user_id);
			$this->load->view('user/templates/header_view_subpage', $data);	
			$this->load->view('user/notifications_view', $data);
			$this->load->view('user/templates/footer_view_subpage');
		}*/


	}