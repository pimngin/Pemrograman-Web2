<?php

require_once "Buku.php";
require_once "Database/Databases.php";

class DaftarBukuModel{


    public function getData(){
        $db = new Databases();
        $koneksi = $db->getKoneksi();
        
        $sql = "SELECT * FROM buku";

        $query = $koneksi->query($sql);

        $daftar_buku = [];

        if($query->num_rows > 0){
            while ($row = $query->fetch_assoc()){
                $buku = new Buku($row['judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
                array_push($daftar_buku, $buku);
            }
        }
        return $daftar_buku;
        
    }

    public function getKolomTabel(){
        $kolom_tabel = array(
            'No','Judul','Pengarang','Penerbit','Tahun'
        );
        return $kolom_tabel;
    }

    //databse perpustakaan
    //tabel buku
    //      id int (11) key auto_inctrement,
    //      judul varchar (150),
    //      pengarang varchar (150),
    //      penerbit varchar (150),
    //      tahun int (5)
}