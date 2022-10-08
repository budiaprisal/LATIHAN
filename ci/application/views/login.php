<?= $this->session->flasdate('pesan'); ?>



<form action="<?= base_url('index.php/login/proseslogin') ?>" method="POST">

    <label>username</label>
    <input name="username" class="form-control" placeholder="masukkan username" type="text" />
    <?php echo form_error('username', '<div style="color:red">', '</div>'); ?>
    <label>password</label>
    <input name="password" class="form-control" placeholder="masukkan username" type="password" required />
    <input type="submit" name="login" value="login" class="btn btn-primary" />
</form>