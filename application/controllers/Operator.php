<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_operator');
        check_session();
    }

    public function index_page_operator() {

        $data ['record'] = $this->Model_operator->get_data()->result();
        $this->template->load('Template','operator/Page',$data);
    }



    public function index_tambah() {
        if(isset($_POST['submit'])) {

        $nama = $this->input->post('Nama_lengkap', TRUE);
        $user = $this->input->post('Username',TRUE);
        $pass = $this->input->post('Password',TRUE);
        $data = array(
            'Nama_lengkap'=>$nama,
            'Username'=>$user,
            'Password'=>$pass
        );
        
        if($this->Model_operator->check_user($user)){
            $this->session->set_flashdata('error','username sudah terdaftar,  silahkan masukan userl lain!');
            
            redirect('Operator/index_tambah');
        }
        else {
            $this->Model_operator->tambah_operator($data);
            $this->session->set_flashdata('sucess');
            redirect('Operator/index_page_operator');
        }
       
    } else {
        
        $data ['record'] = $this->Model_operator->get_data()->result();
        $this->template->load('Template','operator/Page_tambah',$data);
        
        }
      

    }   

    public function edit() {

        if(isset($_POST['submit'])) {

            $id     = $this->input->post('id');
            $name   = $this->input->post('Nama_lengkap');
            $user   = $this->input->post('Username');
            $pass   = $this->input->post('password');
            $data   = array(
                          'Nama_lengkap'=>$name,
                          'Username'=>$user,
                          'Password'=>$pass);

            $this->Model_operator->edit($data,$id);
            redirect('Operator/index_page_operator');
        }
        else {
            $id = $this->uri->segment(3);
            $data ['record'] =  $this->Model_operator->get_change_data($id);
            $this->template->load('Template','operator/Page_edit',$data);

        }
    }

    public function delete() {

        $id = $this->uri->segment(3);
        $this->Model_operator->delet($id);
        redirect('Operator/index_page_operator');
    }

 
}
?>