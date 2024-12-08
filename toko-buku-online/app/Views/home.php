<?= $this->extend('layout');?>

<?= $this->section('main') ?> 

<div class="container">
    <div class="row bg-primary-subtle">
        <div class="col-6 p-5">
            <h1>Selamat Datang Ditoko Buku Online</h1>
            <p>Kami Menyediakan Berbagai Macam Buku Dari Beberapa Penerbit Terkenal</p>
            <button class="btn btn-warning">Lihat Kontak</button>
        </div>
        <div class="col-6 p-5">
            <h1>Temukan Buku Favorit Anda</h1>
            <form action="<? base_url('search') ?>" method="GET">
                <div class="mb-3">
                    <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul Buku">
                </div>
                <div class="mb-3">
                    <select name="kategori" id="kategori" class="form-control">
                        <option value="">-- Pilih Kategori --</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="text" name="pengarang" id="pengarang" placeholder="Pengarang" class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="mb-3">Buku Best Seller</h2>
            <div class="row d-flex flex-wrap justify-content-center">
                <div class="col-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 15rem;">
                        <img src="<?= base_url() ?>/image/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">DXD</h5>
                            <p class="card-text">Rp. 100.000</p>
                            <a href="#" class="btn btn-primary">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 15rem;">
                        <img src="<?= base_url() ?>/image/2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">One Piece</h5>
                            <p class="card-text">Rp. 150.000</p>
                            <a href="#" class="btn btn-primary">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 15rem;">
                        <img src="<?= base_url() ?>/image/3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">NARUTO</h5>
                            <p class="card-text">Rp. 200.000</p>
                            <a href="#" class="btn btn-primary">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 15rem;">
                        <img src="<?= base_url() ?>/image/4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Enime</h5>
                            <p class="card-text">Rp. 90.000</p>
                            <a href="#" class="btn btn-primary">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 15rem;">
                        <img src="<?= base_url() ?>/image/5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">SPY FAMILY</h5>
                            <p class="card-text">Rp. 120.000</p>
                            <a href="#" class="btn btn-primary">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 15rem;">
                        <img src="<?= base_url() ?>/image/6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BLACK CLOVER</h5>
                            <p class="card-text">Rp. 150.000</p>
                            <a href="#" class="btn btn-primary">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection()?>