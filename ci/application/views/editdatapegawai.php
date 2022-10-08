<div class="container">
    <h2>Edit data pegawai</h2>

    <form action="<?= base_url('index.php/homeprosesdata/updatedatapegawai') ?>" method="post">

        <div class="form-group">
            <label for="email">Nama:</label>
            <input type="text" class="form-control" id="Nama" placeholder="Enter Nama" name="nama" required value="<?= $datapegawai['Nama'] ?>">
            <input type="hidden" class="form-control" name="id" required value="<?= $datapegawai['kodepegawai'] ?>">
        </div>
        <div class="form-group">
            <label for="pwd">Alamat:</label>
            <textarea name="alamat" class="form-control"><?= $datapegawai['Alamat'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="pwd">Tanggal lahir:</label>
            <input type="date" class="form-control" id="Umur" placeholder="Enter Umur" name="tgllahir" required value="<?= $datapegawai['TanggalLahir'] ?>">
        </div>
        <div class="form-group">
            <label for="pwd">Kota:</label>
            <input type="text" class="form-control" id="Kota" placeholder="Enter Kota" name="kota" required value="<?= $datapegawai['Kota'] ?>">
        </div>

        <div class="form-group">
            <label for="pwd">Propinsi:</label>
            <input type="text" class="form-control" id="propinsi" placeholder="Enter Propinsi" name="propinsi" required value="<?= $datapegawai['Provinsi'] ?>">
        </div>
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="update" class="btn btn-primary">Update</button>

    </form>