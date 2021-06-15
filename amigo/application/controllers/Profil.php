<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    //meloading model yang bernama m_auth
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_auth');
        $this->load->model('m_profile');
    }

    public function index()
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
//meloading  view Beranda, dan header,profil,footer di folder pelanggan
        $email = $this->session->userdata('email');
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['title'] = 'Amigotics Rent - Profil Anda';
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/profil',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
        // }

    }

    public function updateProfile(){
        $idUser = $this->uri->segment(3);
        if($this->input->post('submit')){
            $filename = $idUser.'-K-'.$_FILES['ktp']['name'];
            $config['file_name'] = $filename;
            $config['upload_path'] = './uploads/users/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size']  = '5000';
            $this->load->library('upload', $config, 'ktp');
            $ktp = $this->ktp->do_upload('ktp');

            $filename = $idUser.'-KS-'.$_FILES['ktp']['name'];
            $config['file_name'] = $filename;
            $config['upload_path'] = './uploads/users/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size']  = '5000';
            $this->load->library('upload', $config, 'ktpselfie');
            $ktpselfie = $this->ktpselfie->do_upload('ktpselfie');

            $filename = $idUser.'-S-'.$_FILES['ktp']['name'];
            $config['file_name'] = $filename;
            $config['upload_path'] = './uploads/users/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size']  = '5000';
            $this->load->library('upload', $config, 'sim');
            $sim = $this->sim->do_upload('sim');

            $filename = $idUser.'-SS-'.$_FILES['ktp']['name'];
            $config['file_name'] = $filename;
            $config['upload_path'] = './uploads/users/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size']  = '5000';
            $this->load->library('upload', $config, 'simselfie');
            $simselfie = $this->simselfie->do_upload('simselfie');
            
            if($ktp){
                if($ktpselfie){
                    if($sim){
                        if($simselfie){
                            $ktp_data = $this->ktp->data();
                            $ktpselfie_data = $this->ktpselfie->data();
                            $sim_data = $this->sim->data();
                            $simselfie_data = $this->simselfie->data();
                            if($this->m_profile->updateProfile($idUser,$ktp_data,$ktpselfie_data,$sim_data,$simselfie_data) == TRUE){
                                redirect('Profil','refresh');
                            }
                        } else {
                            $data['notif'] = $this->simselfie->display_errors();
                            $email = $this->session->userdata('email');
                            $data['id'] = $this->m_auth->get_id_user_by_email($email);
                            $data['title'] = 'Amigotics Rent - Profil Anda';
                            $this->load->view('pelanggan/header_pelanggan', $data);
                            $this->load->view('pelanggan/profil',$data);
                            $this->load->view('pelanggan/footer_pelanggan',$data);
                        }
                    } else {
                        $data['notif'] = $this->sim->display_errors();
                        $email = $this->session->userdata('email');
                        $data['id'] = $this->m_auth->get_id_user_by_email($email);
                        $data['title'] = 'Amigotics Rent - Profil Anda';
                        $this->load->view('pelanggan/header_pelanggan', $data);
                        $this->load->view('pelanggan/profil',$data);
                        $this->load->view('pelanggan/footer_pelanggan',$data);
                    }       
                } else {
                    $data['notif'] = $this->ktpselfie->display_errors();
                    $email = $this->session->userdata('email');
                    $data['id'] = $this->m_auth->get_id_user_by_email($email);
                    $data['title'] = 'Amigotics Rent - Profil Anda';
                    $this->load->view('pelanggan/header_pelanggan', $data);
                    $this->load->view('pelanggan/profil',$data);
                    $this->load->view('pelanggan/footer_pelanggan',$data);
                }
            } else {
                $data['notif'] = $this->ktp->display_errors();
                $email = $this->session->userdata('email');
                $data['id'] = $this->m_auth->get_id_user_by_email($email);
                $data['title'] = 'Amigotics Rent - Profil Anda';
                $this->load->view('pelanggan/header_pelanggan', $data);
                $this->load->view('pelanggan/profil',$data);
                $this->load->view('pelanggan/footer_pelanggan',$data);
            }
        }
    }


}
