<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\Karyawan as AdminKaryawan;
use App\Controllers\BaseController;
use App\Models\KaryawanModel;
use App\Models\UserModel;
class Karyawan extends BaseController
{
    public function __construct(){
        $this->karyawan = new KaryawanModel();
        $this->user = new UserModel();
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
        $data = $this->request->getPost();
        if(count($data)>0){
            $this->karyawan->insert($data);
            $data['karyawan'] = $this->karyawan ->findAll();
            return view('Admin/karyawan/index', $data);
        }else{
        return view('Admin/karyawan/tambah');
    }}
}
