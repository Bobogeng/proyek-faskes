<script>
    function hapusRumahsakit(pesan) {
        if (confirm(pesan)) {
            return true;
        } else {
            return false;
        }
    }
</script>
<div class="card">
    <div class="card-header">
        <h3 class="card-title p-1">DataTable Kecamatan</h3>
    </div>
    <div class="table-responsive p-3">
        <a href="<?= base_url("index.php/kecamatan/form") ?>" class="btn btn-primary btn-md mb-3">Tambah</a>
        <table id="example" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
                <tbody>
            <?php
            $no = 1;
            foreach ($faskes as $kec) :
            ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $kec['nama'] ?></td>
                        <td>
                            <a href="<?= base_url("index.php/kecamatan/edit/" . $kec['id']) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                            <a href="<?= base_url("index.php/kecamatan/delete/" . $kec['id']) ?>" class="btn btn-danger btn-sm" onclick="return hapusRumahsakit('Apakah Anda yakin ingin menghapus komentar <?= $kec['nama']; ?>?')"><i class="fas fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
            <?php
            endforeach;
            ?>
                </tbody>
        </table>
    </div>
</div>