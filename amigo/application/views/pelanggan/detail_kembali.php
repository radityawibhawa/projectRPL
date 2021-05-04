<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo base_url('assets/img/apanja.jpg') ?>" alt="First slide" height="760px">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/img/spec_1.jpg') ?>" alt="Second slide" height="760px">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/img/spec_2.jpg') ?>" alt="Third slide" height="760px">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Desc mobil-->
<section class="page-section" id="desc">
    <div class="container_sewa">
        <div class="text-left">
            <div class="text_underline">
                <h2>TOYOTA AVANZA</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <h3>Informasi Mobil</h3><br>
            <h5>Rental Mobil Toyota Avanza </h5><br>
            <p>Toyota Avanza yang merupakan mobil pilihan crossover, dimensi sebuah mpv dan efisiensi bahan bakar seperti layaknya sebuah city car. <br>
                Perpaduan sempurna sebuah mobil untuk kebutuhan anda sehari - hari.</p><br>
            <p>Mempunyai mesin 1.500 cc mobil ini dijamin hemat bahan bakar.</p><br>
            <p>Selain itu, mobil ini juga di lengkapi banyak fitur menarik seperti : steering switch control, dual Airbags, ABS, EBD, kamera mundur, <br>
                head unit dengan DVD player dan juga beberapa fitur lain yang cukup menunjang perjalananan anda</p><br>
            <p>* Gambar unit yang diaplikasi hanya ilustrasi, untuk real picture bisa hubungi customer service kami.</p>
        </div>
    </div>
    <div class="container_sewa">
        <div class="text-left">
            <div class="text_underline">
                <h2> DETAIL SEWA MOBIL</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column side">
            <form action="/action_page.php">
                <label for="tglPenyewaan">Tanggal Penyewaan </label><br>
                <input type="date" id="tglPenyewaan" name="tglPenyewaan">
            </form>
        </div>
        <div class="column side">
            <form action="/action_page.php">
                <label for="tglPegembalian">Tanggal Pengembalian </label><br>
                <input type="date" id="tglPengembalian" name="tglPengembalian">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="column middle-kembali">
            <form action="/action_page.php">
                <label>Lokasi Pengembalian </label><br>
                <textarea rows="4" cols="50" class="form-control" id="name" type="text" placeholder="Masukkan Alamat Anda..." required="required" data-validation-required-message="Alamat Anda Harus Diisi!"></textarea>
                <p class="help-block text-danger"></p>
            </form>
        </div>
    </div>
    <div class="container_sewa">
        <div class="text-left">
            <div class="text_underline">
                <h2> TAGIHAN DENDA (Jika Ada)</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column side">
            <form action="/action_page.php">
                <label for="tagihan">Total Denda </label><br>
                </select>
        </div>
        <div class="column side">
            <form action="/action_page.php">
                <label for="total">Rp. 0,00</label><br>
                </select>
        </div>
    </div>
    <div class="row">
        <div class="column khusus">
            <p class="warning">* Silahkan melakukan pembayaran denda ketika kami mengambil mobil yang di sewa di lokasi pengembalian yang anda berikan</p><br>
        </div>
    </div>
    <div class="container_sewa">
        <div class="text-left">
            <div class="text_underline">
                <h2> REVIEW AMIGOTICS-RENT</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column middle">
            <form action="/action_page.php">
                <label>Review Pelayanan</label><br>
                <textarea rows="4" cols="50" class="form-control" id="name" type="text" placeholder="Masukkan review pelayanan kami..." required="required" data-validation-required-message="Alamat Anda Harus Diisi!"></textarea>
                <a class="btn btn-primary btn-kirim" href="#submited">kirim</a>
                <p class="help-block text-danger"></p>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="column middle">
            <form action="/action_page.php">
                <label>Review Mobil</label><br>
                <textarea rows="4" cols="50" class="form-control" id="name" type="text" placeholder="Masukkan review mobil kami..." required="required" data-validation-required-message="Alamat Anda Harus Diisi!"></textarea>
                <a class="btn btn-primary btn-kirim" href="#submited">kirim</a>
                <p class="help-block text-danger"></p>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="column middle">
            <a class="btn btn-primary btn-selesai" href="#submited">Selesai</a>
        </div>
    </div>
</section>