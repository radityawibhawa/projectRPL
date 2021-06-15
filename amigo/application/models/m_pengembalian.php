<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengembalian extends CI_Model {

	public function get_mobil_by_id($idUser){
		return $this->db->select('*')
						->select('rent.status AS statusRent')
						->where('id_user', $idUser)
						->join('cars', 'cars.id_mobil = rent.id_mobil')
						->get('rent')
						->result();
	}

	public function get_data_rent($carid){
		return $this->db->where('id_mobil',$carid)
						->where('status','WAITING')
						->get('rent')
						->row();
	}

	public function returnCar($carid,$idUser,$totMobil){
		$data = array (
			'keterlambatan'	=> $this->input->post('keterlambatan'),
			'denda'			=> $this->input->post('denda'),
			'alamat_kembali'=> $this->input->post('lokasi'),
			'status'		=> 'FINISH'
		);
		$this->db->where('id_mobil',$carid)
				->update('rent',$data);
		$data2 = array(
			'totalPinjam'	=> $totMobil+1,
			'status'		=> 'AVAILABLE'
		);
		$this->db->where('id_mobil',$carid)
				->update('cars',$data2);

		$data3 = array(
			'id_user'	=> $idUser,
			'id_mobil'	=> $carid,
			'pelayanan'	=> $this->input->post('r_pelayanan'),
			'mobil' 	=> $this->input->post('r_mobil')
		);
		$this->db->insert('review', $data3);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

}

/* End of file m_pengembalian.php */
/* Location: ./application/models/m_pengembalian.php */