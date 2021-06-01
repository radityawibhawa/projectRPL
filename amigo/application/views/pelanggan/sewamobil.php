<script type='text/javascript'>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading"></div>
        <div class="masthead-heading text-uppercase">MENYEDIAKAN PILIHAN TERBAIK UNTUK ANDA</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#daftarmobil">Sewa Sekarang</a>
    </div>
</header>

<!-- daftar mobil-->
<section class="page-section" id="daftarmobil">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">DAFTAR MOBIL</h2>
        </div>
    </div>
    <div class="row">
        <?php foreach ($list_mobil as $mobil) : ?>
            <div class="column">
                <img src="<?php echo base_url('assets/img/' . $mobil->gambar_mobil) ?>" width="340px" height="210px" />
                <p></p>
                <h5><a href="<?= base_url('Detail_sewa'); ?>"><?php echo $mobil->jenis_mobil ?></a></h5>
                <p><?php echo $mobil->start_harga ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- halaman-->
    <div class="column page">
        <a style="font-size:100%;" href="#1" target="_blank">1</a>
        <a style="font-size:100%;" href="#2">2</a>
        <a style="font-size:100%;" href="#3">3</a><a>></a>
        <a style="font-size:100%;" href="#!">Halaman Selanjutnya</a>
    </div>
    </div>
</section>
