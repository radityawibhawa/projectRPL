<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_auth');
    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('id_role');
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Terlogout Otomatis Karena Sudah Login Sebelumnya</div>');
            redirect('auth');
        } else {
            $this->form_validation->set_rules('email', 'Email', 'required|trim', [
                'required' => 'Email Harus Diisi!'
            ]);
            $this->form_validation->set_rules('password', 'Password', 'required|trim', [
                'required' => 'Password Harus Diisi!'
            ]);
            if ($this->form_validation->run() == FALSE) {
                $data['title'] = 'Amigotics Rent - Login';
                $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/login', $data);
                $this->load->view('templates/auth_footer');
            } else {
                $this->_login();
            }
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $found = $this->m_auth->login($email, $password);
        $pelanggan = $this->db->get_where('pelanggan', ['email_pelanggan' => $email])->row_array();

        if ($found) {
            if ($pelanggan['password'] == $password) {
                $data = [
                    'email' => $pelanggan['email'],
                    'id_role' => $pelanggan['id_role']
                ];
                $this->session->set_userdata($data);
                if ($pelanggan['id_role'] == 1) {
                    redirect('admin');
                } else {
                    redirect('pelanggan');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('auth');
            }
        } else {
            // usernya ga ada
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak terdaftar. Silahkan Daftar</div>');
            redirect('auth');
        }
    }


    public function registration()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama harus diisi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pelanggan.email_pelanggan]', [
            'required' => 'Email harus diisi!',
            'valid_email' => 'Email tidak valid!',
            'is_unique' => 'Email belum terdaftar!'
        ]);
        $this->form_validation->set_rules('no_hp', 'No_hp', 'required|trim', [
            'required' => 'Nomor Telepon harus diisi!'
        ]);
        $this->form_validation->set_rules('usernama', 'Usernama', 'required|trim|is_unique[pelanggan.username_pelanggan]', [
            'required' => 'Email harus diisi!',
            'is_unique' => 'Email belum terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak cocok',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Amigotics Rent - Daftar';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama_pelanggan' => $this->input->post('nama', true),
                'email_pelanggan' => $this->input->post('email', true),
                'no_hp' => $this->input->post('no_hp'),
                'username_pelanggan' => $this->input->post('usernama'),
                'password' => $this->input->post('password'),
                'id_role' => 2,
                'akun_dibuat' => time()
            ];

            $this->M_Auth->insertUser($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! akun anda telah dibuat. Silahkan login</div>');
            redirect('auth');
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logout berhasil!</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'TIDAK MEMILIKI AKSES!';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('auth/blocked');
        $this->load->view('templates/footer', $data);
    }
}
