<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class add_data extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('model');
    }

    public function index() {
        $this->load->view('add_data');
    }

    public function add() {
        if ($this->input->post('submit')) {
            $this->model->save(); // Panggil fungsi save() yang ada di model.php
        }

        redirect('view_data');
    }

}
