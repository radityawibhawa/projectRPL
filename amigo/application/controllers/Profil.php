<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    //meloading model yang bernama m_auth
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
//meloading  view Beranda, dan header,profil,footer di folder pelanggan
        $data['title'] = 'Amigotics Rent - Profil Anda';
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/profil');
        $this->load->view('pelanggan/footer_pelanggan');
        // }

    }
}
