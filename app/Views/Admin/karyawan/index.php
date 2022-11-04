<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="card">
<div class="card-header">
    <h3>Daftar Karyawan</h3>
</div>
<div class="card-body">
<div class="table-responsive">

<table class="table">
<thead>
    <tr>
        <th>No</th>
        <th>Nama Karyawan</th>
        <th>Nomor Induk Karyawan</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Agama</th>
        <th>Jenis Kelamin</th>
        <th>Jabatan</th>
        <th>Kontak</th>
    </tr>
</thead>
<tbody>
    <?php foreach($karyawan as $key=>$value):?>
    <tr>
        <td><?= $key+1;?></td>
        <td><?= $value['nama_karyawan']?></td>
        <td><?= $value['nik']?></td>
        <td><?= $value['tempat_lahir']?></td>
        <td><?= $value['tanggal_lahir']?></td>
        <td><?= $value['agama']?></td>
        <td><?= $value['jk']?></td>
        <td><?= $value['agama']?></td>
        <td><?= $value['kontak']?></td>
        <td><?= $value['jabatan']?></td>
    </tr>
    <?php endforeach?>
    
</tbody>
</table>

</div>
</div>
</div>


<?= $this->endSection() ?>