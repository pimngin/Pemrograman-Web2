<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 10px 0;
            text-align: center;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .navbar {
            width: 100%;
            background-color: rgb(0, 152, 166);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            left: 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
        }
        .navbar .logo {
            height: 100px;
            margin-right: 10px;
        }
        .navbar h1 {
            margin: 0;
            font-size: 24px;
            flex-grow: 1;
            text-align: center;
        }
        .logout-button {
            background-color: #ff3333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            white-space: nowrap;
        }
        .logout-button:hover {
            background-color: #cc0000;
        }
        .form-card {
            width: 90%;
            max-width: 800px;
            border: 2px solid #000;
            border-radius: 10px;
            background-color: #ffffff;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: left;
            padding: 20px;
            margin-top: 120px;
        }
        .form-card label {
            font-size: 18px;
            margin-bottom: 10px;
            display: block;
        }
        .form-card input, .form-card select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-card button {
            background-color: rgb(0, 152, 166);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-card button:hover {
            background-color: #007a8b;
        }
        .footer {
            background-color:rgb(0, 152, 166);
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
            font-weight: bold;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="navbar">
    <img src="<?=base_url('images/LOGO RH HTM...png')?>" class="logo" alt="Logo">
    <h1>FORM INPUT DATA</h1>
    <button class="logout-button" onclick="location.href='<?=base_url('logout');?>'">Logout</button>
</div>

<div class="form-card">
    <form action="<?=base_url('anggota'); ?>" method="POST" enctype="multipart/form-data" id="formTambah">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>

        <label for="nik">NIK:</label>
        <input type="text" id="nik" name="nik" placeholder="Masukkan NIK" required>

        <label for="no_kk">No KK:</label>
        <input type="text" id="no_kk" name="no_kk" placeholder="Masukkan No KK" required>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat" required>

        <label for="rt">RT:</label>
        <input type="text" id="rt" name="rt" placeholder="Masukkan RT" required>

        <label for="no_wa">No WhatsApp:</label>
        <input type="text" id="no_wa" name="no_wa" placeholder="Masukkan nomor WhatsApp" required>

        <label for="keterangan">Keterangan:</label>
        <select name="keterangan" id="keterangan" required>
            <option value="">Pilih Keterangan</option>
            <option value="Usaha Mikro">Usaha Mikro</option>
            <option value="Rumah Tangga">Rumah Tangga</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</div>
<div id="successMessage" style="display: none; color: green; margin-top: 15px; font-weight: bold;">
        Data berhasil disimpan.
    </div>
</div>

<script>
    function handleFormSubmit(event) {
        event.preventDefault(); // Mencegah pengiriman form default
        const successMessage = document.getElementById('successMessage');

        // Tampilkan pesan berhasil
        successMessage.style.display = 'block';

        // Tunggu 2 detik, lalu kirim form dan refresh halaman
        setTimeout(() => {
            successMessage.style.display = 'none'; // Sembunyikan pesan (opsional)
            event.target.submit(); // Kirim form
        }, 2000);
    }
</script>

<div class="footer">UAS_Pemrograman_Web2_M. RIFQI HIDAYAT_3A_Sistem_Informasi</div>

</body>
</html>