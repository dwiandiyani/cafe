<?= $this->extend('index') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h1 class="mb-4 text-center">Daftar Meja</h1>
    <a href="/meja/create" class="btn btn-primary mb-3">Tambah Meja</a>

    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nomor Meja</th>
                <th>Kapasitas</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($meja) > 0): ?>
                <?php foreach ($meja as $i => $m): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= $m['nomor_meja']; ?></td>
                        <td><?= $m['kapasitas']; ?> Orang</td>
                        <td><?= $m['status']; ?></td>
                        <td>
                            <a href="/meja/edit/<?= $m['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/meja/delete/<?= $m['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">Tidak ada meja ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>