<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_gambar extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_gambar');
        $this->load->helper(array('form', 'url', 'html','file'));

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("c_login"));
        }
    }

    function index() {
        $data['user'] = $this->m_gambar->tampil_data()->result();

        $data['konten'] = 'gambar/data';

        $this->load->view('template', $data);
    }

   function tambah() {
        $data['dpd_utama'] = $this->m_gambar->get_data_utama();
        $data['konten'] = 'gambar/tambah';
        $this->load->view('template', $data);
    }

    function proses_input() {
        //membuat konfigurasi
        $config = [
            'upload_path' => './assets/images/gambar/',
            'allowed_types' => 'jpg|png|jpeg',
            'max_size' => 10000, 'max_width' => 10000,
            'max_height' => 10000,
            'file_name' => 'gbr_child' . time()
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) { //jika gagal upload
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
            $this->load->view('c_gambar/tambah', $error);
        } else {
            //jika berhasil upload
            $file = $this->upload->data();
            //mengambil data di form
            $data = ['gbr' => $file['file_name'],
                'nama_gambar' => set_value('nama_gambar'),
                'id_utama' => set_value('id_utama')                
            ];
            $this->m_gambar->input($data); //memasukan data ke database
            redirect('c_gambar/tambah'); //mengalihkan halaman
        }
    }

    function ubah($id) {
        $data['dpd_utama'] = $this->m_gambar->get_data_utama();
        $data['user'] = $this->m_gambar->getid($id);

        $data['konten'] = 'gambar/ubah';
        $this->load->view('template', $data);
    }

     function proses_ubah($id) {
        $gambar = $this->m_gambar->gambar($id);
        if (isset($_FILES["userfile"]["name"])) {
            //membuat konfigurasi
            $config = [
                'upload_path' => './assets/images/gambar/',
                'allowed_types' => 'jpg|png|jpeg',
                'max_size' => 10000, 'max_width' => 10000,
                'max_height' => 10000,
                'file_name' => 'gbr_child' . time()
            ];
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) { //jika gagal upload
                $error = array('error' => $this->upload->display_errors()); //tampilkan error
                $this->load->view('update', $error);
            } else {
                //jika berhasil upload
                $file = $this->upload->data();
                //mengambil data di form
                $data = ['gbr' => $file['file_name']];
                unlink('assets/images/gambar/' . $gambar->gbr); //menghapus gambar yang lama
            }
        }
        $data['nama_gambar'] = set_value('nama_gambar');
        $data ['id_utama'] = set_value('id_utama');       
        $this->m_gambar->ubah($id, $data); //memasukan data ke database
        redirect('c_gambar'); //mengalihkan halaman
    }

    function hapus($id) {
        $gambar = $this->m_gambar->gambar($id);
        unlink('assets/images/gambar/' . $gambar->gbr);
        $this->m_gambar->hapus($id);
        redirect('c_gambar'); //mengalihkan halaman
    }
}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */
