<div class="sistem">
    <div class="container">

        <body background="<?= base_url(); ?>assets/img/bg-login.png">
            <!-- Outer Row -->

            <div class="row justify-content-end">
                <div class=" col-lg-5">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="login">Log In</h1>
                                        </div>
                                        <?= $this->session->flashdata('message'); ?>
                                        <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                            <div class="form-group">
                                                <label for="email">Masukkan Email Anda</label>
                                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Ex. Kirito@gmail.com" value="<?= set_value('email'); ?>">
                                                <?= form_error('email', '<small class="text-light pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Masukkan Password Anda</label>
                                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="">
                                                <?= form_error('password', '<small class="text-light pl-3">', '</small>'); ?>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block btn-login" href="<?= base_url('user/beranda_user'); ?>">
                                                Login
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

            </div>

    </div>
</div>