<div class="row">
	<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah DPA</span>
              <span class="info-box-number"><?php echo $jumlahDpa;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Mahasiswa</span>
              <span class="info-box-number"><?php echo $jumlahMhs;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
	<div class="col-lg-12">
		<h1 class="text-center"><b>Welcome To UIIComsys <?php echo $this->session->userdata("username")?></b></h1>
	</div>	
</div>