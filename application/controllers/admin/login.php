<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->model('admin/login_model');
    }

    function index() {
        $this->load->view('admin/login');
    }

    function aksi_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => sha1(md5($password))
        );
//        $cek = $this->login_model->daftar("admin", $where);
        $cek = $this->login_model->cek_login("admin", $where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'nama' => $username,
                'status' => "connected",
                'message' => ""
            );

            $this->session->set_userdata($data_session);

            redirect('admin/');
        } else {
            $data['status'] = "Username dan password salah !";
            $this->load->view('admin/login', $data);
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('admin/login');
    }

}
