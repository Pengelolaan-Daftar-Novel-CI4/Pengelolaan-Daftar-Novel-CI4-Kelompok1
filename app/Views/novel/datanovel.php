<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                <h2> Halaman Data Novel</h2>
                </div>

            </div>

        <div class="card-body">
                    <div class="col-12 text-end">
                        <a href="/novel/add" class="btn btn-outline-primary">Tambahkan Data Novel</a>
                    </div>
                </div>
        </div>

            <table class="table table-bordered table-striped">
           
                <tr>
                    <th>No</th>
                    <th>Sampul</th>
                    <th>Judul</th>
                    <th>Slug</th>
                    <th>Genre</th>
                    <th>action</th>
                </tr>
                <?php $i = 1 ;?>
                <?php foreach($datanovel as $novel) :?>
                    <tr>
                        <td><?= $i++;?></td>
                        <td >
                          <img style="width: 50px;" src="/assets/sampul/<?= $novel ['sampul']?>" alt="">
                        </td>
                        <td><?= $novel['judul']?></td>
                        <td><?= $novel['slug']?></td>
                        <td><?= $novel['nama_genre']?></td>
                        <td>
                        <a href="/novel/detailNovel/<?= $novel["id"]; ?>" class="btn btn-outline-warning">Detail</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </div>

<?= $this->endSection() ?>