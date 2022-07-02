<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="card">
    <div class="card-header">
        <h3 class="card-title p-1">Edit Rumah sakit</h3>
    </div>
    <div class="card-body">
        <?= form_open_multipart("rumahsakit/update/$faskes->id") ?>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" value="<?= $faskes->nama ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
                <input id="alamat" name="alamat" placeholder="Masukkan Alamat" type="text" class="form-control" value="<?= $faskes->alamat ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="latlong" class="col-4 col-form-label">Latlong</label>
            <div class="col-8">
                <input id="latlong" name="latlong" placeholder="Masukkan Latlong" type="text" class="form-control" value="<?= $faskes->latlong ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
            <div class="col-8">
                <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"><?= $faskes->deskripsi ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="skor_rating" class="col-4 col-form-label">Rating</label>
            <div class="col-8">
                <input id="skor_rating" name="skor_rating" placeholder="Masukkan Skor Rating" type="text" class="form-control" value="<?= $faskes->skor_rating ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="foto1" class="col-4 col-form-label">Foto1</label>
            <div class="col-8">
                <input id="foto1" name="foto1" placeholder="Masukkan Foto1" type="file" class="form-control" value="<?= $faskes->foto1 ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="foto2" class="col-4 col-form-label">Foto2</label>
            <div class="col-8">
                <input id="foto2" name="foto2" placeholder="Masukkan Foto2" type="file" class="form-control" value="<?= $faskes->foto2 ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="foto3" class="col-4 col-form-label">Foto3</label>
            <div class="col-8">
                <input id="foto3" name="foto3" placeholder="Masukkan Foto3" type="file" class="form-control" value="<?= $faskes->foto3 ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="kecamatan" class="col-4 col-form-label">Kecamatan</label>
            <div class="col-8">
                <select id="kecamatan" name="kecamatan" required="required" class="custom-select">

                    <option value="1" <?php if ($faskes->kecamatan == "Beji") {
                                            echo 'selected';
                                        } ?>>Beji</option>
                    <option value="2" <?php if ($faskes->kecamatan == "Pancoran Mas") {
                                            echo 'selected';
                                        } ?>>Pancoran Mas</option>
                    <option value="3" <?php if ($faskes->kecamatan == "Bojongsari") {
                                            echo 'selected';
                                        } ?>>Bojongsari</option>
                    <option value="4" <?php if ($faskes->kecamatan == "Cilodong") {
                                            echo 'selected';
                                        } ?>>Cilodong</option>
                    <option value="5" <?php if ($faskes->kecamatan == "Cimanggis") {
                                            echo 'selected';
                                        } ?>>Cimanggis</option>
                    <option value="6" <?php if ($faskes->kecamatan == "Cinere") {
                                            echo 'selected';
                                        } ?>>Cinere</option>
                    <option value="7" <?php if ($faskes->kecamatan == "Cipayung") {
                                            echo 'selected';
                                        } ?>>Cipayung</option>
                    <option value="8" <?php if ($faskes->kecamatan == "Limo") {
                                            echo 'selected';
                                        } ?>>Limo</option>
                    <option value="9" <?php if ($faskes->kecamatan == "Sawangan") {
                                            echo 'selected';
                                        } ?>>Sawangan</option>
                    <option value="10" <?php if ($faskes->kecamatan == "Sukmajaya") {
                                            echo 'selected';
                                        } ?>>Sukmajaya</option>
                    <option value="11" <?php if ($faskes->kecamatan == "Tapos") {
                                            echo 'selected';
                                        } ?>>Tapos</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="website" class="col-4 col-form-label">Website</label>
            <div class="col-8">
                <input id="website" name="website" placeholder="Masukkan Website" type="text" class="form-control" value="<?= $faskes->website ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah_dokter" class="col-4 col-form-label">Jumlah Dokter</label>
            <div class="col-8">
                <input id="jumlah_dokter" name="jumlah_dokter" placeholder="Masukkan Jumlah Dokter" type="text" class="form-control" value="<?= $faskes->jumlah_dokter ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah_pegawai" class="col-4 col-form-label">Jumlah Pegawai</label>
            <div class="col-8">
                <input id="jumlah_pegawai" name="jumlah_pegawai" placeholder="Masukkan Jumlah Pegawai" type="text" class="form-control" value="<?= $faskes->jumlah_pegawai ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <?= form_close(); ?>
    </div>
</div>