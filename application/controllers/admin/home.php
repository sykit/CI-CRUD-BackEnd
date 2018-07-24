<?php
/**
 * ark Admin Panel for Codeigniter
 * Author: Abhishek R. Kaushik
 * downloaded from http://devzone.co.in
 *
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {
         if ($this->session->userdata('is_admin_login')) {
            redirect('admin/Agenda');
        } else {
        $this->load->view('admin/vwLogin');
        }
    }

     public function do_login() {

        if ($this->session->userdata('is_admin_login')) {
            redirect('admin/agenda');
        } else {
            $user = $_POST['username'];
            $password = $_POST['password'];

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/vwLogin');
            } else {

                $sql = "SELECT * FROM tbl_admin_users WHERE username = ? AND password = ?";
                $val = $this->db->query($sql,array($user ,$password ));

                if ($val->num_rows) {
                    foreach ($val->result_array() as $recs => $res) {
                        $this->session->set_userdata(array(
                            'id' => $res['id'],
                            'username' => $res['username'],
                            'email' => $res['email'],
                            'is_admin_login' => true,
                            'user_type' => $res['user_type']
                                )
                        );
                    }
                    $new_content = date("Y-m-d H:i:s");
                    $sql = "UPDATE `tbl_admin_users` set `last_login`='$new_content' where `username`='$user'";
                    $val2 = $this->db->query($sql,array($new_content ,$user));
                    redirect('admin/Agenda');
                } else {
                    $err['error'] = '<strong>Access Denied</strong> Invalid Username/Password';
                    $this->load->view('admin/vwLogin', $err);
                }
            }
        }
           }


    public function logout() {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('user_type');
        $this->session->unset_userdata('is_admin_login');
        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect('admin/home', 'refresh');
    }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
