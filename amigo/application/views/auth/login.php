<!-- mendefinisikan class sistem -->
<div class="sistem">
    <!-- mendefinisikan container -->
    <div class="container">
        <!-- Menambah background -->
        <body background="<?= base_url(); ?>assets/img/bg-login.png">
             <!-- Mengatur perataan row ke ujung kanan-->
            <div class="row justify-content-end">
                 <!-- memiliki fungsi seperti container agar konten yang telah dibuat menjadi tertata -->
                <div class="card o-hidden border-0 shadow-lg my-5">
                     <!-- memiliki fungsi seperti container agar konten yang telah dibuat menjadi tertata -->
                    <div class="card-body p-3">
                        <!-- Nested Row within Card Body -->
                        <!-- Mengatur perataan row ke bagian tengah-->
                        <div class="row justify-content-center">
                            <!-- membuat responsive column dengan ukuran yg besar -->
                            <div class="col-lg-11">
                                <div class="p-3">
                                    <!-- memdefinisikan class yg isinya teks "Daftar" -->
                                    <div class="text-center">
                                        <h1 class="regist">Daftar</h1>
                                    </div>
                                    <!-- memasukkan metode post ke dalam form pendaftaran -->
                                    <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                                        <!-- mendefinisikan class yang akan dijadikan form pendaftaran -->
                                        <div class="form-group">
                                            <!-- Teks "Masukkan Nama" diatas kotak -->
                                            <label for="nama">Masukkan Nama</label>
                                            <!-- membuat kotak yg bisa dimasukkan teks untuk register dengan nama --> 
                                            <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Ex. Kirito" value="<?= set_value('nama'); ?>">
                                            <!-- kotak wajib diisi, jika tidak diisi maka akan error -->
                                            <?= form_error('nama', '<small class="text-light pl-3">', '</small>'); ?>
                                        </div>
                                        <!-- mendefinisikan class yang akan dijadikan form pendaftaran -->
                                        <div class="form-group">
                                            <!-- Teks "Masukkan Email" diatas kotak -->
                                            <label for="email">Masukkan Email</label>
                                            <!-- membuat kotak yg bisa dimasukkan teks untuk register dengan email --> 
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Ex. Kirito@gmail.com" value="<?= set_value('email'); ?>">
                                            <!-- kotak wajib diisi, jika tidak diisi maka akan error -->
                                            <?= form_error('email', '<small class="text-light pl-3">', '</small>'); ?>
                                        </div>
                                        <!-- mendefinisikan class yang akan dijadikan form pendaftaran -->
                                        <div class="form-group">
                                            <!-- Teks "Masukkan Nomor Telepon" diatas kotak-->
                                            <label for="no_hp">Masukkan Nomor Telepon</label>
                                            <!-- membuat kotak yg bisa dimasukkan teks untuk register dengan no hp --> 
                                            <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" placeholder="Ex. 0812xxxxxxx" value="<?= set_value('no_hp'); ?>">
                                            <!-- kotak wajib diisi, jika tidak diisi maka akan error -->
                                            <?= form_error('no_hp', '<small class="text-light pl-3">', '</small>'); ?>
                                        </div>
                                        <!-- mendefinisikan class yang akan dijadikan form pendaftaran dimana posisi buat sandi dan konfirmasi sandi bersebelahan-->
                                        <div class="form-group row">
                                            <!-- membuat responsive column dengan ukuran small -->
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <!-- Teks "Buat Sandi" diatas kotak -->
                                                <label for="email">Buat Sandi</label>
                                                <!-- teks yg dimasukkan akan diubah menjadi bintang agar tidak kelihatan dengan input type ="password" -->
                                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="">
                                                <!-- kotak wajib diisi, jika tidak diisi maka akan error -->
                                                <?= form_error('password1', '<small class="text-light pl-3">', '</small>'); ?>
                                            </div>
                                            <!-- membuat responsive column -->
                                            <div class="col-sm-6">
                                                <!-- Teks "Konfirmasi Sandi" diatas kotak -->
                                                <label for="email">Konfirmasi Sandi</label>
                                                 <!-- teks yg dimasukkan akan diubah menjadi bintang agar tidak kelihatan dengan input type ="password" -->
                                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="">
                                            </div>
                                        </div>
                                        <!-- membuat button untuk melakukan submit data registrasi --> 
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Gabung
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <!-- Membuat teks ketika di klik maka akan diarahkan ke menu login -->
                                        <a class="small" href="<?= base_url(''); ?>">Sudah Punya Akun ? Login Disini</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </body>
    </div>
</div>
