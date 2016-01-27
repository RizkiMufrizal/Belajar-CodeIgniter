<?php

/**
 *
 * @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Since Jan 24, 2016
 * @Time 7:16:01 PM
 * @Encoding UTF-8
 * @Project Belajar-CodeIgniter
 * @Package Expression package is undefined on line 12, column 15 in Templates/Scripting/PHPClass.php.
 * 
 */
class User extends CI_Model {

    public function getUserLogin($email) {
        $this->db->where('email', $email);
        $this->db->select('password');
        return $this->db->get('tb_user');
    }

    public function saveUser($dataUser) {
        $val = array(
            'email' => $dataUser['email'],
            'nama' => $dataUser['nama'],
            'password' => $dataUser['password'],
            'enable' => TRUE,
            'role' => 'ROLE_ADMIN'
        );
        $this->db->insert('tb_user', $val);
    }

}
