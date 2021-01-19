<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-success btn-sm">
                <?php
                $total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $total = $total + $item['subtotal'];
                    }
                    echo "Total belanja : Rp. " . number_format($total, 0, ',', '.');

                ?>
            </div><br><br>
            <h2>Input Alamat Dan Pembayaran</h2>

            <form method="post" action="<?php echo base_url() . 'barang/proses_pesanan' ?>">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" placeholder="Alamat" class="form-control">
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="number" name="no_telp" placeholder="No Telepon" class="form-control">
                </div>
                <div class="form-group">
                    <label>Pilihan Pengiriman</label>
                    <select class="form-control">
                        <option value="">J&T</option>
                        <option value="">JNE</option>
                        <option value="">TIKI</option>
                        <option value="">WAHANA</option>
                        <option value="">POS INDONESIA</option>
                    </select>

                </div>
                <div class="form-group">
                    <label>Bank</label>
                    <select class="form-control">
                        <option value="">BCA</option>
                        <option value="">BRI</option>
                        <option value="">BNI</option>
                        <option value="">MANDIRI</option>
                    </select>

                </div>
                <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
            </form>
        <?php
                } else {
                    echo "<h3>Anda Belum Belanja";
                }
        ?>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</div>