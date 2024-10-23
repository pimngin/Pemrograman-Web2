<?php 

require_once "Model/DaftarBukuModel.php";

class BukuController{

  public function jalankan(){

    //menggunakan model
    $dataModel = new DaftarBukuModel();
   
    //mengirim datamodel ke bukuview dan menampilkannya 
    include "View/BukuView.php";
  }

  public function editBuku(){
    $id = $_GET['id'];

    $daftar_buku = new DaftarBukuModel();
    $buku = $daftar_buku->getDataById($id);

    include_once "View/EditBukuView.php";
  }

  public function updateBuku(){
    $buku = new Buku($_POST['judul'], $_POST['pengarang'],$_POST['penerbit'],$_POST['tahun']);
    $buku->setId($_POST['id']);

    $daftar_buku = new DaftarBukuModel;

    $daftar_buku->update($buku);

    session_start();
    $_SESSION['succsess'] = "Data berhasil diupdate";

    header('Location: http://localhost/index.php');
    exit;

  }
  public function simpanBuku(){
    $buku = new Buku($_POST['judul'], $_POST['pengarang'],$_POST['penerbit'],$_POST['tahun']);

    $daftar_buku = new DaftarBukuModel();
    $daftar_buku->simpan($buku);

    session_start();
    $_SESSION['succsess'] = "Data berhasil disimpan";
    header('Location: http://localhost/index.php');
    exit;
  }
  public function hapusBuku(){
    $id = $_POST['id'];

    $daftar_buku = new DaftarBukuModel();

    $daftar_buku->delete($id);
    
    session_start();
    $_SESSION['succsess'] = "Data berhasil dihapus!";
    header('Location: http://localhost/index.php');
    exit;
  }
}