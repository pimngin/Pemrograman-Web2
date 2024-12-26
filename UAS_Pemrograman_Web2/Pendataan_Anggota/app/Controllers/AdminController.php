<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    
    public function anggota()
    {
      $anggotaModel = model('AnggotaModel');
      $data['anggota'] = $anggotaModel->findAll();
      return view('admin/anggota',$data);
    }
    public function create_anggota()
    {
        $anggotaModel = model('AnggotaModel');
        $data = $this->request->getPost();

        if ($anggotaModel->insert($data, false)) {
            return redirect()->to('admin/anggota')->with('sukses', 'Data berhasil disimpan!');
        } else {
            return redirect()->back()->with('gagal', 'Data gagal disimpan!');
        }
    }
    public function edit_anggota($id)
    {
        $anggotaModel = model('AnggotaModel');
        $data['anggotaMasyarakat'] = $anggotaModel->find($id);

        return view('admin/edit-anggota', $data);
    }
    public function update_anggota($id)
    {
        $anggotaModel = model('AnggotaModel');
        $data = $this->request->getPost();

        if ($anggotaModel->update($id, $data)) {
            return redirect()->to('admin/anggota')->with('sukses', 'Data berhasil diupdate!');
        } else {
            return redirect()->back()->with('gagal', 'Data gagal diupdate!');
        }
    }
    public function delete_anggota()
    {
        $id = $this->request->getPost('id');
        $anggotaModel = model('AnggotaModel');
        if ($anggotaModel->delete($id)) {
            return redirect()->to('admin/anggota')->with('sukses', 'Data berhasil dihapus!');
        } else {
            return redirect()->back()->with('gagal', 'Data gagal dihapus!');
        }
    }
    
}
