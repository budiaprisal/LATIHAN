<div class="container">
<h1?><?= $judul; ?></h1>
<form method="POST" action="<?=base_url('index.php/homeprosesdata/hasilhitung') ?>">

    <input  type="number" name="angka1" class="form-control"/><br>
    <input type="number"  name="angka2" class="form-control"/><br>
    <select name="hitung">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="/">/</option>
    <option value="*">*</option>
    </select>
    <button type="submit">hitung</button>
</form>