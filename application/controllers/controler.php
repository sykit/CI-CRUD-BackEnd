<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class controler extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('model'); // Load model ke controller ini
  }
  
  public function index(){
    $data['home'] = $this->model->view();
    $this->load->view('home', $data);
  }
  
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->model->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->model->save(); // Panggil fungsi save() yang ada di model.php
        redirect('home');
      }
    }
    
    $this->load->view('home/form_tambah');
  }
  
}