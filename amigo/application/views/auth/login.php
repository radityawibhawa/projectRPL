<!-- mendefinisikan seksi dengan class sistem -->
<div class="sistem">
    <!-- Isi konten yang ingin dibuat dibungkus dengan elemen container agar lebih rapi -->
    <div class="container">
        <!-- Membuat background di menu login -->
        <body background="<?= base_url(); ?>assets/img/bg-login.png">
            <!-- Outer Row -->
            <!-- Mengatur perataan row ke ujung kanan-->
            <div class="row justify-content-end">
                <!-- membuat responsive column dengan ukuran yg besar -->
                <div class=" col-lg-5">
                    <!-- memiliki fungsi seperti container agar konten yang telah dibuat menjadi tertata -->
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <!-- membuat responsive column dengan ukuran large -->
                                <div class="col-lg">
                                    <div class="p-5">
                                        <!-- Membuat Teks Login -->
                                        <div class="text-center">
                                            <h1 class="login">Log In</h1>
                                        </div>
                                        <?= $this->session->flashdata('message'); ?>
                                        <!-- Memasukkan metode post ke dalam form pendaftaran -->
                                        <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                            <!-- mendefinisikan class yang akan dijadikan form pendaftaran -->
                                            <div class="form-group">
                                                <!-- Teks "Masukkan Email Anda" diatas kotak -->
                                                <label for="email">Masukkan Email Anda</label>
                                                <!-- membuat kotak yg bisa dimasukkan teks untuk login dengan email --> 
                                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Ex. Kirito@gmail.com" value="<?= set_value('email'); ?>">
                                                <!-- wajib diisi, jika tidak diisi maka akan error -->
                                                <?= form_error('email', '<small class="text-light pl-3">', '</small>'); ?>
                                            </div>
                                            <!-- mendefinisikan class yang akan dijadikan form pendaftaran -->
                                            <div class="form-group">
                                                <!-- Teks "Masukkan Password" diatas kotak -->
                                                <label for="password">Masukkan Password Anda</label>
                                                <!-- teks yg dimasukkan akan diubah menjadi bintang agar tidak kelihatan dengan input type ="password" -->
                                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="">
                                                <!-- wajib diisi, jika tidak diisi maka akan error -->
                                                <?= form_error('password', '<small class="text-light pl-3">', '</small>'); ?>
                                            </div>
                                            <!-- menambah button untuk melakukan submit data dari form pendaftaran diatas -->
                                            <button type="submit" class="btn btn-primary btn-user btn-block btn-login" href="<?= base_url('pelanggan/beranda'); ?>">
                                                Login
                                            </button>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <!-- Agar teks yg dibuat ketike di klik akan diarahkan ke menu registration -->
                                            <a class="small" href="<?= base_url('auth/registration'); ?>">Belum Punya Akun ? Daftar Disini</a>
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
