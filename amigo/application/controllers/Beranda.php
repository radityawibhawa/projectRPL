<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
// load model yg bernama m_auth
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
//load folder vie dengan nama file header, beranda, footer
		$data['title'] = 'Amigotics Rent - Beranda';
		$this->load->view('pelanggan/header_pelanggan', $data);
		$this->load->view('pelanggan/beranda');
		$this->load->view('pelanggan/footer_pelanggan');
		// }


	}
}
