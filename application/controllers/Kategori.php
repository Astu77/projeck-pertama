<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Kategori extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_kategori');
        check_session();
    }

    public function index() {

        $data ['record'] = $this->Model_kategori->get_data();
        $this->template->load('Template','kategori/Page',$data);
    }


    public function index_tambah() {
        if(isset($_POST['submit'])) {
            $this->Model_kategori->tambah_kategori();
            redirect('kategori');
        }
        else {
            $this->template->load('Template','kategori/Page_tambah');
        }
        
    }

    public function index_get_data() {

       $data ['record'] = $this->Model_kategori->get_data();
       $this->template->load('Template','kategori/Page',$data);
    }

    public function edit($id = null) {

        if($this->input->post('submit')) {
            $this->Model_kategori->edit();
            redirect('kategori');
        }

        else {
            $id = $this->uri->segment(3);
            $data ['Kategori'] = $this->Model_kategori->get_change_data($id)->row_array();
            $this->template->load('Template', 'kategori/Page_edit', $data);
            
        }
    }
    public function delete() {
        $id = $this->uri->segment(3);
        $this->Model_kategori->delet($id);
        redirect('kategori/index');
    }
 }
?>