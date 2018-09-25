<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login_model extends CI_Model {

    function cek_login($table, $where) {
        return $this->db->get_where($table, $where);
    }

    function daftar($table, $where) {
        return $this->db->insert($table, $where);
    }

}
