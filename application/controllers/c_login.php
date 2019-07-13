<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_login');
    }

    function index() {
        $this->load->view('v_login');
    }

    function aksi_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->m_login->cek_login("admin", $where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("c_adm_utama"));
        } else {
            echo '<script> alert("Username atau Password tidak ditemukan! coba lagi.") </script>';
            echo '<script language="JavaScript"> window.location.href ="./" </script>';
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url('index.php/c_login'));
    }

}

/* End of file c_login.php */
/* Location: ./application/controllers/c_login.php */