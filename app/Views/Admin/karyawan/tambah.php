<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<form action="<?= base_url('tambah') ?>" method="post">

<div class="form-grop">
<label for="">Nama</label>
<input type="text" name="nama_karyawan" id="" class="form-control" placeholder="Nama Karyawan" aria-describedby="helpId">
</div>

<div class="form-grop">
<label for="">Nomor Induk Karyawan</label>
<input type="text" name="nik" id="" class="form-control" placeholder="Nomor Induk Karyawan" aria-describedby="helpId">
</div>

<div class="form-grop">
<label for="">Tempat Lahir</label>
<input type="text" name="tempat_lahir" id="" class="form-control" placeholder="Tempat Lahir" aria-describedby="helpId">
</div>

<div class="form-grop">
<label for="">Tanggal Lahir</label>
<input type="text" name="tanggal_lahir" id="" class="form-control" placeholder="Tanggal Lahir" aria-describedby="helpId">
</div>

<div class="form-grop">
<label for="">Jenis Kelamin</label>
<input type="text" name="jk" id="" class="form-control" placeholder="Jenis Kelamin" aria-describedby="helpId">
</div>

<div class="form-grop">
<label for="">Agama</label>
<input type="text" name="agama" id="" class="form-control" placeholder="Agama" aria-describedby="helpId">
</div>



<div class="form-grop">
<label for="">Jabatan</label>
<input type="text" name="jabatan" id="" class="form-control" placeholder="Jabatan" aria-describedby="helpId">
</div>

<div class="form-grop">
<label for="">Kontak</label>
<input type="text" name="kontak" id="" class="form-control" placeholder="Kontak" aria-describedby="helpId">
</div>

<div class="form-grop">
<button class="btn btn-primary">Simpan</button>
</div>
</form>
<?= $this->endSection() ?>