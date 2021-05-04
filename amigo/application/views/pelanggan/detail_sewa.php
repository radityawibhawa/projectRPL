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
            </form>
        </div>
    </div>
    <div class="container_tagih">
        <div class="text-left">
            <div class="text_underline">
                <h2> TAGIHAN PENYEWAAN</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <form action="/action_page.php">
                <label for="tagihan">Total Harga (... Hari)</label><br>
            </form>
        </div>
        <div class="column">
            <form action="/action_page.php">
                <label for="total">Rp. 600.000</label><br>
            </form>
        </div>
    </div>
    <!-- Modal Pembayaran -->
    <div class="container">
        <div class="row">
            <div class="col-sm-1">
                <a class="btn btn-primary btn-bayar" data-toggle="modal" href="javascript:void(0)" data-target="#bayarModal">Pembayaran</a>
            </div>
            <div class="modal fade bayar" id="bayarModal" tabindex="-1" role="dialog" aria-labelledby="bayarlabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="bayarModal">Pembayaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="mx-auto">
                                    <div class="card-modal">
                                        <div class="card-header">
                                            <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                                <!-- Pilihan Pembayaran -->
                                                <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                                    <li class="nav-item"> <a data-toggle="tab" href="#bank-transfer" role="tab" class="nav-link active "> <i class="fas fa-university mr-2"></i> Bank Transfer
                                                        </a>
                                                    </li>
                                                    <li class="nav-item"> <a data-toggle="tab" href="#credit-transfer" role="tab" class="nav-link "> <i class="fas fa-credit-card mr-2"></i>
                                                            Kredit </a> </li>
                                                </ul>
                                            </div> <!-- Selesai -->
                                            <!-- Konten Bank-Transfer -->
                                        </div>
                                        <div class="tab-content">
                                            <!-- Info Bank-Transfer -->
                                            <div id="bank-transfer" class="tab-pane active pt-3" role="tabpanel">
                                                <form role="form" class="bank-transfer" onsubmit="event.preventDefault()">
                                                    <div class="form-group"> <label for="nama-rekening">
                                                            <h6>Nama Rekening</h6>
                                                        </label> <input type="text" name="nama-rekening" placeholder="Masukkan Nama Rekening..." required class="form-control "> </div>
                                                    <div class="form-group"> <label for="nomor-rekening">
                                                            <h6>Nomor Rekening</h6>
                                                        </label>
                                                        <div class="input-group"> <input type="text" name="nomor-rekening" placeholder="Masukkan Nomor Rekening..." class="form-control " required>
                                                            <div class="input-group-append"> <span class="input-group-text text-muted"><i class="fab fa-cc-mastercard mx-1"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group"> <label><span class="hidden-xs">
                                                                        <h6>Masa Berakhir</h6>
                                                                    </span></label>
                                                                <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group mb-4"> <label data-toggle="tooltip" title="Tiga Kode Digit CV dibelakang kartu anda">
                                                                    <h6>CVV <i class="fa fa-question-circle d-inline"></i>
                                                                    </h6>
                                                                </label> <input type="text" required class="form-control"> </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Kredit info -->
                                            <div id="credit-transfer" class="tab-pane pt-3" role="tabpanel">
                                                <form role="form" class="credit-transfer" onsubmit="event.preventDefault()">
                                                    <div class="form-group"> <label for="nama-pemilik">
                                                            <h6>Nama Pemilik</h6>
                                                        </label> <input type="text" name="nama-pemilik" placeholder="Masukkan Nama Pemilik..." required class="form-control "> </div>
                                                    <div class="form-group"> <label for="nomor-kartu">
                                                            <h6>Nomor Kartu</h6>
                                                        </label>
                                                        <div class="input-group"> <input type="text" name="nomor-kartu" placeholder="Masukkan Nomor Kartu..." class="form-control " required>
                                                            <div class="input-group-append"> <span class="input-group-text text-muted"><i class="fab fa-cc-visa mx-1"></i><i class="fab fa-cc-amex mx-1"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group"> <label><span class="hidden-xs">
                                                                        <h6>Masa Akhir Kartu</h6>
                                                                    </span></label>
                                                                <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group mb-4"> <label data-toggle="tooltip" title="Tiga Kode Digit CV dibelakang kartu anda">
                                                                    <h6>CVV <i class="fa fa-question-circle d-inline"></i>
                                                                    </h6>
                                                                </label> <input type="text" required class="form-control"> </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="subscribe btn btn-primary btn-block shadow-sm" data-dismiss="modal" href="javascript:void(0)" data-target="#konfirmasiModal" onclick="openKonfirmasiModal();">
                                Konfirmasi Pembayaran </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Konfirmasi Modal -->
            <div class="modal fade konfirmasi" id="konfirmasiModal" tabindex="-1" role="dialog" aria-labelledby="konfirmasilabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="konfirmasiModal"> Konfirmasi Pembayaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="mx-auto">
                                    <div class="card-modal">
                                        <div class="tab-content">
                                            <div id="konfirmasi-bayar" class="tab-pane active pt-3" role="tabpanel">
                                                <form role="form" class="konfirmasi-bayar">
                                                    <div class="form-group"> <label for="kode-bayar">
                                                            <h6>Kode Pembayaran</h6>
                                                        </label> <input type="text" name="kode-bayar" placeholder="234567897654356" required class="form-control " readonly>
                                                    </div>
                                                    <p class="text-muted">Dicek dalam 10 menit setelah pembayaran berhasil</p>
                                                    <p class="text-muted">Note : Bayar pesanan ke Kode Pembayaran di atas sebelum membuat pesanan kembali dengan Kode Pembayaran agar nomor tetap sama.</p>
                                                    <font size="2">Lihat Panduan Pembayaran
                                                        <a href="">disini</a>
                                                    </font>
                                                </form>
                                            </div>
                                            <div class="card-footer">
                                                <button type="button" data-dismiss="modal" class="subscribe btn btn-primary btn-block shadow-sm">
                                                    Selesai </button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>