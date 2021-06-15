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
        <table class="table table-head-fixed">
          <thead>
            <tr>
              <th>No.</th>
              <th>Username</th>
              <th>Tanggal Sewa</th>
              <th>Tanggal Kembali</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $no = 1;
              foreach ($rent as $data) {
                if($data->statusRent == 'WAITING'){
                   echo '<tr>
                        <td>'.$no.'</td>
                        <td>'.$data->username.'</td>
                        <td>'.$data->tgl_sewa.'</td>
                        <td>'.$data->tgl_kembali.'</td>
                        <td>'.$data->statusRent.'</td>
                        <td>
                        <a href="'.base_url().'Admin/finishRent/'.$data->id_rent.'/'.$data->id_mobil.'"><button class="btn btn-success"> Finish It </button></a>
                        <a href="'.base_url().'Admin/viewRentDetail/'.$data->id_rent.'"><button class="btn btn-primary"> View </button></a>
                        </td>
                      </tr>';
                    $no++;
                }
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