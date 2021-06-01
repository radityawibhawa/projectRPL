<!DOCTYPE html>
<html lang="en">

<body id="page-top">

    <div id="content-wrapper">

        <div class="container-fluid">
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('upload_gambar') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <div class="card-body">

                    <form action="<?php echo site_url('upload_gambar/tambah') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="jenis_mobil">Jenis_mobil*</label>
                            <input class="form-control <?php echo form_error('jenis_mobil') ? 'is-invalid' : '' ?>" type="text" name="jenis_mobil" placeholder="Jenis Mobil" />
                            <div class="invalid-feedback">
                                <?php echo form_error('jenis_mobil') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price">Spesifikasi Mobil*</label>
                            <input class="form-control <?php echo form_error('spesifikasi_mobil') ? 'is-invalid' : '' ?>" type="text" name="spesifikasi_mobil" placeholder="Spesifikasi Mobil" />
                            <div class="invalid-feedback">
                                <?php echo form_error('spesifikasi_mobil') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price">Mulai Dari*</label>
                            <input class="form-control <?php echo form_error('start_harga') ? 'is-invalid' : '' ?>" type="text" name="start_harga" placeholder="Start Harga Sewa" />
                            <div class="invalid-feedback">
                                <?php echo form_error('start_harga') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name">Gambar Mobil</label>
                            <input class="form-control-file <?php echo form_error('gambar_mobil') ? 'is-invalid' : '' ?>" type="file" name="image" />
                            <div class="invalid-feedback">
                                <?php echo form_error('gambar_mobil') ?>
                            </div>
                        </div>
                        <input class="btn btn-success" type="submit" name="btn" value="Save" />
                    </form>

                </div>

                <div class="card-footer small text-muted">
                    * required fields
                </div>


            </div>
        </div>
    </div>
</body>

</html>