<?= $this->extend("layouts/main"); ?>
<?= $this->section("Content"); ?>
<div class="container">
    <h1><?= $title; ?></h1>
    <table class="table table-dark table-hover">
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
                        <a class="btn btn-primary" href="#">edit</a>
                    </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection("Content"); ?>