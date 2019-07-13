<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->helper(array('form', 'url', 'html'));
    }

    function index() {
        $data['semua'] = $this->m_user->tampil_data_semua()->result();
        $data['working'] = $this->m_user->tampil_data_working()->result();

        $data['coffee'] = $this->m_user->tampil_data_coffee()->result();
        $data['public'] = $this->m_user->tampil_data_public()->result();
        $data['wifi'] = $this->m_user->tampil_data_wifi()->result();
        $data['library'] = $this->m_user->tampil_data_library()->result();

        $data['konten'] = 'user/data';
        $this->load->view('user_tmp', $data);
    }
    function home(){
        $data['dpd_kec'] = $this->m_user->get_data_kec();
        $data['semua'] = $this->m_user->tampil_data_semua_home()->result();
        $data['konten'] = 'home';
        $this->load->view('user_tmp', $data);   
    }
    function browse() {
        $data['user'] = $this->m_user->tampil_data_semua()->result();
        $data['dpd_kec'] = $this->m_user->get_data_kec();
        $data['konten'] = 'user/browse';
        $this->load->view('user_tmp', $data);
    } 
    function about(){ 
        $data['konten'] = 'about';
        $this->load->view('user_tmp', $data);        
    }
    function help(){ 
        $data['konten'] = 'help';
        $this->load->view('user_tmp', $data);
        
    }
    function cari() {
        $data['user'] = $this->m_user->caridata();
        //jika data yang dicari tidak ada maka akan keluar informasi 
        //bahwa data yang dicari tidak ada
        if ($data['user'] == null) {
            echo '<script> alert(" Data tidak ditemukan! coba lagi.") </script>';
            echo '<script language="JavaScript"> window.location.href ="browse" </script>';

        } else {
            $data['dpd_kec'] = $this->m_user->get_data_kec();
            $data['konten'] = 'user/browse';
            $this->load->view('user_tmp', $data);
        }
    }  
    function detail($id) {
        $data['dpd_kec'] = $this->m_user->get_data_kec();

        $where = array('id_utama' => $id);
        $where2= array('id_utama' => $id);
        $data['user'] = $this->m_user->detail($where, 'utama')->result();
        $data['gambar'] = $this->m_user->detail_gambar($where2, 'gambar')->result();
        $data['konten'] = 'user/detail';
        $this->load->view('user_tmp', $data);
    }
    function gallery($id) {
        $where = array('id_utama' => $id);
        $where2= array('id_utama' => $id);
        $data['user'] = $this->m_user->detail($where, 'utama')->result();
        $data['gambar'] = $this->m_user->detail_gambar($where2, 'gambar')->result();
        $data['konten'] = 'user/gallery';
        $this->load->view('user_tmp', $data);
    }
}

/* End of file c_login.php */
/* Location: ./application/controllers/c_login.php */