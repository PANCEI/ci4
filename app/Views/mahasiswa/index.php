<?= $this->extend("layouts/main"); ?>
<?= $this->section("Content"); ?>
<div class="container">
    <h1><?= $title; ?></h1>
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

                    </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <p class="muted">Placeholder text to demonstrate some <a href="#" data-bs-toggle="tooltip" data-bs-title="Default tooltip">inline links</a> with tooltips. This is now just filler, no killer. Content placed here just to mimic the presence of <a href="#" data-bs-toggle="tooltip" data-bs-title="Another tooltip">real text</a>. And all that just to give you an idea of how tooltips would look when used in real-world situations. So hopefully you've now seen how <a href="#" data-bs-toggle="tooltip" data-bs-title="Another one here too">these tooltips on links</a> can work in practice, once you use them on <a href="#" data-bs-toggle="tooltip" data-bs-title="The last tip!">your own</a> site or project.
    </p>
</div>
<?= $this->endSection("Content"); ?>