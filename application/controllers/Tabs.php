<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabs extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('Model_tabs');
        }

        public function index()
	{
                $data['menu']    = $this->Model_tabs->get_data();
		$this->load->view('tabs', $data);
	}
        
        public function detail($id)
	{
                $this->session->set_userdata('id', $id);
                $data['menu']       = $this->Model_tabs->get_menu($id);
                $data['nomer']      = $this->Model_tabs->get_nomer($id);
                $data['sub_menu']   = $this->Model_tabs->get_sub_menu($id);
//                echo "<pre>";
//                print_r($data);
//                echo "</pre>";
//                die();
		$this->load->view('tabs', $data);
	}
        
        /** Fungsi simpan data menu dan transaksi */
        public function add_data()
        {
            $id         = $this->session->userdata('id');
            $content    = $this->input->post('data');
            $no         = $this->input->post('no');
            $form_data  = array
                (
                        'id_tabs'   => $id,
                        'content'   => $content,
                        'nomer'     => $no
                );
//                print_r($form_data);
//                echo "</br>";
//                print_r($form_data['menu']);
//                echo "<br>";
//                print_r($form_data['content']);
//                die();
            $this->Model_tabs->add_data($form_data);
            redirect(site_url('tabs/detail/'.$id), 'refresh');
        }
}
