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

    public function karyawans_get() {

        $page = $this->get('page');
        $size = $this->get('size');

        $response = array(
            'content' => $this->Karyawan->getKaryawans(($page - 1) * $size, $size)->result(),
            'totalPages' => ceil($this->Karyawan->getCountKaryawan() / $size));

        $this->response($response, REST_Controller::HTTP_OK);
    }

}
