<?php $this->extend("layout/layout");?>
<?php $this->section("content"); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                <h2> Halaman Detail Novel </h2>
                </div>
                <div class="col-md-4 text-end">
                    <a href="/novel/detail" class="btn btn-dark">Kembali</a>
                    </div>
            </div>
    </div>
        <div class="card-body">
        <form action="/novel/detailNovel" method="POST" enctype="multipart/form-data">
                    <div class="row no-gutters">
                        
                        <div class="col-md-2">        
                                    <img src="/assets/sampul/<?= $novel["sampul"]; ?>" width="100">
                            </div>

                        <div class="col-md-6">
                            <div class="card-body">
                            <label for="genre" class="form-label">Judul</label>
                            <h6 class="card-title"><?= $novel['judul']; ?></h6>

                            <label for="genre" class="form-label">Slug</label>
                            <h6 class="card-title"><?= $novel['slug']; ?></h6>
                        
                            <label for="genre" class="form-label">Genre</label>
                            <h6 class="card-text"><?= $novel['id_genre']; ?></h6>

                            <label for="genre" class="form-label">Karya</label>
                            <h6 class="card-text"><?= $novel['karya']; ?></h6>

                            <label for="genre" class="form-label">Penerbit</label>
                            <h6 class="card-text"><?= $novel['penerbit']; ?></h6>


                            <a href="/novel/update/<?= $novel["id"]; ?>" class="btn btn-success">Update</a>
                            <a class="btn btn-danger" onclick="return confirmDelete()">Delete</a>
                        </div>
                        </div>
                        </div>

                         
                    </div>
                </form>
        </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete() {
        swal({
                title: "Apakah Anda yakin?",
                text: "setelah dihapus! data anda akan benar-benar hilang!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    window.location.href = "/novel/hapus/<?= encryptUrl($novel['id']) ?>";

                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    }
</script>



<?php $this->endSection() ?>