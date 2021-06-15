<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model {

	public function updateProfile($idUser,$ktp_data,$ktpselfie_data,$sim_data,$simselfie_data){
		$data = array(
			'nama'		=> $this->input->post('nama'),
			'username'	=> $this->input->post('username'),
			'phone'		=> $this->input->post('no_hp'),
			'alamat'	=> $this->input->post('alamat'),
			'noktp'		=> $this->input->post('no_ktp'),
			'nosim'		=> $this->input->post('no_sim'),
			'ktp'		=> $ktp_data['file_name'],
			'ktpselfie'	=> $ktpselfie_data['file_name'],
			'sim'		=> $sim_data['file_name'],
			'simselfie'	=> $simselfie_data['file_name'],
			'status'	=> 'WAITING'
		);
		$this->db->where('id_user',$idUser)
				->update('user',$data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

}

/* End of file m_profile.php */
/* Location: ./application/models/m_profile.php */