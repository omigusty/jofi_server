<section>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/Brand.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" href="/">Home</a>
                    <a class="nav-link" href="/jobs">Pekerjaan</a>
                    <a class="nav-link" href="/jobs/create">Posting Pekerjaan</a>
                    <a class="nav-link" href="talenta.html">Talenta</a>
                    <?php if (logged_in()): ?>
                     <a href="/logout" type="button" class="btn btn-outline-success">Keluar Akun</a>
                    <?php else: ?>
                     <a href="/login" type="button" class="btn btn-outline-success">Masuk Akun</a>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </nav>
    <div class="container section-hero">
        <div class="row">
            <div class="col-sm tag-hero">
                <h1> Tunjukan Keterampilan anda dan Dapatkan pekerjaan,secepatnya!</h1>
                <p>Dapatkan kesempatan bekerja di perusahaan yang kamu impikan pada bidang yang anda kuasai.</p>
                <button type="button" class="btn btn-success"><a href="#joob" style="text-decoration: none; color: #fff;">Temukan Loker</a></button>
                <button type="button" class="btn btn-warning"><a href="/jobs/create" style="text-decoration: none; color: #fff;">Posting Pekerjaan</a></button>
            </div>
            <div class="col-sm">
                <img src="img/Section-image.png" alt="" />
            </div>
        </div>
    </div>
    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
    <div class="wave wave4"></div>
</section>
