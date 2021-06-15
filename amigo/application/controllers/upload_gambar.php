<?php
defined('BASEPATH') or exit('No direct script access allowed');

class upload_gambar extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_sewamobil');
        $this->load->library("form_validation");
    }

    public function index()
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $data['title'] = 'Amigotics Rent - Upload';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/form_upload');
        $this->load->view('templates/auth_footer');
        // }
    }

    public function tambah()
    {
        $mobil = $this->m_sewamobil;
        $validation = $this->form_validation;
        $validation->set_rules($mobil->rules());

        if ($validation->run()) {
            $mobil->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data['title'] = 'Amigotics Rent';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/form_upload');
        $this->load->view('templates/auth_footer');
    }
    // public function edit($id = null){
    //     if (!isset($id)) redirect('upload_gambar');

    //     $mobil = $this->m_sewamobil;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($mobil->rules());

    //     if($validation->run()){
    //         $mobil->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }
    //     $data["mobil"] = $mobil->getById($id);
    //     if(!$data["mobil"]) show_404();

    //     $this->load->view('templates/form_upload', $data);
    // }
    // public function delete($id = null){
    //     if(!isset($id)) show_404();
    //     if($this->m_sewamobil->delete($id)){
    //         redirect('upload_gambar');
    //     }
    // }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class upload_gambar extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_sewamobil');
        $this->load->library("form_validation");
    }

    public function index()
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $data['title'] = 'Amigotics Rent - Upload';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/form_upload');
        $this->load->view('templates/auth_footer');
        // }
    }

    public function tambah()
    {
        $mobil = $this->m_sewamobil;
        $validation = $this->form_validation;
        $validation->set_rules($mobil->rules());

        if ($validation->run()) {
            $mobil->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data['title'] = 'Amigotics Rent';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/form_upload');
        $this->load->view('templates/auth_footer');
    }
    // public function edit($id = null){
    //     if (!isset($id)) redirect('upload_gambar');

    //     $mobil = $this->m_sewamobil;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($mobil->rules());

    //     if($validation->run()){
    //         $mobil->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }
    //     $data["mobil"] = $mobil->getById($id);
    //     if(!$data["mobil"]) show_404();

    //     $this->load->view('templates/form_upload', $data);
    // }
    // public function delete($id = null){
    //     if(!isset($id)) show_404();
    //     if($this->m_sewamobil->delete($id)){
    //         redirect('upload_gambar');
    //     }
    // }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class upload_gambar extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_sewamobil');
        $this->load->library("form_validation");
    }

    public function index()
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $data['title'] = 'Amigotics Rent - Upload';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/form_upload');
        $this->load->view('templates/auth_footer');
        // }
    }

    public function tambah()
    {
        $mobil = $this->m_sewamobil;
        $validation = $this->form_validation;
        $validation->set_rules($mobil->rules());

        if ($validation->run()) {
            $mobil->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data['title'] = 'Amigotics Rent';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/form_upload');
        $this->load->view('templates/auth_footer');
    }
    // public function edit($id = null){
    //     if (!isset($id)) redirect('upload_gambar');

    //     $mobil = $this->m_sewamobil;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($mobil->rules());

    //     if($validation->run()){
    //         $mobil->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }
    //     $data["mobil"] = $mobil->getById($id);
    //     if(!$data["mobil"]) show_404();

    //     $this->load->view('templates/form_upload', $data);
    // }
    // public function delete($id = null){
    //     if(!isset($id)) show_404();
    //     if($this->m_sewamobil->delete($id)){
    //         redirect('upload_gambar');
    //     }
    // }
}
