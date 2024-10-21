<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('template');
        check_session();
    }
    
    
    public function index() {

        $this->template->load('Template','Home/beranda');
       
    }


    public function brnda() {

        $data['message'] = 'selmat datang  di beranda 2';
        $this->load->view('Home/beranda2', $data);
    }
}

?>