<?php

class m_sewamobil extends CI_model
{
    private $_table = "cars"; //nama tabel
    //nama kolom di tabel, harus sama huruf besar dan huruf kecilnya
    public $id_mobil;
    public $jenis_mobil;
    public $spesifikasi_mobil;
    public $start_harga;
    public $gambar_mobil = "default.jpg";

    //mengembalikan sebuah array yang berisi rules.
    public function rules()
    {
        return [
            [
                'field' => 'jenis_mobil',
                'label' => 'Jenis_mobil',
                'rules' => 'required'
            ],

            [
                'field' => 'spesifikasi_mobil',
                'label' => 'Spesifikasi_mobil',
                'rules' => 'required'
            ],

            [
                'field' => 'start_harga',
                'label' => 'Start_harga',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_mobil" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post(); //ambil data dari form
        $this->id_mobil = uniqid(); // membuat id unik
        $this->jenis_mobil = $post['jenis_mobil']; // isi field jenis_mobil
        $this->spesifikasi_mobil = $post["spesifikasi_mobil"]; //isi field spesifikasi mobil
        $this->start_harga = $post["start_harga"]; //isi field start harga sewa mobil
        $this->gambar_mobil = $this->_uploadGambar();;
        return $this->db->insert($this->_table, $this); //simpan ke database
    }
    public function update()
    {
        $post = $this->input->post(); //ambil data dari form
        $this->id_mobil = $post["id"]; // membuat id unik
        $this->jenis_mobil = $post['jenis_mobil']; // isi field jenis_mobil
        $this->spesifikasi_mobil = $post["spesifikasi_mobil"]; //isi field spesifikasi mobil
        $this->start_harga = $post["start_harga"]; //isi field star harga sewa mobil
        if (!empty($_FILES["gambar_mobil"]['jenis_mobil'])) {
            $this->gambar_mobil = $this->_uploadGambar();;
        } else {
            $this->gambar_mobil = $post["old_image"];
        }
        print_r($this->upload->display_errors());
        return $this->db->update($this->_table, $this, array('id_mobil' => $post['id'])); //simpan ke database
    }
    public function delete($id)
    {
        $this->_deleteGambar($id);
        return $this->db->delete($this->_table, array("id_mobil" => $id));
    }

    private function _uploadGambar()
    {
        $config['upload_path']      = './assets/img/'; //menentukan alamat lokasi file akan terupload
        $config['allowed_types']    = 'gif|jpg|png'; //membatasi tipe file yang boleh di upload
        $config['file_name']        = $this->id_mobil; //menentukan nama file yang di ambil dari id_mobil dengan $this->id_mobil
        $config['overwrite']        = true; //menindih file yang sudah terupload saat di upload file baru (edit data).
        $config['max_size']         = 1024; //menentukan batasan ukuran file
        // $config['max_width']     = 1024;
        // $config['max_height']    = 768;

        $this->load->library('upload', $config); //load library upload dengan konfigurasi yang sudah ditentukan

        if ($this->upload->do_upload('gambar_mobil')) {
            return $this->upload->data('file_name');
        }
        //print_r($this->upload->display_errors());
        return "default.jpg"; //jika upload gagal maka akan dikembalikan ke default.jpg
    }

    private function _deleteGambar($id)
    {
        $mobil = $this->getById;
        if ($mobil->gambar_mobil != "default.jpg") {
            $filename = explode(".", $mobil->gambar_mobil)[0]; //mengambil nama file dengan fungsi explode()
            //cari file berdasarkan nama tersebut dengan fungsi glob()
            //setelah file ditemukan, lalu kita gunakan fungsi array_map() untuk mengeksekusi unlink() pada tiap file yang ditemukan
            return array_map('unlink', glob(FCPATH . "./assets/img/$filename.*")); //mengambil semua ekstensi yang dipilih
        }
    }

    public function input_rent($idUser){
        date_default_timezone_set('Asia/Jakarta');
        $timestamp = date('Y-m-d H:i:s');
        $data = array (
            'id_user'           => $idUser,
            'id_mobil'          => $this->input->post('idMobil'),
            'tgl_sewa'          => $this->input->post('tglPenyewaan'),
            'tgl_kembali'       => $this->input->post('tglPengembalian'),
            'waktu_ambil'       => $this->input->post('waktu'),
            'alamat'            => $this->input->post('alamat'),
            'totalHariPinjam'   => $this->input->post('hari'),
            'total_bayar'       => $this->input->post('total'),
            'nama_rekening'     => $this->input->post('nama-rekening'),
            'nomor_kartu'       => $this->input->post('nomor-rekening'),
            'masa_akhir_kartu'  => strval($this->input->post('MM')).'-'.strval($this->input->post('YY')),
            'cvv'               => $this->input->post('CVV'),
            'created_at'        => $timestamp,
            'status'            => 'WAITING'
        );

        $this->db->insert('rent',$data);

        $dataa = array (
            'status'    => 'UNAVAILABLE'
        );
        $this->db->where('id_mobil', $this->input->post('idMobil'))
                ->update('cars',$dataa);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        }else {
            return FALSE;
        }
    }
}
