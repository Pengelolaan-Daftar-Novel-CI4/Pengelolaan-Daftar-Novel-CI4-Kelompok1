<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<h1>
    Data Novel
</h1>
<div class="row">
    <?php foreach ($novel as $novel) : ?>
        <div class="col-md-2">
            
            <div class="card">
                <img src="/assets/sampul/<?= $novel["sampul"] ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $novel["judul"] ?></h5>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection() ?>