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
            $this->load->view('user/LoginView');
        } else {
            redirect('admin');
        }
    }

    public function loginProcess() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->User->getUserLogin($email)->result();

        if ($this->bcrypt->check_password($password, $user[0]->password)) {
            $this->session->set_userdata(array(
                'isLogin' => TRUE,
                'username' => $email
            ));
            redirect('admin');
        } else {
            redirect('login');
        }
    }

    public function LogoutProcess() {
        $this->session->unset_userdata(array('isLogin', 'username'));
        redirect('login');
    }

    public function newSignUp() {
        $this->load->view('user/SignUpView');
    }

    public function signUpProcess() {
        $data = array(
            'email' => $this->input->post('email'),
            'nama' => $this->input->post('nama'),
            'password' => $this->bcrypt->hash_password($this->input->post('password'))
        );
        $this->User->saveUser($data);
        redirect('login');
    }

}
