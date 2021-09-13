<?php
class LoginModel extends CI_model {
    public function login($email, $password)
    {
        return $this->db->get_where('tb_user', array('email' => $email, 'password' => $password))->row_array();
    }

    public function daftar($data)
    {
        return $this->db->insert('tb_user',$data);
    }
}