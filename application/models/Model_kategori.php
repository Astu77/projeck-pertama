<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {

    public function tambah_kategori() {

        $data = array('Nama_kategori'=> $this->input->post('Kategori', TRUE));
        $this->db->insert('Kategori_db', $data);
    }

    public function get_data() {
        
       return $this->db->get('Kategori_db');
    }

    public function edit() {

      $data = array(
             'Nama_kategori'=> $this->input->post('Kategori', TRUE)
      );
      $this->db->where('Kategori_id',$this->input->post('id'));
      $this->db->update('Kategori_db',$data);
    }

    public function get_change_data($id) {

        $param = array('Kategori_id'=>$id);
        return $this->db->get_where('Kategori_db',$param);
    }

    public function delet($id){
        $this->db->where('Kategori_id',$id);
        $this->db->delete('Kategori_db');
    }
}
?>