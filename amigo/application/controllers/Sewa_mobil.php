<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sewa_mobil extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_auth');
        $this->load->model('m_sewamobil');
        $this->load->model('m_pelanggan');
    }

    public function index()
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{

        $email = $this->session->userdata('email');
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $titel['title'] = 'Amigotics Rent - Sewa Mobil';
        $data['list_mobil'] = $this->m_pelanggan->get_data_mobil();
        $this->load->view('pelanggan/header_pelanggan', $titel);
        $this->load->view('pelanggan/sewamobil', $data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
        // }
    }

    public function detailMobil(){
            $CARID = $this->uri->segment(3);
            $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($CARID);
            $data['title'] = 'Amigotics Rent - Detail Penyewaan';
            $this->load->view('pelanggan/header_pelanggan', $data);
            $this->load->view('pelanggan/detail_sewa',$data);
            $this->load->view('pelanggan/footer_pelanggan',$data);
    }


    public function rent(){
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        if($this->input->post('submit')){
            if ($this->m_sewamobil->input_rent($idUser) == TRUE) {
                $titel['title'] = 'Amigotics Rent - Sewa Mobil';
                $data['list_mobil'] = $this->m_pelanggan->get_data_mobil();
                $data['notif'] = 'ORDER SUCCESSFULLY CREATED!!';
                $this->load->view('pelanggan/header_pelanggan', $titel);
                $this->load->view('pelanggan/sewamobil', $data);
                $this->load->view('pelanggan/footer_pelanggan',$data);
            } else {
                redirect('Beranda');
            }
        }
    }
}
