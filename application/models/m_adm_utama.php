<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_adm_utama extends CI_Model {

    function tampil_data() {
        return $this->db->query('SELECT utama.id_utama,'
                        . 'kategori.nama_kategori,'
                        . 'utama.nama_utama,'
                        . 'kecamatan.nama_kec,'
                        . 'utama.alamat,'
                        . 'utama.telepon,'
                        . 'utama.deskripsi,'
                        . 'utama.lat,'
                        . 'utama.long,'
                        . 'utama.gambar_utama '
                        . 'FROM utama,kategori,kecamatan '
                        . 'WHERE utama.id_kategori = kategori.id_kategori and utama.id_kec = kecamatan.id_kec order by id_utama DESC');
    }

    function input($data) {
        $this->db->insert('utama', $data);
    }

    function ubah($id, $data) {
        $this->db->where('id_utama', $id)->limit(1)->update('utama', $data);
    }

    public function getid($id) {
        $this->db->where('id_utama', $id);
        return $this->db->get('utama')->result();
    }

    public function gambar($id) {
        $this->db->where('id_utama', $id);
        return $this->db->get('utama')->row();
    }

    function hapus($id) {
        $this->db->where('id_utama', $id);
        $this->db->delete('utama');
    }

    function get_data_kategori() {
        return $this->db->get('kategori');
    }
    function get_data_kecamatan() {
        return $this->db->get('kecamatan');
    }

}

/* End of file m_data.php */
/* Location: ./application/models/m_data.php */