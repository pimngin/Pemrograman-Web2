<?php

require_once "Model/DaftarBukuModel.php";

class BukuController{

    public function jalankan(){

        //menggunakan model
        $dataModel = new DaftarBukuModel();

        //menggunakan dataModel ke BukuView dan menampilkannya
        include "View/BukuView.php";


    }
}