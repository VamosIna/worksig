<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_adm_utama extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_adm_utama');
        $this->load->helper(array('form', 'url', 'html', 'file'));
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("c_login"));
        }
    }

    function index() {
        $data['user'] = $this->m_adm_utama->tampil_data()->result();
        $data['konten'] = 'data/data';
        $this->load->view('template', $data);
    }

    function tambah() {
        $data['dpd_kategori'] = $this->m_adm_utama->get_data_kategori();
        $data['dpd_kec'] = $this->m_adm_utama->get_data_kecamatan();
        $data['konten'] = 'data/tambah';
        $this->load->view('template', $data);
    }

    function proses_input() {
        //membuat konfigurasi
        $config = [
            'upload_path' => './assets/images/',
            'allowed_types' => 'jpg|png|jpeg',
            'max_size' => 10000, 'max_width' => 10000,
            'max_height' => 10000,
            'file_name' => 'gambar_utama' . time()
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) { //jika gagal upload
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
            $this->load->view('c_adm_utama/tambah', $error);
        } else {
            //jika berhasil upload
            $file = $this->upload->data();
            //mengambil data di form
            $data = ['gambar_utama' => $file['file_name'],
                'nama_utama' => set_value('nama_utama'),
                'alamat' => set_value('alamat'),
                'telepon' => set_value('telepon'),
                'deskripsi' => set_value('deskripsi'),
                'id_kategori' => set_value('id_kategori'),
                'lat' => set_value('lat'),
                'long' => set_value('long'),
                'id_kec' => set_value('id_kec')
            ];
            $this->m_adm_utama->input($data); //memasukan data ke database
            redirect('c_adm_utama'); //mengalihkan halaman
        }
    }

    function ubah($id) {
        $data['dpd_kategori'] = $this->m_adm_utama->get_data_kategori();
        $data['dpd_kec'] = $this->m_adm_utama->get_data_kecamatan();
        $data['user'] = $this->m_adm_utama->getid($id);

        $data['konten'] = 'data/ubah';
        $this->load->view('template', $data);
    }

    function proses_ubah($id) {
        $gambar = $this->m_adm_utama->gambar($id);
        if (isset($_FILES["userfile"]["name"])) {
            //membuat konfigurasi
            $config = [
                'upload_path' => './assets/images/',
                'allowed_types' => 'jpg|png|jpeg',
                'max_size' => 10000, 'max_width' => 10000,
                'max_height' => 10000,
                'file_name' => 'gambar_utama' . time()
            ];
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) { //jika gagal upload
                $error = array('error' => $this->upload->display_errors()); //tampilkan error
                $this->load->view('update', $error);
            } else {
                //jika berhasil upload
                $file = $this->upload->data();
                //mengambil data di form
                $data = ['gambar_utama' => $file['file_name']];
                unlink('assets/images/' . $gambar->gambar_utama); //menghapus gambar yang lama
            }
        }
        $data['nama_utama'] = set_value('nama_utama');
        $data['alamat'] = set_value('alamat');
        $data['telepon'] = set_value('telepon');
        $data ['id_kategori'] = set_value('id_kategori');
        $data['lat'] = set_value('lat');
        $data['long'] = set_value('long');
        $data['deskripsi'] = set_value('deskripsi');
        $data['id_kec'] = set_value('id_kec');
        $this->m_adm_utama->ubah($id, $data); //memasukan data ke database
        redirect('c_adm_utama'); //mengalihkan halaman
    }

    function hapus($id) {
        $gambar = $this->m_adm_utama->gambar($id);
        unlink('assets/images/' . $gambar->gambar_utama);
        $this->m_adm_utama->hapus($id);
        redirect('c_adm_utama'); //mengalihkan halaman
    }

}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */
