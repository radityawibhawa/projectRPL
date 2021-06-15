<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller //menamaan class controller
{

    function __construct() // mendefinisikan kebutuhan objek sebelum bisa digunakan
    {
        parent::__construct(); // pada baris ini, kita akan mempersiapkan kebutuhan 'parent' class terlebih dahulu, yaitu class pengembalian.
        $this->load->model('m_auth'); //meload model
        $this->load->model('m_pengembalian');
        $this->load->model('m_pelanggan');
        $this->load->model('m_admin');
    }

    public function index() 
    {
        // if($this->session->userdata('role_id') == "1") {
        // 	redirect('admin');	
        // } else if($this->session->userdata('role_id') == "2") {
        // 	redirect('pelanggan');
        // } else{
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $data['id'] = $this->m_auth->get_id_user_by_email($email);
        $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
        $data['title'] = 'Amigotics Rent - Pengembalian'; 
        $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
        $this->load->view('pelanggan/pengembalian',$data); //meload views pengembalian
        $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
        // }
    }

    public function detailKembali(){
        $carid = $this->uri->segment(3);
        $data['details'] = $this->m_pelanggan->get_data_mobil_by_CARID($carid);
        $data['title'] = 'Amigotics Rent - Detail Pengembalian';
        $data['rent'] = $this->m_pengembalian->get_data_rent($carid);
        $this->load->view('pelanggan/header_pelanggan', $data);
        $this->load->view('pelanggan/detail_kembali',$data);
        $this->load->view('pelanggan/footer_pelanggan',$data);
    }
    public function returnCar(){
        $carid = $this->uri->segment(3);
        $email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $idUser = $id->id_user;
        $mobil = $this->m_admin->get_data_mobil($carid);
        $totMobil = $mobil->totalPinjam;
        if($this->input->post('submit')){
            if($this->m_pengembalian->returnCar($carid,$idUser,$totMobil) == TRUE){
                $data['return'] = $this->m_pengembalian->get_mobil_by_id($idUser);
                $data['title'] = 'Amigotics Rent - Pengembalian'; 
                $data['notif'] = 'CAR RETURN SUCCESS';
                $this->load->view('pelanggan/header_pelanggan', $data); //meload views header
                $this->load->view('pelanggan/pengembalian' ,$data); //meload views pengembalian
                $this->load->view('pelanggan/footer_pelanggan',$data); //meload views footer
            }
        }
    }
}
