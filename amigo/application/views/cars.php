<?php 
  if(!empty($success)){
    echo '<div class="alert alert-success">'.$success.'</div>';
  }
?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Rent List</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 600px;">
        <a href="<?php echo base_url()?>Admin/addCars"><button class="btn btn-success">ADD NEW CAR</button></a>
        <table class="table table-head-fixed">
          <thead>
            <tr>
              <th>No.</th>
              <th>Plat Mobil</th>
              <th>Jenis Mobil</th>
              <th>Harga Sewa</th>
              <th>Total Pinjam</th>
              <th>Spesifikasi</th>
              <th>Status</th>
              <th>Foto</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $no = 1;
              foreach ($cars as $data) {
                 echo '<tr>
                      <td>'.$no.'</td>
                      <td>'.$data->platMobil.'</td>
                      <td>'.$data->jenisMobil.'</td>
                      <td>'.$data->hargaSewa.'</td>
                      <td>'.$data->totalPinjam.'</td>
                      <td>'.$data->spesifikasi.'</td>
                      <td>'.$data->status.'</td>
                      <td><img width="100px" src="'.base_url().'uploads/cars/'.$data->fotoMobil.'"></td>
                    </tr>';
                    $no++;
              }
            ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  </div>
  <!-- /.row -->