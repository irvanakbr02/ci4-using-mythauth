<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">My Profile</h1>
    <a href="<?= '/kategori' ?>" class="btn btn-info">Kategori</a>
    <a href="<?= '/pesan' ?>" class="btn btn-info">Pesan</a>

</div>
<?= $this->endSection(); ?>