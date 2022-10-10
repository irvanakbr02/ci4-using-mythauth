<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kategori </h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Kategori</th>
                <!-- <th scope="col">Action</th> -->
            </tr>
        </thead>
        <tbody>

            <?php
            $i = 1;
            foreach ($menu as $menu) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $menu->nama; ?></td>
                    <td><?= $menu->deskripsi; ?></td>
                    <td><?= $menu->kategori; ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?= $this->endSection(); ?>