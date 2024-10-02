<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" 
    integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>Fromo Mahasiswa</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="">From Mahasiswa</h1>
                <hr>
                <?php
                    require_once "BsFrom.php";
                    $formMhs = new BsFrom();
                    $formMhs->setInputText('nama','nama','Nama');
                    $formMhs->setInputText('nim','nim','NIM');
                    $formMhs->setInputText('prodi','prodi','Program Studi');
                    $formMhs->setInputText('fakultas','fakultas','Fakultas');
                    $formMhs->setButton('Simpan');
                    $formMhs->showFrom();

                ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>

  </body>
</html>