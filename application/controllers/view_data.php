<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class view_data extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('model');
    }

    public function index() {
        $data['get_data'] = $this->model->view_data();
        $this->load->view('view_data', $data);
    }

    public function edit($id) {
        if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
//      if($this->model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
            $this->model->edit($id); // Panggil fungsi edit() yang ada di model.php
            redirect('view_data');
//      }
        }

        $data['get_data'] = $this->model->view_by($id);
        $this->load->view('edit_data', $data);
    }

    public function delete($id) {
        $this->model->delete($id);
        redirect('view_data');

    }

}
