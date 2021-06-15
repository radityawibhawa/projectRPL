<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">User Lists</h3>

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
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed">
          <thead>
            <tr>
              <th>No.</th>
              <th>Username</th>
              <th>Email</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $no = 1;
              foreach ($user as $data) {
                echo '<tr>
                        <td>'.$no.'</td>
                        <td>'.$data->username.'</td>
                        <td>'.$data->email.'</td>
                        <td>'.$data->status.'</td>
                        <td>';
                          if ($data->status == 'WAITING') {
                                echo '<a href="'.base_url().'Admin/approved/'.$data->id_user.'"><button class="btn btn-success">APRROVE</button></a>';
                              }
                echo   '<a href="'.base_url().'Admin/viewUserDetail/'.$data->id_user.'"><button class="btn btn-primary"> View </button></a>
                        </td>
                      </tr>';
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