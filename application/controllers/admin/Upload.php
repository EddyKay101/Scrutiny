<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('admin/templates/header_view');
                $this->load->view('admin/upload_form', array('error' => ' ' ));
                $this->load->view('admin/templates/footer_view');
        }

        public function do_upload()
        {
                $this->load->view('admin/templates/header_view');
                $config['upload_path']          = './public/img';
                $config['allowed_types']        = 'gif|jpg|png|svg';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('fileField'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admin/upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        
                        $this->load->view('upload_success', $data);
                        
                }
                $this->load->view('admin/templates/footer_view');
        }
}
?>