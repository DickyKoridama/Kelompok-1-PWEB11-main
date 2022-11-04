<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\Karyawan as AdminKaryawan;
use App\Controllers\BaseController;
use App\Models\KaryawanModel;
class Karyawan extends BaseController
{
    public function __construct(){
        $this->karyawan = new KaryawanModel();
    }

    public function index()
    {
        $data['karyawan'] = $this->karyawan ->findAll();
        return view('Admin/karyawan/index', $data);
    }

    public function edit()
    {
        return view('Admin/karyawan/edit');
    }

    public function tambah()
    {
        return view('Admin/karyawan/tambah');
    }
}
