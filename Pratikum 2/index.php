<?php
include "Orang.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Word Pratikum 2</h1>
    <div>
        <?php
        //instalasi
        $mahasiswa = new Orang('M. Rifqi Hidayat');

        //menggunakn setter dan getter
      $mahasiswa->setNama('M. Rifqi Hidayat');
      $mahasiswa->setTgllahir('4-03-2005');
      $mahasiswa->setAlamat('Jambi');

      echo "<br>";
      echo "Data Mahasiswa". $mahasiswa->getNama(). "<br>";
      echo "Nama". $mahasiswa->getNama(). "<br>";
      echo "Tgl Lahir". $mahasiswa->getTgllahir(). "<br>";
      echo "Alamat". $mahasiswa->getAlamat(). "<br>";
        
        //methot
        $mahasiswa->ucapkansalam();
        
        echo "<Br>";
        $mahasiswa2 = new Orang('Akeno himejima');
        


        $mahasiswa2->ucapkansalam();
        ?>
    </div>
</body>

</html>