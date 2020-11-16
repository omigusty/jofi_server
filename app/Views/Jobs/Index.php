<?=$this->extend('Components/jobs/Template');?>
<?=$this->section('content');?>
<!-- Start Pilihan Pekerjaan -->
<div class="section">
    <div class="container mt-2">
        <h2 data-aos="fade-up">Pekerjaan yang <span>tersedia</span></h2>
        <p class="sub-title" data-aos="fade-up">Data akan diurutkan berdasarkan postingan terbaru</p>
       <div class="d-flex justify-content-center">
            <form action="" method="POST">
                <div class="input-group mb-5" data-aos="fade-up" style="width: 400px;">
                    <input type="text" class="form-control" autocomplete="off" name="keyword" placeholder="Cari Pekerjaan">
                    <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="list-job mt-4">
            <div class="row d-flex justify-content-center">
                <?php foreach ($jobs as $job): ?>
                    <div class="col-sm-4">
                        <a href="/detail/<?=$job['slug'];?>" style="text-decoration: none;">
                            <div class="card" data-aos="fade-up">
                                <div class="card-body">
                                    <img src="img/<?=$job['brand_logo'];?>" alt="..." class="rounded-circle">
                                    <h5><?=$job['title'];?></h5>
                                    <p class="company"><?=$job['company_name'];?></p>
                                    <p class="lokasi"><?=$job['city'];?></p>
                                    <p class="tanggal">Diposting tanggal 22 September 2020</p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach;?>
            </div>
            <?=$pager->links('jobs', 'default_head');?>
        </div>
    </div>
</div>
<!-- End Pilihan Pekerjaan -->
<?=$this->endSection();?>