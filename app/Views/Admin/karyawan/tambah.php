<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<form>
<div class="form-grop">
<label for="">Nama</label>
<input type="text" name="nama_karyawan" id="" class="form-control" placeholder="Nama Karyawan" aria-describedby="helpId">
</div>

<div class="form-grop">
<label for="">Jenis Kelamin</label>
<input type="text" name="jk" id="" class="form-control" placeholder="Jenis Kelamin" aria-describedby="helpId">
</div>

<div class="form-grop">
<label for="">Telfon</label>
<input type="text" name="no_tlp" id="" class="form-control" placeholder="Nomor Telfon" aria-describedby="helpId">
</div>

<div class="form-grop">
<button class="btn btn-primary">Simpan</button>
</div>
</form>
<?= $this->endSection() ?>