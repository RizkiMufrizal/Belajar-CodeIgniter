<?php

/**
 *
 * @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Since Jan 24, 2016
 * @Time 6:12:20 PM
 * @Encoding UTF-8
 * @Project Belajar-CodeIgniter
 * @Package Expression package is undefined on line 12, column 15 in Templates/Scripting/PHPClass.php.
 * 
 */
class Karyawan extends CI_Model {

    public function getKaryawans($page, $size) {
        return $this->db->get('karyawan', $size, $page);
    }

    public function getCountKaryawan() {
        return $this->db->count_all_results('karyawan', FALSE);
    }

}
