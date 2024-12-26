<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('anggota');
    }

    
    public function anggota()
    {
      $anggotaModel = model('AnggotaModel');
      $data['anggota'] = $anggotaModel->findAll();
      return view('anggota',$data);
    }
    public function create_anggota()
    {
        $anggotaModel = model('AnggotaModel');
        $data = $this->request->getPost();

        if ($anggotaModel->insert($data, false)) {
            return redirect()->to('anggota')->with('sukses', 'Data berhasil disimpan!');
        } else {
            return redirect()->back()->with('gagal', 'Data gagal disimpan!');
        }
    }
}
