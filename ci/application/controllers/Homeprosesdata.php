<?php

defined('BASEPATH') or exit('Akses tidak diizinkan');


class Homeprosesdata extends CI_Controller

{
   function __construct()
   {
      parent::__construct();
      $this->load->model('home_model');
   }

   public function simpandatapegawai()
   {
      $namapegawai = $this->input->post('nama');
      $alamat      = $this->input->post('alamat');
      $tgllahir    = $this->input->post('tgllahir');
      $kota        = $this->input->post('kota');
      $propinsi    = $this->input->post('propinsi');

      $data['Nama'] = $namapegawai;
      $data['Alamat'] = $alamat;
      $data['TanggalLahir'] = $tgllahir;
      $data['Kota'] = $kota;
      $data['Provinsi'] = $propinsi;

      $this->home_model->insert_pegawai($data);
      $this->session->set_flashdata('Pesan', '<div class="alert alert-primary" role="alert">Data berhasil disimpan</div');
      redirect('home/tampildatapegawai');
   }


   public function updatedatapegawai()
   {
      $id = $this->input->post('id');
      $namapegawai = $this->input->post('nama');
      $alamat      = $this->input->post('alamat');
      $tgllahir    = $this->input->post('tgllahir');
      $kota        = $this->input->post('kota');
      $propinsi    = $this->input->post('propinsi');

      $data['Nama'] = $namapegawai;
      $data['Alamat'] = $alamat;
      $data['TanggalLahir'] = $tgllahir;
      $data['Kota'] = $kota;
      $data['Provinsi'] = $propinsi;

      $this->home_model->update_datapegawai($id, $data);
      $this->session->set_flashdata('Pesan', '<div class="alert alert-primary" role="alert">Data berhasil di Update</div');
      redirect('home/tampildatapegawai');
   }


   public function deleteadatapegawai($id)
   {
      $this->home_model->delete_datapegawai($id);
      $this->session->set_flashdata('Pesan', '<div class="alert alert-primary" role="alert">Data berhasil di Hapus</div');
      redirect('home/tampildatapegawai');
   }

   public function hasilhitung()
   {
      $this->input->post();
      $angka1 = $this->input->post('angka1');
      $angka2 = $this->input->post('angka2');
      $hitung = $this->input->post('hitung');

      if ($hitung == "+") {
         $hasil = $angka1 + $angka2;
      } elseif ($hitung == "-") {
         $hasil = $angka1 - $angka2;
      } elseif ($hitung == "/") {
         $hasil = $angka1 / $angka2;
      } else {
         $hasil = $angka1 * $angka2;
      }


      echo "$angka1 $hitung $angka2 = $hasil";
   }

   public function uploadfile()
   {
      $config['upload_path'] = './';
      $config['allowed_types'] = 'jpg|gif|Jpg|JPG|JPEG|PNG|png';
      $config['max_size'] = 1000;
      $config['max_width'] = 1024;
      $config['max_height'] = 786;
      $config['overwrite'] = TRUE;
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('berkas')) {
         $data['error'] =
            $this->upload->display_errors();
         $this->load->view('upload', $data);
      } else {
         $data['error'] = $this->upload->data();
         $this->load->view('upload', $data);
      }
   }
}
