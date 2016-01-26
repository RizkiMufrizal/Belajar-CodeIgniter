<?php

/**
 *
 * @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Since Jan 26, 2016
 * @Time 9:58:47 AM
 * @Encoding UTF-8
 * @Project Belajar-CodeIgniter
 * @Package Expression package is undefined on line 12, column 15 in Templates/Scripting/PHPClass.php.
 * 
 */
class Barang extends CI_Model {

    public function getBarang($num, $offset) {
        return $this->db->get('tb_barang', $num, $offset);
    }

    public function getRowBarang() {
        return $this->db->get('tb_barang')->num_rows();
    }

    public function saveBarang($dataBarang) {
        $val = array(
            'idBarang' => $this->uuid->v4(),
            'namaBarang' => $dataBarang['namaBarang'],
            'jenisBarang' => $dataBarang['jenisBarang'],
            'gambar' => $dataBarang['gambar'],
            'tanggalKadaluarsa' => $dataBarang['tanggalKadaluarsa']
        );
        $this->db->insert('tb_barang', $val);
    }

}
