<?= $this->extend("layouts/main"); ?>
<?= $this->section("Content"); ?>
<div class="container">
    <h1><?= $title; ?></h1>

    <div class="col-md-7">
        <form method="post" action="/mahasiswa/create">
            <div class="mb-3">
                <label for="nim" class="form-label">Nim</label>
                <input type="number" class="form-control   <?= isset($validasi) ? $validasi->hasError('nim') ? "is-invalid" : "" : ""; ?>  nim" id="nim" name="nim">
                <div class="invalid-feedback"><?= isset($validasi) ? $validasi->getError("nim") : ""; ?></div>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control <?= isset($validasi) ? $validasi->hasError('nama') ? "is-invalid" : "" : ""; ?> nama" id="nama" name="nama">
                <div class="invalid-feedback"><?= isset($validasi) ? $validasi->getError("nama") : ""; ?></div>
            </div>
            <a href="/mahasiswa" class="btn btn-danger"> Back</a>
            <button type="submit" class="btn btn-primary tambah-mahasiswa">Submit</button>
        </form>
    </div>

</div>
<?= $this->endSection("Content"); ?>