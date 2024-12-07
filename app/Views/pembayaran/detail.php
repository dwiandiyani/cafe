<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h1 class="mb-4 text-center">Detail Pesanan</h1>
    <ul class="text-capitalize">
        <li>Nama Pelanggan: <?= $items['nama_pelanggan'] ?></li>
        <li>Total Tagihan: Rp. <?= $items['total_tagihan'] ?></li>
        <li>Jumlah Pembayaran: Rp. <?= $items['jumlah_dibayar'] ?></li>
        <li>Kembalian: Rp. <?= $items['kembalian'] ?></li>
        <li>Nomor Meja: <?= $items['nomor_meja'] ?></li>
        <li>Waktu Pembayaran: <?= date('d-m-Y H:i:s', strtotime($items['waktu_pembayaran'])); ?></li>
    </ul>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Kuantitas</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody class="text-capitalize">
            <?php if (count($items['detail']) > 0): ?>
                <?php foreach ($items['detail'] as $i => $p): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= isset($p['nama']) ? $p['nama'] : 'Tidak ada'; ?></td>
                        <td><?= isset($p['harga']) ? $p['harga'] : 'Tidak ada'; ?></td>
                        <td><?= isset($p['kuantitas']) ? $p['kuantitas'] : 'Tidak ada'; ?></td>
                        <td><?= isset($p['nama_kategori']) ? $p['nama_kategori'] : 'Tidak ada'; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">Tidak ada pesanan ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <a href="/pembayaran" class="btn btn-primary mb-3">Back</a>

</div>

<?= $this->endSection() ?>