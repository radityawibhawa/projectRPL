<div class="sistem">
    <div class="container">

        <body background="<?= base_url(); ?>assets/img/bg-login.png">
            <div class="row justify-content-end">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-3">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="p-3">
                                    <div class="text-center">
                                        <h1 class="regist">Daftar</h1>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                                        <div class="form-group">
                                            <label for="nama">Masukkan Nama</label>
                                            <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Ex. Kirito" value="<?= set_value('nama'); ?>">
                                            <?= form_error('nama', '<small class="text-light pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Masukkan Email</label>
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Ex. Kirito@gmail.com" value="<?= set_value('email'); ?>">
                                            <?= form_error('email', '<small class="text-light pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hp">Masukkan Nomor Telepon</label>
                                            <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" placeholder="Ex. 0812xxxxxxx" value="<?= set_value('no_hp'); ?>">
                                            <?= form_error('no_hp', '<small class="text-light pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="email">Buat Sandi</label>
                                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="">
                                                <?= form_error('password1', '<small class="text-light pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="email">Konfirmasi Sandi</label>
                                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Gabung
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/registration'); ?>">Belum Punya Akun ? Daftar Disini</a>
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