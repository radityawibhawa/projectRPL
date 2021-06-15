<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggan extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function get_data_review(){
		return $this->db->select('*')
						->join('user','user.id_user = review.id_user')
						->get('review')
						->result();
	}

	public function get_data_mobil(){
		return $this->db->get('cars')
						->result();
	}

	public function get_data_mobil_by_CARID($CARID){
		return $this->db->where('id_mobil', $CARID)
						->get('cars')
						->row();
	}

	public function sendMessage($idUser){
		$data = array (
			'id_user' 	=> $idUser,
			'nama'		=> $this->input->post('name'),
			'email'		=> $this->input->post('email'),
			'phone'		=> $this->input->post('phone'),
			'message'	=> $this->input->post('message')
		);
		$this->db->insert('user',$data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

/* End of file m_review.php */
/* Location: ./application/models/m_review.php */