<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratikum 3</title>
</head>
<body>
    <h1>Konsep Pewarian</h1>
    <div class=""> 
        <?php
            include_once "OrangBiasa.php";
            include_once "OrangInggris.php";
            include_once "Mahasiswa.php";

            $james = new OrangBiasa('James');
            $james ->ucapSalam();
            echo"<br>";

            $parto = new OrangInggris('Parto');
            $parto ->ucapSalam();
            echo"<br>";

            $emely = new Mahasiswa("Emely");
            $emely ->ucapSalam();
            echo "<br>";
            $emely ->setNim("701230009");
            $emely ->setProdi('Sistem Informasi');

            $nilaiEmely = new Nilai();
            $nilaiEmely-> setTugas(90);
            $nilaiEmely->setUts(76);
            $nilaiEmely->setUas(78);

            $emely->setNilai($nilaiEmely);
            $emely->tampilkanData();
        ?>

    </div>
</body>
</html>