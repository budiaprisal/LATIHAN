<?php

defined('BASEPATH') or exit('Akses tidak diizinkan');


class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }


    public function index()
    {

        $data['judul'] = 'Halaman judul website anda';
        $data['depan'] = 'Halaman utama';
        $this->load->view('template/header', $data);
        $this->load->view('home_v');
        $this->load->view('template/footer');
    }

    public function profile()
    {

        $data['judul'] = 'Halaman judul profil budi';
        $data['depan'] = 'Halaman depan profil budi';
        $this->load->view('template/header', $data);
        $this->load->view('profile');
        $this->load->view('template/footer');
    }

    public function kalkulator()
    {
        $data['judul'] = 'Halaman kalkulator sederhana';

        $this->load->view('template/header', $data);
        $this->load->view('kalkulator');
        $this->load->view('template/footer');
    }

    public function tampildatapegawai()
    {
        $data['judul'] = "halaman data pegawai";
        $data['pegawai'] = $this->home_model->get_pegawai();
        $this->load->view('template/header', $data);
        $this->load->view('tampildatapegawai');
        $this->load->view('template/footer');
    }

    public function tambahdatapegawai()
    {
        $data['judul'] = "halaman input data pegawai";
        $this->load->view('template/header', $data);
        $this->load->view('tambahdatapegawai');
        $this->load->view('template/footer');
    }


    public function editdatapegawai($kodepegawai = '')
    {
        $data['judul'] = "halaman edit data pegawai";
        $data['datapegawai'] = $this->home_model->select_pegawaiid($kodepegawai);
        $this->load->view('template/header', $data);
        $this->load->view('editdatapegawai');
        $this->load->view('template/footer');
    }

    public function login()
    {
        $data['judul'] = "halamaan login";

        $this->load->view('template/header', $data);
        $this->load->view('login');
        $this->load->view('template/footer');
    }

    public function upload()
    {
        $data['judul'] = "halamaan upload file";
        $data['error'] = "";
        $this->load->view('template/header', $data);
        $this->load->view('upload');
        $this->load->view('template/footer');
    }

    public function downloadfile($namafile)
    {
        force_download(base_url("assets/upload/$namafile", null));
    }
}
