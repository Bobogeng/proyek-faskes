<script>
    function hapusRumahsakit(pesan) {
        if (confirm(pesan)) {
            true;
        } else {
            false;
        }
    }
</script>
<div class="card">
    <div class="card-header">
        <h3 class="card-title p-1">DataTable Apotik</h3>
    </div>
    <div class="table-responsive p-3">
        <table id="example" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            foreach ($faskes as $ap) :
            ?>
                <tbody>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $ap['nama'] ?></td>
                        <td><?= $ap['skor_rating'] ?></td>
                        <td>
                            <a href="<?= base_url("apotik/detailbe/" . $ap['id']) ?>" class="btn btn-success btn-sm"><i class="fas fa-info"></i> Detail</a>
                            <a href="<?= base_url("apotik/edit/" . $ap['id']) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash" onClick="hapusRumahsakit('Apakah Anda yakin ingin menghapus data <?= $ap['nama']; ?>?')"></i> Hapus</a>
                        </td>
                    </tr>
                </tbody>
            <?php
            endforeach;
            ?>
        </table>
    </div>
</div>