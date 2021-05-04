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
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
                'required' => 'Email Harus Diisi!',
            ]);
            $this->form_validation->set_rules('password', 'Password', 'required|trim', [
                'required' => 'Password Harus Diisi!',
            ]);
            if ($this->form_validation->run() == false) {
                $data['title'] = 'Login Page';
                $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/login');
                $this->load->view('templates/auth_footer');
            } else {
                $this->login();
            }
        }
    }

    private function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $found = $this->m_auth->login($email, $password);
        $pelanggan = $this->db->get_where('pelanggan', ['email' => $email])->row_array();

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
                    redirect('beranda');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('auth');
            }
        } else {
            // usernya ga ada
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak ada. Silahkan register</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Harus Diisi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pelanggan.email]', [
            'required' => 'Email Harus Diisi!',
            'is_unique' => 'Email Sudah Digunakan'
        ]);
        $this->form_validation->set_rules('no_hp', 'No_hp', 'required|trim', [
            'required' => 'Nomor Harus Diisi!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]', [
            'required' => 'Sandi Harus Diisi!',
            'matches' => 'Sandi tidak cocok!',
            'min_length' => 'Sandi terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Amigotics Rent - Daftar';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' =>  htmlspecialchars($this->input->post('email', true)),
                'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
                'password' => $this->input->post('password1'),
                'id_role' => 2,
                'akun_dibuat' => time()
            ];
            $this->m_auth->insertUser($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! akun anda telah dibuat. Silahkan login</div>');
            redirect('auth');
        }
    }

    // public function logout()
    // {

    //     $this->session->unset_userdata('email');
    //     $this->session->unset_userdata('id_role');
    //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logout berhasil!</div>');
    //     redirect('auth');
    // }

    // public function blocked()
    // {
    //     $data['pelanggan'] = $this->db->get_where('pelanggan', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['title'] = 'TIDAK MEMILIKI AKSES!';
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('auth/blocked');
    //     $this->load->view('templates/footer', $data);
    // }
}