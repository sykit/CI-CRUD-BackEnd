<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class home extends CI_Model {

    // Fungsi untuk menampilkan semua data belajar
    public function view() {
        return $this->db->get('home')->row();
    }
    
    public function edit($id) {
        $data = array(
            "title" => $this->input->post('title'),
            "content" => $this->input->post('content'),
        );

        $this->db->where('id', $id);
        $this->db->update('home', $data); // Untuk mengeksekusi perintah update data
    }

    // Fungsi untuk menampilkan data belajar berdasarkan NIS nya
   
}
