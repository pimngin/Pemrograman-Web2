<?php

include_once "Orang.php";
include_once "Nilai.php";

class Mahasiswa extends Orang{
    protected  $nim;
    protected  $prodi;
    protected Nilai $nilai;

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function setProdi($prodi){
        $this->prodi = $prodi;
    }

    public function setNilai($nilai){
        $this->nilai = $nilai;
    }

    public function tampilkanData(){
        echo "Nama :" . $this->nama . "<br>";
        echo "NIM :" . $this->nim . "<br>";
        echo "Prodi :" . $this->prodi . "<br>";
        echo "Nilai Tugas :" . $this->nilai->getTugas() . "<br>";
        echo "Nilai UTS :" . $this->nilai->getUts() . "<br>";
        echo "Nilai UAS :" . $this->nilai->getUas() . "<br>";

    }


} 