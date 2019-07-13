<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {   
    
    function tampil_data_semua() {
       return $this->db->query("SELECT utama.id_utama,"
        . "kategori.nama_kategori,"
        . "utama.nama_utama,"
        . "utama.lat,"
        . "utama.long,"
        . "utama.gambar_utama "
        . "FROM utama,kategori "
        . "WHERE utama.id_kategori = kategori.id_kategori order by rand()");
   }
   function tampil_data_semua_home() {        
       return $this->db->query("SELECT utama.id_utama,"
        . "kategori.nama_kategori,"
        . "utama.nama_utama,"
        . "utama.deskripsi,"
        . "utama.lat,"
        . "utama.long,"
        . "utama.gambar_utama "
        . "FROM utama,kategori "
        . "WHERE utama.id_kategori = kategori.id_kategori order by rand() limit 6");
   }
   function tampil_data_working() {
       return $this->db->query("SELECT utama.id_utama,"
        . "kategori.nama_kategori,"
        . "utama.nama_utama,"
        . "utama.lat,"
        . "utama.long,"
        . "utama.gambar_utama "
        . "FROM utama,kategori "
        . "WHERE utama.id_kategori = kategori.id_kategori AND nama_kategori like '%working%' order by rand()");
   }
   function tampil_data_coffee() {
       return $this->db->query("SELECT utama.id_utama,"
        . "kategori.nama_kategori,"
        . "utama.nama_utama,"
        . "utama.lat,"
        . "utama.long,"
        . "utama.gambar_utama "
        . "FROM utama,kategori "
        . "WHERE utama.id_kategori = kategori.id_kategori AND nama_kategori like '%coffee%' order by rand()");
   }
   function tampil_data_public() {
       return $this->db->query("SELECT utama.id_utama,"
        . "kategori.nama_kategori,"
        . "utama.nama_utama,"
        . "utama.lat,"
        . "utama.long,"
        . "utama.gambar_utama "
        . "FROM utama,kategori "
        . "WHERE utama.id_kategori = kategori.id_kategori AND nama_kategori like '%public%' order by rand()");
   }
   function tampil_data_wifi() {
       return $this->db->query("SELECT utama.id_utama,"
        . "kategori.nama_kategori,"
        . "utama.nama_utama,"
        . "utama.lat,"
        . "utama.long,"
        . "utama.gambar_utama "
        . "FROM utama,kategori "
        . "WHERE utama.id_kategori = kategori.id_kategori AND nama_kategori like '%wifi%' order by rand()");
   }
   function tampil_data_library() {
       return $this->db->query("SELECT utama.id_utama,"
        . "kategori.nama_kategori,"
        . "utama.nama_utama,"
        . "utama.lat,"
        . "utama.long,"
        . "utama.gambar_utama "
        . "FROM utama,kategori "
        . "WHERE utama.id_kategori = kategori.id_kategori AND nama_kategori like '%library%' order by rand()");
   }
   function caridata() {        
    $nama_utama = $this->input->POST('nama_utama');
    $id_kec = $this->input->POST('id_kec');
    $query = $this->db->query("SELECT utama.id_utama,"
        . "kategori.nama_kategori,"
        . "kecamatan.id_kec,"
        . "utama.nama_utama,"
        . "utama.lat,"
        . "utama.long,"
        . "utama.gambar_utama "
        . "FROM utama,kategori, kecamatan "
        . "WHERE utama.id_kategori = kategori.id_kategori AND utama.id_kec = kecamatan.id_kec AND nama_utama like '%".$nama_utama."%' AND kecamatan.id_kec like '%".$id_kec."%' order by rand()");

    return $query->result();
	}
	
	function detail($where, $table) {
		return $this->db->get_where($table, $where);
	}

	function detail_gambar($where, $table) {
		return $this->db->get_where($table, $where);
	}
	function get_data_kec() {
		$this->db->order_by('nama_kec','ASC');
		return $this->db->get('kecamatan');
	}
}

