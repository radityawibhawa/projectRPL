<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function get_all_user(){
		return $this->db->order_by('id_user','ASC')
						->get('user')
						->result();
	}

	public function approve($idUser){
		$data = array (
			'status' 	=> 'APPROVED'
		);
		$this->db->where('id_user',$idUser)
				->update('user',$data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_user_data_detail($idUser){
		return $this->db->where('id_user',$idUser)
						->get('user')
						->row();
	}

	public function get_message(){
		return $this->db->order_by('id_message','ASC')
						->join('user', 'user.id_user = message.id_user')
						->get('message')
						->result();
	}

	public function get_all_rent(){
		return $this->db->select('*')
						->select('rent.alamat AS alamatAmbil')
						->select('rent.created_at AS dipesanTgl')
						->select('rent.status AS statusRent')
						->order_by('rent.id_rent','ASC')
						->join('user','user.id_user = rent.id_user')
						->join('cars','cars.id_mobil = rent.id_mobil')
						->get('rent')
						->result();
	}

	public function get_all_cars(){
		return $this->db->order_by('id_mobil','ASC')
						->get('cars')
						->result();
	}

	public function get_rent_detail($rentid){
		return $this->db->select('*')
						->select('rent.alamat AS alamatAmbil')
						->select('rent.created_at AS dipesanTgl')
						->select('rent.status AS statusRent')
						->order_by('id_rent','ASC')
						->join('user','user.id_user = rent.id_user')
						->join('cars','cars.id_mobil = rent.id_mobil')
						->where('rent.id_rent', $rentid)
						->get('rent')
						->row();
	}

	public function get_data_cars($carid){
		return $this->db->where('id_mobil',$carid)
						->get('cars')
						->row();
	}

	public function finishRent($rentid,$carid,$totMobil){
		$data = array (
			'status'	=> 'FINISH'
		);
		$this->db->where('id_rent',$rentid)
				->update('rent',$data);

		$dataa = array (
			'totalPinjam'	=> $totMobil + 1,
			'status'		=> 'AVAILABLE'
		);
		$this->db->where('id_mobil',$carid)
				->update('cars',$dataa);	

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function addCar($fotoMobil){
		$data = array(
			'platMobil'		=> $this->input->post('plat'),
			'jenisMobil'	=> $this->input->post('jenis'),
			'hargaSewa'		=> $this->input->post('harga'),
			'totalPinjam'	=> 0,
			'spesifikasi'	=> $this->input->post('spek'),
			'status'		=> 'AVAILABLE',
			'fotoMobil'		=> $fotoMobil['file_name']
		);

		$this->db->insert('cars',$data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */