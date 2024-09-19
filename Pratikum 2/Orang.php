<?php 

class Orang {
    //Properti
    private string $nama;
    private string $tgllahir;
    protected string $alamat;

    //construktor
    public function __construct($nama)
    {
        $this->nama = $nama;
        echo "objek ".$this->nama." dibuat <br>";
        $this->tampilkanpassword();
    }
    
    //destruktor
    public function __destruct()
    {
        echo "objek ". $this->nama." dihapus <br>";
    }

    //methot
    public function ucapkansalam(){
        echo "<h2> Hallo perkenalkan nama saya ". $this->nama ." </h2> ";
    }

    private function tampilkanpassword(){
        echo "Rahasia1234";
    }

    //setter
    public function setNama($nama){
        $this->nama = $nama;
    }

    //getter
    public function getNama(){
        return $this->nama;
    }

    public function setTgllahir($tgllahir){
        $this->tgllahir = $tgllahir;
    }

    public function getTgllahir(){
        return $this->tgllahir;
    }

    public function setAlamat($alamat){
        $this->alamat = $alamat;
    }

    public function getAlamat(){
        return $this->alamat;
    }
}