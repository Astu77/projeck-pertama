<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_barang');
        $this->load->model('Model_kategori');
        check_session();
    }
    
    public function index_page_barang() {
        
        $data ['record'] = $this->Model_barang->tampil_data();
        $this->template->load('Template','barang/Page.php',$data);
    }


    public function index_tambah() {

        if(isset($_POST['submit'])) {
            
            $nama       = $this->input->post('Nama_barang');
            $kategori   = $this->input->post('Kategori');
            $harga      = $this->input->post('Harga');
            $data       = array (
                         'Nama_barang'=>$nama,
                         'Kategori_id'=>$kategori,
                         'Harga'=>$harga
            );

            $this->Model_barang->tambah_barang($data);
            redirect('Barang/index_page_barang');
        }
        else {
            $this->load->model('Model_kategori');
            $data ['Kategori'] = $this->Model_kategori->get_data()->result();
            $this->template->load('Template','barang/Page_tambah.php',$data);
        }
    }
    
    public function edit() {

        if(isset($_POST['submit'])) {
            
            $id         = $this->input->post('id');
            $barang     = $this->input->post('Nama_barang');
            $kategori   = $this->input->post('kategori');
            $harga      = $this->input->post('Harga');
            $data       = array(
                         'Nama_barang'=>$barang,
                         'Kategori_id'=>$kategori,
                         'Harga'=>$harga
                              );

            $this->Model_barang->edit($data,$id);
            
            redirect('Barang/index_page_barang');
        }
        else {
            $id = $this->uri->segment(3);
            $data ['kategori'] = $this->Model_kategori->get_data()->result();
            $data ['record']   = $this->Model_barang->get_by_id($id);
            $this->template->load('Template','barang/Page_edit.php',$data);
        }
    }

    public function delete() {
        $id = $this->uri->segment(3);
        $this->Model_barang->delet($id);
    
        redirect('Barang/index_page_barang');
    }
}

?>