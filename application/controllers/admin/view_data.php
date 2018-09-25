<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class view_data extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/model');
    }

    public function index() {
        $data['get_data'] = $this->model->view_data();
        $this->load->view('admin/view_data', $data);
    }

    public function edit($id) {
        if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
//      if($this->model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
            $this->model->edit($id); // Panggil fungsi edit() yang ada di model.php
            redirect('admin/view_data');
//      }
        }

        $data['get_data'] = $this->model->view_by($id);
        $this->load->view('admin/edit_data', $data);
    }

    public function delete($id) {
        $this->model->delete($id);
        redirect('admin/view_data');

    }

}
