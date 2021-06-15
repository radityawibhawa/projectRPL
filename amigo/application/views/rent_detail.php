<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-body">
            <div class="form-group">
              <label for="">Nama : <?php echo $rent->nama?></label>
            </div>
            <div class="form-group">
              <label for="">Email Address : <?php echo $rent->email?></label>
            </div>
            <div class="form-group">
              <label for="">Username : <?php echo $rent->username?> </label>
            </div>
            <div class="form-group">
              <label for="">Phone : <?php echo $rent->phone?></label>
            </div>
            <div class="form-group">
              <label for="">Jenis Mobil : <?php echo $rent->jenisMobil?></label>
            </div>
            <div class="form-group">
              <label for="">Tanggal Sewa : <?php echo $rent->tgl_sewa?></label>
            </div>
            <div class="form-group">
              <label for="">Tanggal Kembali : <?php echo $rent->tgl_kembali?></label>
            </div>
            <div class="form-group">
              <label for="">Total Pinjaman : <?php echo $rent->totalHariPinjam?> Hari</label>
            </div>
            <div class="form-group">
              <label for="">Waktu Ambil : <?php echo $rent->waktu_ambil?></label>
            </div>
            <div class="form-group">
              <label for="">Alamat : <?php echo $rent->alamatAmbil?></label>
            </div>
            <div class="form-group">
              <label for="">Alamat Kembali : <?php echo $rent->alamat_kembali?></label>
            </div>
          </div>
        </div>
  <!-- /.card -->
      </div>
      <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-body">
              <div class="form-group">
                <label for="">Keterlambatan : <?php echo $rent->keterlambatan?> Hari</label>
              </div>
              <div class="form-group">
                <label for="">Denda : Rp.<?php echo $rent->denda?></label>
              </div>
              <div class="form-group">
                <label for="">Total Bayar : <?php echo $rent->total_bayar?></label>
              </div>
              <div class="form-group">
                <label for="">Nama Rekening : <?php echo $rent->nama_rekening?></label>
              </div>
              <div class="form-group">
                <label for="">Nomor Kartu : <?php echo $rent->nomor_kartu?></label>
              </div>
              <div class="form-group">
                <label for="">Masa Akhir Kartu : <?php echo $rent->masa_akhir_kartu?></label>
              </div>
              <div class="form-group">
                <label for="">CVV : <?php echo $rent->cvv?></label>
              </div>
              <div class="form-group">
                <label for="">Dipesan Tanggal : <?php echo $rent->dipesanTgl?></label>
              </div>
              <div class="form-group">
                <label for="">Status : <?php echo $rent->statusRent?></label>
              </div>
              <div class="form-group">
            <?php 
              if($id->role == 'MANAGER'){
                echo '<a href="'.base_url().'Admin/manager"><button class="btn btn-primary form-control" >Back</button></a>';
              } else {
                echo '<a href="'.base_url().'Admin/viewRent"><button class="btn btn-primary form-control">Back</button></a>';
              }
            ?>
          </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
