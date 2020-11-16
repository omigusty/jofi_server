<?= $this->extend('Components/jobs/TemplateDetail'); ?>
<?= $this->section('content'); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="deskripsi">
                    <div class="text-header mb-3">
                        <h1>Deskripsi</h1>
                    </div>
                    <p><?= $job['deskripsi']; ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-job">
                    <div class="card">
                        <div class="card-body">
                            <h5><?= $job['title']; ?></h5>
                            <p><i class="fa fa-building"></i><?= $job['company_name']; ?></p>
                            <p><i class="fa fa-map-marker-alt lokasi"></i><?= $job['city']; ?></p>
                            <p><i class="fa fa-clock"></i><?= $job['jenis_pekerjaan']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>