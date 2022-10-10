<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Menu </h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">

            <div class="col-md-12">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h4><?= $menu['nama']; ?></h4>
                        </li>
                        <li class="list-group-item"><?= $menu['nama']; ?></li>
                        <li class="list-group-item"><?= $menu['foto']; ?></li>
                        <li class="list-group-item"><?= $menu['deskripsi']; ?></li>
                        <a href="/kategori" class="btn btn-info">kembali</a>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>