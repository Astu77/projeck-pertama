<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Transaksi extends CI_Controller {

    public function index_page_transaksi() {

        $this->load->view('transaksi/Page');
    }
}
?>