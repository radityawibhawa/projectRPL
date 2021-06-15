<?php

class m_auth extends CI_model
{
    //Proses pengecekkan data dari pengguna yaitu email
    public function login($email)
    {
        //pengecekkan email yang di inputkan oleh pengguna apakah sudah terdaftar dalam database atau tidak
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            // usernya ada
            return true;
        } else {
            //usernya ga ada
            return false;
        }
    }
    //mengambil semua data table user dari database
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }
    //memasukkan data ke table user
    public function insertUser($data)
    {
        return $this->db->insert('user', $data);
    }
    //fungsi untuk mengedit data user berdasarkan id 
    public function editUser($id_user)
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'email' => $this->input->post('email', true),
            'no_hp' => $this->input->post('no_hp'),
            'password' => $this->input->post('password')
        ];
        $this->db->where('id_user', $id_user);
        $this->db->update('user', $data);
    }
    //fungsi untuk menghapus data user berdasarkan id_user
    public function deleteUser($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }
    //mengambil data user dari id_user
    public function getUserById($id_user)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->get('user')->row_array();
    }

    // public function insertAppointment($data)
    // {
    //     return $this->db->insert('appointment', $data);
    // }

    public function get_id_user_by_email($email){
        return $this->db->where('email',$email)
                        ->get('user')
                        ->row();
    }
}
