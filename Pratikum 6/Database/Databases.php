<?php

class Databases{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $databasesName = "perpustakaan";
    private $koneksi;

    public function __construct()
    {
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->databasesName);
    }

    public function __destruct()
    {
        $this->koneksi->close();
    }

    public function getKoneksi(){
        return $this->koneksi;
    }
}