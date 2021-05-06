<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="assets/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="assets/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="assets/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/reviewsewamobilstyle.css" rel="stylesheet" />
    </head>
    <body id="page-top">       
        
        <!-- Navbar -->
        <?php $this->load->view('navbar')?>
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo base_url('assets/img/roar.jpg') ?>" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/img/roar.jpg') ?>" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url('assets/img/roar.jpg') ?>" alt="Third slide">
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
            <div class="container">
                <div class="text-left">
                    <h2>TOYOTA AVANZA</h2>
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

            <div class="container detail">
                <div class="text-left">
                    <h2>DETAIL SEWA MOBIL</h2>
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
                <div class="column middle">
                    <form action="/action_page.php">
                            <label>Lokasi Penyewa </label><br>
                            <textarea rows="4" cols="50" class="form-control" id="name" type="text" placeholder="Masukkan Alamat Anda..." required="required" data-validation-required-message="Alamat Anda Harus Diisi!"></textarea>
                            <p class="help-block text-danger"></p>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="column side">
                        <form action="/action_page.php">
                        <label for="appt">Waktu Penyewaan</label><br>
                        <input type="time" id="appt" name="appt">
                    </form>
                </div>
                <div class="column side">
                <form action="/action_page.php">
                    <label for="durasi">Durasi Penyewaan</label><br>
                    <select name="hari" id="hari">
                    <option value="1">1 Hari</option>
                    <option value="2">2 Hari</option>
                    <option value="3">3 Hari</option>
                    <option value="4">4 Hari</option>
                </select>
                </div>
            </div>

            <div class="container">
                <div class="text-left">
                    <h2>TAGIHAN PENYEWAAN</h2>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <form action="/action_page.php">
                    <label for="tagihan">Total Harga  (... Hari)</label><br>
                    </select>
                </div>
                <div class="column">
                    <form action="/action_page.php">
                    <label for="total">Rp. 600.000</label><br>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="column middle">
                <a class="btn btn-primary" href="#submited" >Sewa Mobil</a>
                </div>
            </div>
            
            

    <?php $this->load->view('footer')?>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
