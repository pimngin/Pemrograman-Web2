<?php

include_once "Orang.php";

class OrangInggris extends Orang{
    //override
    public function ucapSalam(){
       echo "Hello My name is" . $this->nama;
    }
}