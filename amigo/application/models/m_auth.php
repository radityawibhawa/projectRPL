<?php

class m_auth extends CI_model
{
    //Proses pengecekkan data dari pengguna yaitu email
    public function login($email)
    {
        //pengecekkan email yang di inputkan oleh pengguna apakah sudah terdaftar dalam database atau tidak
        $pelanggan = $this->db->get_where('pelanggan', ['email' => $email])->row_array();
        if ($pelanggan) {
            // usernya ada
            return true;
        } else {
            //usernya ga ada
            return false;
        }
    }
    //mengambil semua data table pelanggan dari database
    public function getAllUser()
    {
        return $this->db->get('pelanggan')->result_array();
    }
    //memasukkan data ke table pelanggan
    public function insertUser($data)
    {
        return $this->db->insert('pelanggan', $data);
    }
    //fungsi untuk mengedit data user berdasarkan id pelanggan
    public function editUser($id_pelanggan)
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'email' => $this->input->post('email', true),
            'no_hp' => $this->input->post('no_hp'),
            'password' => $this->input->post('password')
        ];
        $this->db->where('id_pelanggan', $id_pelanggan);
        $this->db->update('pelanggan', $data);
    }
    //fungsi untuk menghapus data user berdasarkan id_pelanggan
    public function deleteUser($id_pelanggan)
    {
        $this->db->where('id_pelanggan', $id_pelanggan);
        $this->db->delete('pelanggan');
    }
    //mengambil data user dari id_pelanggan
    public function getUserById($id_pelanggan)
    {
        $this->db->where('id_pelanggan', $id_pelanggan);
        return $this->db->get('pelanggan')->row_array();
    }

    // public function insertAppointment($data)
    // {
    //     return $this->db->insert('appointment', $data);
    // }
}
