<div class="container">
  <h2>Form Input</h2>

  <form action="<?= base_url('index.php/homeprosesdata/simpandatapegawai') ?>" method="post">

    <div class="form-group">
      <label for="email">Nama:</label>
      <input type="text" class="form-control" id="Nama" placeholder="Enter Nama" name="nama">
    </div>
    <div class="form-group">
      <label for="pwd">Alamat:</label>
      <input type="text" class="form-control" id="Alamat" placeholder="Enter Alamat" name="alamat">
    </div>
    <div class="form-group">
      <label for="pwd">Tanggal lahir:</label>
      <input type="date" class="form-control" id="Umur" placeholder="Enter Umur" name="tgllahir">
    </div>
    <div class="form-group">
      <label for="pwd">Kota:</label>
      <input type="text" class="form-control" id="Kota" placeholder="Enter Kota" name="kota">
    </div>

    <div class="form-group">
      <label for="pwd">Propinsi:</label>
      <input type="text" class="form-control" id="Propinsi" placeholder="Enter Propinsi" name="propinsi">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>