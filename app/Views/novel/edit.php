<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                    <div class="col-6">
                         <h1>Edit Novel</h1>
                    </div>
                    <div class="col-4 text-end">
                    <a href="/novel/" class="btn btn-dark">Kembali</a>
            </div> 
        </div>
    </div> 
<div class="card-body">

<form action="/novel/edit" method="POST" enctype="multipart/form-data">        
    <div class="row">

             <input type="hidden" value="<?=$Novel['id'];?>" name="id">
                <div class="col-md-6">
                    <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control <?= isset($errors['judul']) ? 'is-invalid' : '' ;?>" id="judul" name="judul" value="<?= isset($errors['judul']) ? old('judul') : $Novel["judul"];?>">
                        <?php if (isset($errors['judul'])) : ?>
                        <div class="invalid-feedback">
                            <?= $errors['judul'] ?>
                        </div>
                           <?php endif; ?>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control <?= isset($errors['slug']) ? 'is-invalid ' : ''; ?>" id="slug" name="slug" value="<?= isset($errors['slug']) ? old('slug') : $Novel["slug"];?>">
                            <?php if (isset($errors['slug'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['slug'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="genre" class="form-label">Genre</label>
                            <select name="id_genre" id="genre" class="form-control <?= isset($errors['id_genre']) ? 'is-invalid ' : ''; ?>" id="id_genre" name="id_genre" value="<?= isset($errors['id_genre']) ? old('id_genre') : $Novel["id_genre"];?>">
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

                        <div class="col-md-6">
                            <label for="karya" class="form-label">Karya</label>
                            <input type="text" class="form-control <?= isset($errors['karya']) ? 'is-invalid ' : ''; ?>" id="karya" name="karya" value="<?= isset($errors['karya']) ? old('karya') : $Novel["karya"];?>">
                            <?php if (isset($errors['karya'])) : ?>
                                <div class=" invalid-feedback">
                                    <?= $errors['karya'] ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <label for="penerbit" class="form-label">penerbit</label>
                            <input type="text" class="form-control <?= isset($errors['penerbit']) ? 'is-invalid ' : ''; ?>" id="penerbit" name="penerbit" value="<?= isset($errors['penerbit']) ? old('penerbit') : $Novel["penerbit"];?>">
                            <?php if (isset($errors['penerbit'])) : ?>
                                <div class=" invalid-feedback">
                                    <?= $errors['penerbit'] ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="sinopsis">Sinopsis</label>
                            <input type="text" class="form-control <?= isset($errors['sinopsis']) ? 'is-invalid ' : ''; ?>" id="sinopsis" name="sinopsis" value="<?= isset($errors['sinopsis']) ? old('sinopsis') : $Novel["sinopsis"];?>">
                            <?php if (isset($errors['sinopsis'])) : ?>
                                <div class=" invalid-feedback">
                                    <?= $errors['sinopsis'] ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <label for="sampul" class="form-label">sampul</label>
                            <input type="file" class="form-control <?= isset($errors['sampul']) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" value="<?= old('sampul'); ?>">
                            <?php if (isset($errors['sampul'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['sampul'] ?>
                                </div>
                            <?php endif; ?>
                            <div class="col-md-6">
                <label class="form-label">sampul Saat ini</label>
            <div class="mb-6">
        <?php if ($Novel["sampul"]): ?>
            <img src="/assets/sampul/<?= $Novel["sampul"]; ?>" width="100" >
        <?php else : ?>
                <span>Tidak ada gambar lama</span>
        <?php endif; ?>
        </div>
    </div>
</div>
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>

</div>

       
                </div>
            </div>
        </form>
        </div>
        </div>
        </div>
        </div>
<?= $this->endSection()?>
