<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class  Model_barang extends CI_Model {
    

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function tampil_data() {

        $query = "SELECT b.Barang_id, b.Nama_barang, b.Harga, kd.Nama_kategori 
                  FROM Barang_db AS b INNER JOIN Kategori_db 
                  AS kd ON b.Kategori_id = kd.Kategori_id;";

        return $this->db->query($query)->result();

        ;
    }

    public function tambah_barang($data) {

        $this->db->insert('Barang_db',$data);
    }

    public function edit($data,$id) {
        
        $this->db->where('Barang_id',$id);
        $this->db->update('Barang_db',$data);
        
    }

    public function get_by_id($id) {

        $this->db->where('Barang_id',$id);
       return $this->db->get('Barang_db')->row_array();
    }

    public function delet($id) {
        
        $this->db->where('Barang_id',$id);
        $this->db->delete('Barang_db');
    }
}
?>