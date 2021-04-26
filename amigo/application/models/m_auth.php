<?php

class m_auth extends CI_model
{

    public function login($email)
    {
        $pelanggan = $this->db->get_where('pelanggan', ['email' => $email])->row_array();
        if ($pelanggan) {
            // usernya ada
            return true;
        } else {
            return false;
        }
    }

    public function getAllUser()
    {
        return $this->db->get('pelanggan')->result_array();
    }

    public function insertUser($data)
    {
        return $this->db->insert('pelanggan', $data);
    }

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

    public function deleteUser($id_pelanggan)
    {
        $this->db->where('id_pelanggan', $id_pelanggan);
        $this->db->delete('pelanggan');
    }

    public function getUserById($id_pelanggan)
    {
        $this->db->where('id_pelanggan', $id_pelanggan);
        return $this->db->get('pelanggan')->row_array();
    }

    public function insertAppointment($data)
    {
        return $this->db->insert('appointment', $data);
    }
}
