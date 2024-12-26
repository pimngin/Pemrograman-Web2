<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Anggota</title>
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

        .header {
            background-color:rgb(40, 167, 167);
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-radius: 10px 10px 0 0;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
        }

        .header img {
            width: 65px;
            height: 65px;
            
            
        }

        .thead-green {
            background-color: rgb(40, 167, 167);
            color: white;
        }

        .card-header {
            background-color: rgb(40, 167, 167);
            color: white;
        }

        .btn-primary {
            background-color:rgb(28, 80, 121);
            border-color:rgb(40, 78, 167);
        }
        .btn-edit{
            background-color:rgb(219, 164, 36);
            border-color: #f4f6f9;
        }
        .btn-edit:hover{
            background-color: rgb(100, 75, 18);
        }

        .btn-hapus{
            background-color:rgb(216, 34, 34);
            border-color: #f4f6f9;
        }

        .btn-hapus:hover{
            background-color:rgb(99, 16, 16) ;
        }

        .btn-dark {
            background-color: #28a728;
            border-color: #28a728;
        }

        .btn-success {
            background-color: #28a728;
            border-color: #28a728;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
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

        .btn-group .btn {
            margin-right: 5px;
        }

        .btn-group .btn:last-child {
            margin-right: 0;
        }

        .form-control {
            border-radius: 5px;
        }

        /* Center text in table cells */
        table th,
        table td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="d-flex align-items-center">
                <img src="<?= base_url('images/LOGO RH HTM...png') ?>" alt="User Icon">
                <h1 class="ml-3">PENGELOLA__ANGGOTA</h1>
            </div>
            <input type="text" class="form-control w-25" id="searchInput" placeholder="Pencarian">
            </div>
        <div class="card mt-3">
            <div class="card-header">Daftar Anggota</div>
            <div class="card-body">
                <button class="btn btn-primary mb-3" id="openModal">+ Tambah Anggota</button>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-green">
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>No KK</th>
                                <th>Nama</th>
                                <th>RT</th>
                                <th>Alamat</th>
                                <th>No WA</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- data dummy -->
                            <?php 
                            $no = 1;
                            foreach ($anggota as $anggotaMasyarakat): ?>
                                
                                <tr>
                                <td><?= $no++; ?></td>                                    <td><?= $anggotaMasyarakat['nik']; ?></td>
                                    <td><?= $anggotaMasyarakat['no_kk']; ?></td>
                                    <td><?= $anggotaMasyarakat['nama']; ?></td>
                                    <td><?= $anggotaMasyarakat['rt']; ?></td>
                                    <td><?= $anggotaMasyarakat['alamat']; ?></td>
                                    <td><?= $anggotaMasyarakat['no_wa']; ?></td>
                                    <td><?= $anggotaMasyarakat['keterangan']; ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="<?= base_url('admin/anggota/' . $anggotaMasyarakat['id'] . '/edit') ?>" class="btn btn-edit btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                            <button class="btn btn-hapus btn-sm" data-toggle="modal" data-target="#hapusModal" data-id="<?= $anggotaMasyarakat['id']; ?>"><i class="fas fa-trash"></i> Hapus</button> </div>                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Tambah Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/anggota'); ?>" method="POST" enctype="multipart/form-data" id="formTambah">
                        <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK" required>
                        <input type="text" class="form-control" name="no_kk" id="no_kk" placeholder="No KK" required>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                        <input type="text" class="form-control" name="rt" id="rt" placeholder="RT" required>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
                        <input type="text" class="form-control" name="no_wa" id="no_wa" placeholder="No WA" required>
                        <select class="form-control" name="keterangan" id="keterangan" required>
                            <option value="">Pilih Keterangan</option>
                            <option value="Usaha Mikro">Usaha Mikro</option>
                            <option value="Rumah Tangga">Rumah Tangga</option>
                        </select>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal hapus-->
    <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus Data</h5> <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/index.php/hapus" method="POST" id="formHapus"> <input type="hidden" name="id" id="idHapus" value=""> </form>
                    <p class="">Apakah Anda yakin menghapus data dengan id <span id="textId"></span> ini?</p>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> <button type="submit" form="formHapus" class="btn btn-danger"><i class="bi-trash"></i>Hapus</button> </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#openModal').click(function() {
            $('#modal').modal('show');
        });
        $('.btn-close').click(function() {
            $('#hapusModal').modal('hide');
        });
        $('button[data-toggle="modal"]').click(function() {
            var id = $(this).data('id');
            $('#idHapus').val(id);
            $('#textId').text(id);
            $('#hapusModal').modal('show');
        });

        // Fungsi pencarian
        $('#searchInput').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('table tbody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>

</body>

</html>