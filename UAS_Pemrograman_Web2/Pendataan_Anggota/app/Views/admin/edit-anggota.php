<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anggota</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6f9;
        }

        .container {
            margin-top: 20px;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #28a745;
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px 10px 0 0;
        }

        .card-header img {
            width: 50px;
            height: 50px;
            margin-right: 15px;
        }

        .card-header h2 {
            margin: 0;
            flex: 1;
            text-align: center;
        }

        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .form-control {
            border-radius: 5px;
        }

        .form-label {
            display: flex;
            align-items: center;
        }

        .form-label i {
            margin-right: 8px;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .modal-content form input,
        .modal-content form select {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <img src="<?= base_url('images/logo.png') ?>" alt="Logo">
                <h2>Form Edit Data Anggota</h2>
            </div>
            <div class="card-body">
                <form action="<?= base_url('admin/anggota/' . $anggotaMasyarakat['id'] . '/update'); ?>" method="POST" enctype="multipart/form-data" id="formEdit">
                    <div class="mb-3">
                        <label for="nik" class="form-label"><i class="fas fa-id-card"></i> NIK</label>
                        <input type="text" name="nik" id="nik" class="form-control" value="<?= $anggotaMasyarakat['nik'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_kk" class="form-label"><i class="fas fa-address-book"></i> NO KK</label>
                        <input type="text" name="no_kk" id="no_kk" class="form-control" value="<?= $anggotaMasyarakat['no_kk'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label"><i class="fas fa-user"></i> Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $anggotaMasyarakat['nama'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="rt" class="form-label"><i class="fas fa-home"></i> RT</label>
                        <input type="text" name="rt" id="rt" class="form-control" value="<?= $anggotaMasyarakat['rt'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label"><i class="fas fa-map-marker-alt"></i> Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $anggotaMasyarakat['alamat'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_wa" class="form-label"><i class="fas fa-phone"></i> NO WA</label>
                        <input type="text" name="no_wa" id="no_wa" class="form-control" value="<?= $anggotaMasyarakat['no_wa'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label"><i class="fas fa-info-circle"></i> Keterangan</label>
                        <select class="form-control" name="keterangan" id="keterangan" required>
                            <option value="" <?= $anggotaMasyarakat['keterangan'] == '' ? 'selected' : '' ?>>Pilih Keterangan</option>
                            <option value="Usaha Mikro" <?= $anggotaMasyarakat['keterangan'] == 'Usaha Mikro' ? 'selected' : '' ?>>Usaha Mikro</option>
                            <option value="Rumah Tangga" <?= $anggotaMasyarakat['keterangan'] == 'Rumah Tangga' ? 'selected' : '' ?>>Rumah Tangga</option>
                        </select>
                    </div>
                    <div class="mb-3 text-center">
                        <a href="<?= base_url('admin/anggota') ?>" class="btn btn-secondary">Kembali</a>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
