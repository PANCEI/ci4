<?= $this->extend("layouts/main"); ?>
<?= $this->section("Content"); ?>
<div class="container">
    <div class="oke" data-oke="<?= session("success") ?>"></div>
    <h1><?= $title; ?></h1>
    <a class="btn btn-primary mx-auto" href="/mahasiswa/create" role="button">Tambah Mahasiswa</a>
    <table class="table table-white table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Nim</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php $i = 1; ?>
                <?php foreach ($mhs as $m) : ?>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $m['nama']; ?></td>
                    <td><?= $m['nim']; ?></td>
                    <td>
                        <a href="/mahasiswa/edit/<?= $m['id_mahasiswa'] ?>" data-bs-toggle="tooltip" data-bs-title="Edit Mahasiswa!" class="btn btn-warning"> <i class="fas fa-user-edit"></i></a>
                        <a href="/mahasiwa/delete" data-bs-toggle="tooltip" data-bs-title="Hapus  Mahasiswa!" data-idm="<?= $m['id_mahasiswa'] ?>" class="btn btn-danger hapus-mahasiswa"> <i class="fas fa-trash"></i></a>
                    </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?= $this->endSection("Content"); ?>