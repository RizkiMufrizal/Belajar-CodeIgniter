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
        return $this->db->get('tb_karyawan', $size, $page);
    }

    public function getKaryawan($key, $value) {
        $this->db->where("$key", $value);
        return $this->db->get('tb_karyawan');
    }

    public function getCountKaryawan() {
        return $this->db->count_all_results('tb_karyawan', FALSE);
    }

    public function saveKaryawan($dataKaryawan) {
        $val = array(
            'idKaryawan' => $this->uuid->v4(),
            'nama' => $dataKaryawan['nama'],
            'jenisKelamin' => $dataKaryawan['jenisKelamin'],
            'tanggalLahir' => $dataKaryawan['tanggalLahir'],
            'alamat' => $dataKaryawan['alamat']
        );
        $this->db->insert('tb_karyawan', $val);
    }

    public function updateKaryawan($dataKaryawan, $idKaryawan) {
        $val = array(
            'nama' => $dataKaryawan['nama'],
            'jenisKelamin' => $dataKaryawan['jenisKelamin'],
            'tanggalLahir' => $dataKaryawan['tanggalLahir'],
            'alamat' => $dataKaryawan['alamat']
        );
        $this->db->where('idKaryawan', $idKaryawan);
        $this->db->update('tb_karyawan', $val);
    }

    public function deleteKaryawan($idKaryawan) {
        $val = array(
            'idKaryawan' => $idKaryawan
        );
        $this->db->delete('tb_karyawan', $val);
    }

}
