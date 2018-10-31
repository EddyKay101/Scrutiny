<?php
class Pages extends CI_Controller{
	public function view($page = 'home_view'){
		//Check to see if a view exists of the page
		if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
			show_404();
		}
		//variable inside a data array called 'title' which represents the variable we want to pass into a view
		$data['title'] = ucfirst($page);//-->Have a capital letter to begin with
		
		
		$this->load->view('admin/templates/header_view');//This loads the header file
		$this->load->view('admin/'.$page, $data);//
		$this->load->view('admin/templates/footer_view');//This loads the footer file
		
	}
}
