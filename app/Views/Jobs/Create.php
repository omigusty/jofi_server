<?= $this->extend('Components/create/TemplateCreate'); ?>
<?= $this->section('content'); ?>
<main>
    <section class="container d-flex justify-content-center">
        <div class="post-loker">
            <div class="text-header">
                <img src="/img/Brand.png" alt="">
                <h1 class="h3 font-weight-bold mt-4">Halaman Posting Loker</h1>
                <p class="text-secondary h8 mt-1 mb-1">Silahkan lengkapi field dibawah ini</p>
            </div>
            <form action="/jobs/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div id="post">
                    <div class="form-group">
                        <label for="job-need">
                            <p class="mb-1">Pekerjaan yang dibutuhkan</p>
                        </label>
                        <input type="text" name="title" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" id="job-need" autofocus autocomplete="off" value="<?= old('title'); ?>">
                        <div class="invalid-feedback">
                            Nama pekerjaan harus diisi
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name-company">
                            <p class="mb-1">Nama Perusahaan</p>
                        </label>
                        <input type="text" name="company_name" class="form-control <?= ($validation->hasError('company_name')) ? 'is-invalid' : ''; ?>" id="name-company" autocomplete="off" value="<?= old('company_name'); ?>">
                        <div class="invalid-feedback">
                            Nama perusahaan harus diisi
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adress">
                            <p class="mb-1">Kota Tempat Perusahaan</p>
                        </label>
                        <input type="text" name="city" class="form-control <?= ($validation->hasError('city')) ? 'is-invalid' : ''; ?>" id="adress" autocomplete="off" value="<?= old('city'); ?>">
                        <div class="invalid-feedback">
                            Kota tempat pekerjaan harus diisi
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="logoBrand">
                            <p class="mb-1">Logo Perusahaan</p>
                        </label>
                        <div class="col-sm-3">
                            <img src="/img/Company2.png" class="img-thumbnail img-preview">
                        </div>
                        <input type="file" onchange="previewImg()" name="brand_logo" class="form-control-file1 <?= ($validation->hasError('city')) ? 'is-invalid' : ''; ?>" id="logoBrand" autocomplete="off" value="<?= old('brand_logo'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('brand_logo'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group text-area">
                    <label for="deskripsi">
                        <p class="mb-1">Deskripsi</p>
                    </label>
                    <textarea class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" name="deskripsi" id="deskripsi" value="<?= old('deskripsi'); ?>"></textarea>
                    <div class="invalid-feedback">
                        Deskripsi pekerjaan harus diisi
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Posting</button>
            </form>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>