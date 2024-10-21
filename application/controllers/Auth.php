<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_operator');
        
    }

    public function login_page() {

        $this->load->view('auth/login');
    }
    public function login() {

        if(isset($_POST['submit'])) {
            
            $user = $this->input->post('username');
            $pass = $this->input->post('password');
            $data = $this->Model_operator->login($user,$pass);

            if($data){
                $this->session->set_userdata(array(
                    'status_login'=>'oke',
                    'username'=>$data->Username
                ));

               
                redirect('Beranda/index');
            }
                else {
                    $this->load->view('Auth/login_page');
                }
            }
    }

    public function created() {
        
        {
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
                redirect('Auth/created');
            }
            else {
                $this->Model_operator->tambah_operator($data);
                $this->session->set_flashdata('success');
                $this->load->view('auth/login');
            }
           
        } else {
            
            $data ['record'] = $this->Model_operator->get_data()->result();
            $this->load->view('auth/daftar');
            
            }
          
    
        }  
    }

    public function logout(){

        $this->session->sess_destroy();
        redirect('Auth/login_page');
    }
}


?>