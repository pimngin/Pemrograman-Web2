<?php
class Orang{
    protected $nama;

    //contrukctor
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    //methot
    public function ucapSalam(){
        echo "Halo nama saya " . $this->nama;
    }
}