<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sewa_mobil extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_auth');
        $this->load->model('m_sewamobil');
    }

    public function index()
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{

        $titel['title'] = 'Amigotics Rent - Sewa Mobil';
        $data['list_mobil'] = $this->m_sewamobil->getAll();
        $this->load->view('pelanggan/header_pelanggan', $titel);
        $this->load->view('pelanggan/sewamobil', $data);
        $this->load->view('pelanggan/footer_pelanggan');
        // }


    }
}
