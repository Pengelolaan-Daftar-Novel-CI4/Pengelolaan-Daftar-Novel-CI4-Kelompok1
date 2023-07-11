<?php $this->extend("layout/layout");?>
<?php $this->section("content"); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                <h2> Halaman Sinopsis Novel</h2>
                </div>
                <div class="col-md-6 text-end">
                    <a href="/novel/index" class="btn btn-outline-dark">Kembali</a>
                    </div>
            </div>
    </div>
        <div class="card-body">
        <form action="/novel/detailNovel" method="POST" enctype="multipart/form-data">
                    <div class="row no-gutters">
                        <!-- Tambahkan film input id -->
                        <div class="col-md-3">        
                                    <img src="/assets/sampul/<?= $novel["sampul"]; ?>" width="250">
                            </div>

                        <div class="col-md-6">
                            <div class="card-body">
                            <b><label for="genre" class="form-label">Judul</label></b>
                            <p class="card-title"><?= $novel['judul']; ?>

                            <b><p><label for="genre" class="form-label">Sinopsis</label></b>
                            <p class="card-text" align = "justify"><?= $novel['sinopsis']; ?></p>
                            
                        </div>
                        </div>
                        </div>

                         
                    </div>
                </form>
        </div>
        </div>
    </div>
</div>


<?php $this->endSection() ?>