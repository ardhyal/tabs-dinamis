<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('Model_tabs');
        }

        public function index()
	{
                $data['menu']    = $this->Model_tabs->get_data();
		$this->load->view('master', $data);
	}
      
}
