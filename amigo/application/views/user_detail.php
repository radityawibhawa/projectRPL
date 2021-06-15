<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5">
        <div class="card card-primary">
          <div class="card-body">
            <div class="form-group">
              <label for="">Nama : <?php echo $user->nama?></label>
            </div>
            <div class="form-group">
              <label for="">Email Address : <?php echo $user->email?></label>
            </div>
            <div class="form-group">
              <label for="">Username : <?php echo $user->username?> </label>
            </div>
            <div class="form-group">
              <label for="">Phone : <?php echo $user->phone?></label>
            </div>
            <div class="form-group">
              <label for="">Alamat : <?php echo $user->alamat?></label>
            </div>
            <div class="form-group">
              <label for="">Role : <?php echo $user->role?></label>
            </div>
            <div class="form-group">
              <label for="">No KTP : <?php echo $user->noktp?></label>
            </div>
            <div class="form-group">
              <label for="">No SIM : <?php echo $user->nosim?></label>
            </div>
            <div class="form-group">
              <label for="">Status : <?php echo $user->status?></label>
            </div>
            <div class="form-group">
              <label for="">Tanggal Dibuat : <?php echo $user->created_at?></label>
            </div>
            <div class="form-group">
              <a href="<?php echo base_url()?>Admin"><button class="btn btn-primary">Back</button></a>
            </div>
          </div>
        </div>
  <!-- /.card -->
      </div>
      <div class="col-lg-7">
          <div class="card card-primary">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">KTP : </label>
                    <img src="<?php echo base_url()?>uploads/users/<?php echo $user->ktp?>" style="width:300px; height:200px; object-fit:cover;">
                  </div>
                  <div class="form-group">
                    <label for="">KTP + Selfie : </label>
                    <img src="<?php echo base_url()?>uploads/users/<?php echo $user->ktpselfie?>"style="width:300px; height:500px; object-fit:cover;">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="">SIM : </label>
                    <img src="<?php echo base_url()?>uploads/users/<?php echo $user->sim?>" style="width:300px; height:200px; object-fit:cover;">
                  </div>
                  <div class="form-group">
                    <label for="">SIM + Selfie : </label>
                    <img src="<?php echo base_url()?>uploads/users/<?php echo $user->simselfie?>" style="width:300px; height:500px; object-fit:cover;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
