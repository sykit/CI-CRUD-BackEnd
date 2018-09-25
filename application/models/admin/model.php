<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class model extends CI_Model {

    // Fungsi untuk menampilkan semua data belajar
    public function view() {
        return $this->db->get('home')->result();
    }

    // Fungsi untuk menampilkan data belajar berdasarkan NIS nya
    public function view_by($id) {
        $this->db->where('id', $id);
        return $this->db->get('users')->row();
    }

    public function view_data() {
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get('users');
        return $query->result();
    }

    // Fungsi untuk validasi form tambah dan ubah
    public function validation($mode) {
        $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
        // Tambahkan if apakah $mode save atau update
        // Karena ketika update, NIS tidak harus divalidasi
        // Jadi NIS di validasi hanya ketika menambah data belajar saja
        if ($mode == "save")
            $this->form_validation->set_rules('input_nis', 'NIS', 'required|numeric|max_length[11]');

        $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
        $this->form_validation->set_rules('input_jeniskelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('input_telp', 'telp', 'required|numeric|max_length[15]');
        $this->form_validation->set_rules('input_alamat', 'Alamat', 'required');

        if ($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }

    // Fungsi untuk melakukan simpan data ke tabel belajar
    public function save() {
        $data = array(
            "full_name" => $this->input->post('full_name'),
            "birth_place" => $this->input->post('birth_place'),
            "birth_date" => $this->input->post('birth_date'),
            "gender" => $this->input->post('gender'),
            "address" => $this->input->post('address')
        );

//        $this->db->insert('users', $data); // Untuk mengeksekusi perintah insert data
        $return_message = 'Penambahan Data Sukses';
        if (!$this->db->insert('users', $data)) {
            $this->session->set_userdata('activity_status', 'Failed');
            $error = $this->db->error(); // Has keys 'code' and 'message'
            $return_message =  'Error '.$error['code'].' : '.$error['message'] ; // Has keys 'code' and 'message'
        }else{
            $this->session->set_userdata('activity_status', 'Successful');
        }
        return $return_message;
    }

    // Fungsi untuk melakukan ubah data belajar berdasarkan NIS belajar
    public function edit($id) {
        $data = array(
            "full_name" => $this->input->post('full_name'),
            "birth_place" => $this->input->post('birth_place'),
            "birth_date" => $this->input->post('birth_date'),
            "gender" => $this->input->post('gender'),
            "address" => $this->input->post('address')
        );

        $this->db->where('id', $id);
//        $this->db->update('users', $data); // Untuk mengeksekusi perintah update data
        $return_message = 'Perubahan Data Sukses';
        if (!$this->db->update('users', $data)) {
            $this->session->set_userdata('activity_status', 'Failed');
            $error = $this->db->error(); // Has keys 'code' and 'message'
            $return_message =  'Error '.$error['code'].' : '.$error['message'] ; // Has keys 'code' and 'message'
        }else{
            $this->session->set_userdata('activity_status', 'Successful');
        }
        return $return_message;
    }

    // Fungsi untuk melakukan menghapus data belajar berdasarkan NIS belajar
    public function delete($id) {
        $this->db->where('id', $id);
//        $this->db->delete('users'); // Untuk mengeksekusi perintah delete data
        $return_message = 'Hapus Data Sukses';
        if (!$this->db->delete('users')) {
            $this->session->set_userdata('activity_status', 'Failed');
            $error = $this->db->error(); // Has keys 'code' and 'message'
            $return_message =  'Error '.$error['code'].' : '.$error['message'] ; // Has keys 'code' and 'message'
        }else{
            $this->session->set_userdata('activity_status', 'Successful');
        }
        return $return_message;
    }

}
