<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class nameChat extends CI_Controller {
 
 
	public function index()
	{
		$this->load->view('user/templates/header_view_subpage');
		$this->load->view('chat');
		$this->load->view('user/templates/header_view_subpage');
	}
}
?>