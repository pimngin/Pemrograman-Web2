<?php

require_once "Buku.php";

class DaftarBukuModel{

    public function getData(){
        $daftar_buku = array(
            new Buku('Belajar Pemrograman Web','Robert T','Informatika','2024'),
            new Buku('Matematika','Rinaldi','Andi P','2017'),
            new Buku('Kakultus','Emely 5','Airlanggan','2024'),
            new Buku('Meteoligi','Penelitian','James w','2018'),
        );
        return $daftar_buku;
    }

    public function getKolomTabel(){
        $kolom_tabel = array(
            'No','Judul','Pengarang','Penerbit','Tahun'
        );
        return $kolom_tabel;
    }
}