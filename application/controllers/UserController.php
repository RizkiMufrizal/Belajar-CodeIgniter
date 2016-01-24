<?php

/**
 *
 * @Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Since Jan 24, 2016
 * @Time 7:18:28 PM
 * @Encoding UTF-8
 * @Project Belajar-CodeIgniter
 * @Package Expression package is undefined on line 12, column 15 in Templates/Scripting/PHPClass.php.
 * 
 */
class UserController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User');
    }

    function index() {
        $session = $this->session->userdata('isLogin');
        if ($session == FALSE) {
            $dataCsrf['csrf'] = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            );
            $this->load->view('user/LoginView', $dataCsrf);
        } else {
            redirect('admin/kuliner');
        }
    }

    public function loginProcess() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if ($this->User->getUserLogin($email, md5($password)) == 1) {
            $this->session->set_userdata(array(
                'isLogin' => TRUE,
                'username' => $email
            ));
            print_r('berhasil');
        } else {
            redirect('login');
        }
    }

}
