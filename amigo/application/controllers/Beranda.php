<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
// load model yg bernama m_auth
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth');
		$this->load->model('m_pelanggan');
	}

	public function index()
	{
		// if($this->session->userdata('role_id') == "1") {
		// 	redirect('admin');	
		// } else if($this->session->userdata('role_id') == "2") {
		// 	redirect('pelanggan');
		// } else{
//load folder vie dengan nama file header, beranda, footer
		$email = $this->session->userdata('email');
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
		$data['review'] = $this->m_pelanggan->get_data_review();
		$data['mobil'] = $this->m_pelanggan->get_data_mobil();
		$data['title'] = 'Amigotics Rent - Beranda';
		$this->load->view('pelanggan/header_pelanggan', $data);
		$this->load->view('pelanggan/beranda',$data);
		$this->load->view('pelanggan/footer_pelanggan',$data);
		// }
	}

	public function sendMessage(){
		$idUser = $this->uri->segment(3);
		if($this->input->post('submit')){
			if($this->m_pelanggan->sendMessage('$idUser') == TRUE){
				$email = $this->session->userdata('email');
		        $data['id'] = $this->m_auth->get_id_user_by_email($email);
				$data['review'] = $this->m_pelanggan->get_data_review();
				$data['success'] = 'MESSAGE SENT!!';
				$data['review'] = $this->m_pelanggan->get_data_review();
				$data['mobil'] = $this->m_pelanggan->get_data_mobil();
				$data['title'] = 'Amigotics Rent - Beranda';
				$this->load->view('pelanggan/header_pelanggan', $data);
				$this->load->view('pelanggan/beranda',$data);
				$this->load->view('pelanggan/footer_pelanggan');
			}
		}
	}

}
