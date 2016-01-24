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

    public function getUserLogin($email, $password) {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->from('tb_user');
        return $this->db->count_all_results();
    }

}
