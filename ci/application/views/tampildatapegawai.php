<div class="container">

  <p>Data Pegawai</p>

  <?= $this->session->flashdata('Pesan') ?>
  <div class="table-responsive">
    <a href="<?= base_url('index.php/home/tambahdatapegawai') ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Tambah Data</a>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Umur</th>
          <th>Kota</th>
          <th>Propinsi</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($pegawai as $resultpegawai) {

        ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $resultpegawai['Nama'] ?></td>
            <td><?= $resultpegawai['Alamat'] ?></td>
            <td><?php $tahunlahir = substr($resultpegawai['TanggalLahir'], 0, 4);
                $tahunsekarang = date("Y");
                $umur = $tahunsekarang - $tahunlahir;
                echo $umur; ?></td>

            <td><?= $resultpegawai['Kota'] ?></td>
            <td><?= $resultpegawai['Provinsi'] ?></td>
            <td><a href="<?= base_url("index.php/home/editdatapegawai/$resultpegawai[kodepegawai]") ?>" class="btn btn-primary btn-sm active">Edit</a>|<a href="<?= base_url("index.php/homeprosesdata/deleteadatapegawai/ $resultpegawai[kodepegawai]") ?>" class="btn btn-danger btn-sm active" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>