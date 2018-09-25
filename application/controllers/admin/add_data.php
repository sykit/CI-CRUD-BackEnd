<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class add_data extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/model');
    }

    public function index() {
        $this->load->view('admin/add_data');
    }

    public function add() {
        if ($this->input->post('submit')) {
           $result =  $this->model->save(); // Panggil fungsi save() yang ada di model.php
            
        }
        $this->session->set_userdata('activity_message', $result);
        redirect('admin/view_data/');
    }

}
