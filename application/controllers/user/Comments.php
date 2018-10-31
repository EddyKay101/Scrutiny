
<?php
ob_start();
	class Comments extends CI_Controller{

		function __construct(){
		parent::__construct();
		$this->load->model('Music_model');
		$this->load->model('Video_model');
		$this->load->model('Comment_model');
	

		}
		public function create($entry_id){
			$id = $this->input->post('id');
			$data['entry'] = $this->Music_model->get_entries($id);
			//$this->form_validation->set_rules('author', 'Author', 'required');
			$this->form_validation->set_rules('txt', 'Txt', 'required');
			if($this->form_validation->run() === FALSE){
				
				$this->load->view('user/music_entry_view', $data);
				
			} else {
				$this->Comment_model->create_comment($entry_id);
				redirect('reviews/'.$id);

			}
		}


		public function create_vid($video_id){
			$id = $this->input->post('id');
			$data['video'] = $this->Video_model->get_entries($id);
			//$this->form_validation->set_rules('author', 'Author', 'required');
			$this->form_validation->set_rules('txt', 'Txt', 'required');
			if($this->form_validation->run() === FALSE){
				
				$this->load->view('user/video_entry_view', $data);
				
			} else {
				$this->Comment_model->create_video_comment($video_id);
				redirect('videos/'.$id);
				
			}
		}
	}
	?>
	