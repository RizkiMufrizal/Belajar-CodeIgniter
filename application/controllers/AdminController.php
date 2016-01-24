<?php

/**
 *
 * @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Since Jan 24, 2016
 * @Time 9:23:27 PM
 * @Encoding UTF-8
 * @Project Belajar-CodeIgniter
 * @Package Expression package is undefined on line 12, column 15 in Templates/Scripting/PHPClass.php.
 * 
 */
class AdminController extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $session = $this->session->userdata('isLogin');

        if ($session == FALSE) {
            redirect('login');
        } else {
            $this->load->view('admin/index');
        }
    }

}
