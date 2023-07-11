<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                <h2> Halaman Data Novel </h2>
                </div>
            </div>
    </div>
<div class="row">
    <?php foreach ($novel as $novel) : ?>
        <div class="col-md-2">
            
                <div class="card"><a href="/novel/sinopsis/<?= $novel["id"]; ?>">
                    <img src="/assets/sampul/<?= $novel["sampul"] ?>" class="card-img-top"></a>
                <div class="card-body">
                    <h5 class="card-title"><?= $novel["judul"] ?></h5>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection() ?>