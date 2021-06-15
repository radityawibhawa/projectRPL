<?php
  if(!empty($error)){
    echo '<div class="alert alert-danger">'.$error.'</div>';
  }
?>
<section class="content">
  <div class="container-fluid">
    <div class="row d-flex justify-content-center">
      <div class="col-md-5">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add New Car</h3>
          </div>
          <div class="card-body">
            <form action="<?php echo base_url()?>Admin/addCar" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="">Plat Mobil : </label>
                <input type="text" class="form-control" name="plat" placeholder="Plat Mobil" value="<?php echo set_value('plat');?>" required>
              </div>
              <div class="form-group">
                <label for="">Jenis Mobil : </label>
                <input type="text" class="form-control" name="jenis" placeholder="Jenis Mobil" value="<?php echo set_value('jenis');?>" required>
              </div>
              <div class="form-group">
                <label for="">Harga Sewa : </label>
                <input type="number" min="0" class="form-control" name="harga" placeholder="Harga Sewa" value="<?php echo set_value('harga');?>" required>
              </div>
              <div class="form-group">
                <label for="">Spesifikasi Mobil : </label>
                <textarea class="form-control" placeholder="Spesifikasi Mobil" name="spek" value="<?php echo set_value('spek');?>" required></textarea>
              </div>
              <div class="form-group">
                <label for="">Foto Mobil : </label>
                <input type="file" accept=".jpg,.png,.jpeg" class="form-control" name="foto" placeholder="Foto Mobil">
              </div>
              <div class="form-group">
                <button class="btn btn-success" name="submit" type="submit" value="submit">Add Car</button>
              </div>
            </form>
          </div>
        </div>
  <!-- /.card -->
      </div>
    </div>
  </div>
</section>
