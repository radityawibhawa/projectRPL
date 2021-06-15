<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_admin');
		$this->load->model('m_auth');
	}

	public function index()
	{
		$email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $userid = $id->role;
        if($userid == 'ADMIN'){
        	$data['user'] = $this->m_admin->get_all_user();
			$data['main_view'] = 'admin/user_list';
			$this->load->view('admin/template', $data);
        } else if($userid == 'MANAGER'){
        	redirect('Admin/manager');
        } else {
        	redirect('Beranda');
        }
	}

	public function aprrove(){
		$email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $userid = $id->role;
        if($userid == 'ADMIN'){
			$idUser = $this->uri->segment(3);
			if($this->m_admin->approve($idUser) == TRUE){
				$data['notif'] = 'APPROVE SUCCESS!!';
				$data['user'] = $this->m_admin->get_all_user();
				$data['main_view'] = 'admin/user_list';
				$this->load->view('admin/template', $data);
			}
		} else if($userid == 'MANAGER'){
        	redirect('Admin/manager');
        } else {
        	redirect('Beranda');
        }
	}

	public function finishRent(){
		$email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $userid = $id->role;
        if($userid == 'ADMIN'){
			$rentid = $this->uri->segment(3);
			$carid = $this->uri->segment(4);
			$mobil = $this->m_admin->get_data_cars($carid);
			$totMobil = $mobil->totalPinjam;
			if($this->m_admin->finishRent($rentid,$carid,$totMobil) == TRUE){
				$data['notif'] = 'FINISH SUCCESS!!';
				$data['user'] = $this->m_admin->get_all_rent();
				$data['main_view'] = 'admin/rent';
				$this->load->view('admin/template', $data);
			}
		} else if($userid == 'MANAGER'){
        	redirect('Admin/manager');
        } else {
        	redirect('Beranda');
        }
	}

	public function viewUserDetail(){
		$email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $userid = $id->role;
        if($userid == 'ADMIN'){
			$idUser = $this->uri->segment(3);
			$data['user'] = $this->m_admin->get_user_data_detail($idUser);
			$data['main_view'] = 'admin/user_detail';
			$this->load->view('admin/template', $data);
		} else if($userid == 'MANAGER'){
        	redirect('Admin/manager');
        } else {
        	redirect('Beranda');
        }
	}

	public function viewMessage(){
		$email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $userid = $id->role;
        if($userid == 'ADMIN'){
			$data['message'] = $this->m_admin->get_message();
			$data['main_view'] = 'admin/message';
			$this->load->view('admin/template', $data);
		} else if($userid == 'MANAGER'){
        	redirect('Admin/manager');
        } else {
        	redirect('Beranda');
        }
	}

	public function viewRent(){
		$email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $userid = $id->role;
        if($userid == 'ADMIN'){
			$data['rent'] = $this->m_admin->get_all_rent();
			$data['main_view'] = 'admin/rent';
			$this->load->view('admin/template', $data);
		} else if($userid == 'MANAGER'){
        	redirect('Admin/manager');
        } else {
        	redirect('Beranda');
        }
	}

	public function viewCars(){
		$email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $userid = $id->role;
        if($userid == 'ADMIN'){
			$data['cars'] = $this->m_admin->get_all_cars();
			$data['main_view'] = 'admin/cars';
			$this->load->view('admin/template', $data);
		} else if($userid == 'MANAGER'){
        	redirect('Admin/manager');
        } else {
        	redirect('Beranda');
        }
	}

	public function viewRentDetail(){
		$email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $userid = $id->role;
        if($userid == 'ADMIN'){
			$rentid = $this->uri->segment(3);
			$email = $this->session->userdata('email');
	        $data['id'] = $this->m_auth->get_id_user_by_email($email);
			$data['rent'] = $this->m_admin->get_rent_detail($rentid);
			$data['main_view'] = 'admin/rent_detail';
			$this->load->view('admin/template', $data);
		} else if($userid == 'MANAGER'){
        	redirect('Admin/manager');
        } else {
        	redirect('Beranda');
        }
	}

	public function history(){
		$email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $userid = $id->role;
        if($userid == 'ADMIN'){
			$data['rent'] = $this->m_admin->get_all_rent();
			$data['main_view'] = 'admin/history';
			$this->load->view('admin/template', $data);
		} else if($userid == 'MANAGER'){
        	redirect('Admin/manager');
        } else {
        	redirect('Beranda');
        }
	}

	public function manager(){
		$email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $userid = $id->role;
        if($userid == 'MANAGER'){
			$data['rent'] = $this->m_admin->get_all_rent();
			$data['main_view'] = 'admin/rent_manager';
			$this->load->view('admin/template_manager', $data);
		} else if($userid == 'ADMIN'){
        	redirect('Admin/manager');
        } else {
        	redirect('Beranda');
        }

	}

	public function managerViewRentDetail(){
		$email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $userid = $id->role;
        if($userid == 'MANAGER'){
			$rentid = $this->uri->segment(3);
			$email = $this->session->userdata('email');
	        $data['id'] = $this->m_auth->get_id_user_by_email($email);
			$data['rent'] = $this->m_admin->get_rent_detail($rentid);
			$data['main_view'] = 'admin/rent_detail';
			$this->load->view('admin/template_manager', $data);
		} else if($userid == 'ADMIN'){
        	redirect('Admin');
        } else {
        	redirect('Beranda');
        }
	}

	public function addCars(){
		$email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $userid = $id->role;
        if($userid == 'ADMIN'){
			$data['main_view'] = 'admin/add_car';
			$this->load->view('admin/template', $data);
		} else if($userid == 'MANAGER'){
        	redirect('Admin/manager');
        } else {
        	redirect('Beranda');
        }
	}

	public function addCar(){
		$email = $this->session->userdata('email');
        $id = $this->m_auth->get_id_user_by_email($email);
        $userid = $id->role;
        if($userid == 'ADMIN'){
        	$this->form_validation->set_rules('plat','Plat Mobil','is_unique[cars.platMobil]');

        	if($this->form_validation->run() == TRUE){
        		if($this->input->post('submit')){
		            $config['upload_path'] = './uploads/cars/';
		            $config['allowed_types'] = 'jpeg|jpg|png';
		            $config['max_size']  = '5000';
		            $this->load->library('upload', $config);

		            if($this->upload->do_upload('foto')){
		            	if($this->m_admin->addCar($this->upload->data()) == TRUE){
		            		$data['cars'] = $this->m_admin->get_all_cars();
		            		$data['success'] = 'ADD CAR SUCCESS!!!';
			            	$data['main_view'] = 'admin/cars';
							$this->load->view('admin/template', $data);
		            	} else {
		            		$data['error'] = 'ADD CAR FAILED!!!';
			            	$data['main_view'] = 'admin/add_car';
							$this->load->view('admin/template', $data);
		            	}
		            }else {
		            	$data['error'] = $this->upload->display_errors();
		            	$data['main_view'] = 'admin/add_car';
						$this->load->view('admin/template', $data);
		            }
				}
        	} else {
        		$data['error'] = validation_errors();
            	$data['main_view'] = 'admin/add_car';
				$this->load->view('admin/template', $data);
        	}
		} else if($userid == 'MANAGER'){
        	redirect('Admin/manager');
        } else {
        	redirect('Beranda');
        }
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */