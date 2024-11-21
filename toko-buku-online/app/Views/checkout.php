<?= $this->extend('layout');?>

<?= $this->section('main') ?> 

<div class="container">
    <h3>Review dan Sumbit Order</h3>
    <hr />
    <table>
        <tr>
            <td>DXD</td>
            <td>@1</td>
            <td>Rp.100.000</td>
            
        </tr>
    </table>
    <h3 class="mt-3">Total</h3>
    <hr />
    <span>Rp.100.000</span>
    <h3 class="mt-3">Alamat Pengiriman</h3>
    <hr />
    <p>Jl simp sungai duren</p>
    <h3 class="mt-3">Metode Bayar</h3>
    <hr />
    <p>Tranfer Bank</p>
    <p>No Rekening : Kiki, BCA, 701230009</p>
    <div class="mt-5">
        <form action="<?= base_url('submit')?>" method="POST">
        <button type="submit" class="btn btn-success">Submit Order</button>
        </form>
    </div>
</div>

<?= $this->endSection()?>