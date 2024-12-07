<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h1 class="mb-4 text-center">Daftar Pembayaran</h1>

    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Total Tagihan</th>
                <th>Jumlah Pembayaran</th>
                <th>kembalian</th>
                <th>Nomor Meja</th>
                <th>Waktu Pembayaran</th>
                <th>Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="text-capitalize">
            <?php if (count($data) > 0): ?>
                <?php foreach ($data as $i => $p): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= $p['nama_pelanggan']; ?></td>
                        <td>Rp. <?= $p['total_tagihan']; ?></td>
                        <td>Rp. <?= $p['jumlah_dibayar']; ?></td>
                        <td>Rp. <?= $p['kembalian']; ?></td>
                        <td class="text-center"><?= $p['nomor_meja']; ?></td>
                        <td><?= date('d-m-Y H:i:s', strtotime($p['waktu_pembayaran'])); ?></td>
                        <td>
                            <ul>
                                <?php foreach ($p['items'] as $d): ?>
                                    <li><?= $d['nama'] ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </td>
                        <td>
                            <a href="/pembayaran/detail/<?= $p['pembayaran_id']; ?>" class="btn btn-info btn-sm">Detail</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">Tidak ada pembayaran ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>