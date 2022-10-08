<?php

defined('BASEPATH') or exit('Akses tidak diizinkan');


class Jualan extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Jualan_model');
  }

  public function index()
  {

    $produk = $this->Jualan_model->getdataproduk();

    $banner = $this->Jualan_model->getdatabanner();
    $category = $this->Jualan_model->getdatacategory();

    $this->load->view('Jualan/header');

    $this->load->view('Jualan/index');

    $this->load->view('Jualan/footer');
  }
}
