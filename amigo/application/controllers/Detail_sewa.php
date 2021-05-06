<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_sewa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_auth');
    }

    public function index()
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $data['title'] = 'Amigotics Rent - Beranda';
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_sewa');
        $this->load->view('pelanggan/footer_pelanggan');
        // }


    }
}
