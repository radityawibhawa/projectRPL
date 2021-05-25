<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $data['title'] = 'Amigotics Rent - Beranda'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian'); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan'); //meload views footer
        // }


    }
}
