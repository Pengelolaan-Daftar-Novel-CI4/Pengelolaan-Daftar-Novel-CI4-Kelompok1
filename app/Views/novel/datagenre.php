<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header">
            <div class="row">
            <div class="text-center">
                <h2> Halaman Kategori </h2>
                </div>
              
            </div>
    </div>
<div class="row">
        <div class="col-md-12">
                    <div class="col-12 text-end">
                        <a href="/genre/addgenre" class="btn btn-outline-primary">Tambahkan Data Genre</a>
                    </div>
            <table class="table table-striped">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1 ;?>
                <?php foreach($dataGenre as $Genre) :?>
                    <tr>
                        <td><?= $i++;?></td>
                        <td><?= $Genre['nama_genre']?></td>
                        <td>
                        <a href="/genre/update/<?= $Genre["id_genre"]; ?>" class="btn btn-outline-success">Update</a>
                            <a class="btn btn-outline-danger" onclick="return confirmDelete()">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>
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

                    window.location.href = "/genre/hapus/<?= $Genre['id_genre'] ?>";

                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    }
</script>
    <?= $this->endSection() ?>