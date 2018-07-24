<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class edit_home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('home');
    }

    public function index() {
//        if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
////      if($this->model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
//            $this->home->edit($id); // Panggil fungsi edit() yang ada di model.php
////            redirect();
////      }
//        }

        $data['home'] = $this->home->view();
        $this->load->view('edit_home', $data);
    }
    public function save($id) {
        if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
//      if($this->model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
            $this->home->edit($id); // Panggil fungsi edit() yang ada di model.php
            redirect('edit_home');
//      }
        }
//
//        $data['home'] = $this->home->view();
//        $this->load->view('edit_home', $data);
    }
    

}
