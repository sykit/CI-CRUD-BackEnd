<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class controler extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        echo $this->session->userdata('status');
        if ($this->session->userdata('status') != "connected") {
            redirect("admin/login");
        }
        $this->load->model('admin/model'); // Load model ke controller ini
    }

    public function index() {
        $data['home'] = $this->model->view();
        $this->load->view('admin/home', $data);
    }

    public function tambah() {
        if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
            if ($this->model->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
                $this->model->save(); // Panggil fungsi save() yang ada di model.php
                redirect('admin/home');
            }
        }

        $this->load->view('admin/home/form_tambah');
    }

}
