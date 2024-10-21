<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_operator extends CI_Model {



    public function login($user,$pass) {

       $check = $this->db->get_where('Operator_db',array('Username'=>$user,'Password'=>$pass));
       if($check->num_rows()>0) {
            $hasil = $check->row();
            $this->db->set('Last_login',date('Y-m-d H:i:s'));
            $this->db->where('Username',$user);
            $this->db->update('Operator_db');
            return $hasil;
            
       }
       else {
        return false;
       }
    }

    public function tambah_operator($data) {

        $this->db->insert('Operator_db',$data);
        
    }

    public function check_user($user){
        $this->db->where('Username',$user);
        $query = $this->db->get('Operator_db');

        if($query->num_rows()>0) {
            return true;
        }
        else{
            return false ;
        }
    }

    public function get_data() {

        return $this->db->get('Operator_db');
    }

    public function  edit($data,$id) {

        $this->db->where('Operator_id',$id);
        $this->db->update('Operator_db',$data);
    }

    public function get_change_data($id) {

        $this->db->where('Operator_id',$id);
        return $this->db->get('Operator_db')->row_array();
    }

    public function delet($id) {
        $this->db->where('Operator_id',$id);
        $this->db->delete('Operator_db');
    }
}

?>