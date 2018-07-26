<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
         $this->load->model('login');
    }

    function index() {
        $this->load->view('login');
    }

    function aksi_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => sha1(md5($password))
        );
        $cek = $this->login->daftar("admin", $where);
//        $cek = $this->login->cek_login("admin", $where)->num_rows();
//        if ($cek > 0) {
//
//            $data_session = array(
//                'nama' => $username,
//                'status' => "login"
//            );
//
//            $this->session->set_userdata($data_session);
//
//            redirect(base_url("admin"));
//        } else {
//            echo "Username dan password salah !";
//        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}
