<?php

/**
 *
 * @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Since Jan 24, 2016
 * @Time 6:17:04 PM
 * @Encoding UTF-8
 * @Project Belajar-CodeIgniter
 * @Package Expression package is undefined on line 12, column 15 in Templates/Scripting/PHPClass.php.
 * 
 */
require APPPATH . '/libraries/REST_Controller.php';

class KaryawanRestController extends REST_Controller {

    public function __construct($config = 'rest') {
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $this->load->model('Karyawan');
    }

    //ambil data karyawan get
    public function karyawans_get() {

        $page = $this->query('page');
        $size = $this->query('size');

        $response = array(
            'content' => $this->Karyawan->getKaryawans(($page - 1) * $size, $size)->result(),
            'totalPages' => ceil($this->Karyawan->getCountKaryawan() / $size)
        );

        $this->response($response, REST_Controller::HTTP_OK);
    }

    //ambil data karyawan get
    public function karyawan_get() {

        $key = $this->query('key');
        $value = $this->query('value');

        $response = array(
            'content' => $this->Karyawan->getKaryawan($key, $value)->result()
        );

        $this->response($response, REST_Controller::HTTP_OK);
    }

    //simpan data karyawan post
    public function karyawan_post() {
        $karyawan = [
            'nama' => $this->post('nama'),
            'jenisKelamin' => $this->post('jenisKelamin'),
            'tanggalLahir' => $this->post('tanggalLahir'),
            'alamat' => $this->post('alamat')
        ];
        $this->Karyawan->saveKaryawan($karyawan);

        $message = [
            'success' => TRUE,
            'info' => 'Data Karyawan Tersimpan'
        ];

        $this->set_response($message, REST_Controller::HTTP_CREATED);
    }

    //update data karyawan put
    public function karyawan_put() {
        $idKaryawan = $this->query('idKaryawan');
        $karyawan = array(
            'nama' => $this->put('nama'),
            'jenisKelamin' => $this->put('jenisKelamin'),
            'tanggalLahir' => $this->put('tanggalLahir'),
            'alamat' => $this->put('alamat')
        );

        $this->Karyawan->updateKaryawan($karyawan, $idKaryawan);

        $message = [
            'success' => TRUE,
            'info' => 'Data Karyawan berhasil di update'
        ];

        $this->set_response($message, REST_Controller::HTTP_OK);
    }

    //hapus data karyawan delete
    public function karyawan_delete() {
        $idKaryawan = $this->query('idKaryawan');

        $this->Karyawan->deleteKaryawan($idKaryawan);

        $message = [
            'success' => TRUE,
            'info' => 'Data Karyawan berhasil di hapus'
        ];

        $this->set_response($message, REST_Controller::HTTP_OK);
    }

}
