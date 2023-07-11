<?php $this ->extend("layout/layout");
$this->section("content");


?>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
</head>
<body class="container bg-light">
  <div class="text-center">
    <h2>tambahkan Data Novel</h2>
    <p>
      Berbagai Judul Novel Kekinian 
    </p>
  </div>

  <div class="card">
    <div class="card-body">
      <form action="/novel/tambah" method="POST" class="needs-validation" novalidate enctype="multipart/form-data" autocomplete="off">
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control <?= isset($errors['judul']) ? 'is-invalid ' : ''; ?>" id="judul" name="judul" value="<?= old('judul'); ?>">
          <small class="form-text text-muted">masukan Judul Novel</small>
        </div>

        <div class="form-group">
          <label for="slug">Slug</label>
          <input type="text" class="form-control <?= isset($errors['slug']) ? 'is-invalid ' : ''; ?>" id="slug" name="slug" value=" <?= old('slug'); ?>">
          <small class="form-text text-muted">masukkan Slug Novel.</small>
        </div>
        
        <div class="form-group">
          <label for="genre">Genre</label>
          <select name="id_genre" id="genre" class="form-control <?= isset($errors['id_genre']) ? 'is-invalid ' : ''; ?>" name="id_genre" value="<?= old('id_genre'); ?>">
                                <option value="">PILIH..</option>
                                <?php foreach ($genre as $g) : ?>
                                    <option value="<?= $g["id_genre"] ?>"><?= $g["nama_genre"] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php if (isset($errors['id_genre'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['id_genre'] ?>
                                </div>
                            <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="karya">Karya</label>
          <input type="text" class="form-control <?= isset($errors['karya']) ? 'is-invalid ' : ''; ?>" id="karya" name="karya" value=" <?= old('karya'); ?>">
          <small class="form-text text-muted">masukkan nama penulis.</small>
        </div>
        
        <div class="form-group">
          <label for="penerbit">Penerbit</label>
          <input type="text" class="form-control <?= isset($errors['penerbit']) ? 'is-invalid ' : ''; ?>" id="penerbit" name="penerbit" value=" <?= old('penerbit'); ?>">
          <small class="form-text text-muted">masukkan penerbit.</small>
        </div>

        <div class="form-group">
          <label for="sampul">Sampul</label>
        <input type="file" class="form-control <?= isset($errors['sampul']) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" value="<?= old('sampul'); ?>">
        <small class="form-text text-muted">masukkan sampul novel.</small>
       
        <a href="/novel/detail/" class="btn btn-outline-dark">Kembali</a>
        <button type="submit" class="btn btn-outline-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
  <footer>
    <div class="my-4 text-muted text-center">
      <p>© Baca Novel</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script>
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>

</body>

<?php $this->endSection();