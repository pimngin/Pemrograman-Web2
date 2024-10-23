<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BukuView</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
        
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Form Update Buku</h1>
      
      <!-- Perbaiki action URL -->
      <form action="/index.php/update" id="formEdit" method="POST">
        <!-- Hidden ID -->
        <input type="hidden" name="id" value="<?=$buku->getId();?>">
        
        <!-- Judul -->
        <div class="mb-3">
          <label for="judul">Judul</label>
          <input type="text" name="judul" id="judul" class="form-control" value="<?=$buku->getJudul();?>">
        </div>
        
        <!-- Pengarang -->
        <div class="mb-3">
          <label for="pengarang">Pengarang</label>
          <input type="text" name="pengarang" id="pengarang" class="form-control" value="<?=$buku->getPengarang();?>">
        </div>
        
        <!-- Penerbit -->
        <div class="mb-3">
          <label for="penerbit">Penerbit</label>
          <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?=$buku->getPenerbit();?>">
        </div>
        
        <!-- Tahun -->
        <div class="mb-3">
          <label for="tahun">Tahun</label>
          <input type="text" name="tahun" id="tahun" class="form-control" value="<?=$buku->getTahun();?>">
        </div>
        
        <!-- Tombol Kembali dan Update -->
        <div class="mb-5">
          <a href="/index.php" class="btn btn-secondary">Kembali</a>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
        
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-qLaTElgkbJRGwmk0JLzZujJ6dpD4D6NC33O5sxiVrLi6S8O4T2JpWDKTPpA53bpL" 
        crossorigin="anonymous"></script>

</body>
</html>