<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_gambar extends CI_Model {

    function tampil_data() {
        return $this->db->query('SELECT gambar.id_gambar,
            utama.nama_utama, gambar.nama_gambar, gambar.gambar FROM gambar, utama WHERE utama.id_utama = gambar.id_utama ORDER BY id_gambar DESC');
    }

    function input($data) {
        $this->db->insert('gambar', $data);
    }

    function ubah($id, $data) {
        $this->db->where('id_gambar', $id)->limit(1)->update('gambar', $data);
    }

    public function getid($id) {
        $this->db->where('id_gambar', $id);
        return $this->db->get('gambar')->result();
    }

    public function gambar($id) {
        $this->db->where('id_gambar', $id);
        return $this->db->get('gambar')->row();
    }

    function hapus($id) {
        $this->db->where('id_gambar', $id);
        $this->db->delete('gambar');
    }

    function get_data_utama() {
        $this->db->order_by('nama_utama', 'ASC');
        return $this->db->get('utama');
    }

}

/* End of file m_data.php */
/* Location: ./application/models/m_data.php */