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
//        $this->db->update('home', $data); // Untuk mengeksekusi perintah update data
        $return_message = 'Perubahan Home Sukses';
        if (!$this->db->update('home', $data)) {
            $this->session->set_userdata('activity_status', 'Failed');
            $error = $this->db->error(); // Has keys 'code' and 'message'
            $return_message = 'Error ' . $error['code'] . ' : ' . $error['message']; // Has keys 'code' and 'message'
        } else {
            $this->session->set_userdata('activity_status', 'Successful');
        }
        return $return_message;
    }

    // Fungsi untuk menampilkan data belajar berdasarkan NIS nya
}
