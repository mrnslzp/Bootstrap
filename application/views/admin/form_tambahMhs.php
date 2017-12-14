
<form method="POST" action="<?php echo base_url();?>index.php/TampilMhsController/simpan">
  <div class="row">
    <!-- left column -->
    <div class="col-md-8">
    <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Data DPA</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama" required="">
          </div>
          <div class="form-group">
            <label>NIM</label>
            <input type="text" class="form-control" name="nim" required="">
          </div>
          <div class="form-group">
            <label>NIK DPA</label>
            <input type="text" class="form-control" name="nik" required="">
          </div>
          <div class="form-group ">
            <label>Jurusan</label>
            <select class="form-control" name="jurusan" required="">
            <option value="Teknik Informatika" selected="" >Teknik Informatika</option>
            <option value="Teknik Industri">Teknik Industri</option>
            <option value="Teknik Kimia">Teknik Kimia</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
          </select>
          </div>
          <div class="form-row" required="">
            <div class="form-group ">
              <label>Jenis Kelamin</label>
                <input name="jKel" type="radio" value="Laki-Laki" class="custom-control-input" checked="">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Laki-Laki</span>

                <input name="jKel" type="radio" value="Perempuan" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Perempuan</span>
            </label>
            </div>
          </div>
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" class="form-control" name="tmpLahir" required="">
          </div>
          <div class="form-group">
            <label>Tanggal Lahir</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="date" class="form-control pull-right" name="tglLahir" required="">
            </div>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="textarea" class="form-control" name="alamat" required="">
          </div>
          <div class="form-group">
            <label>No HP</label>
            <input type="text" class="form-control" name="noHP" placeholder="No HP atau Telepon" required="">
          </div>
          <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label>Nama Ayah</label>
            <input type="text" class="form-control" name="namaayah" required="">
          </div>
          <div class="form-group">
            <label>Alamat Ayah</label>
            <input type="textarea" class="form-control" name="alamatayah" required="">
          </div>
          <div class="form-group">
            <label>No HP Ayah</label>
            <input type="text" class="form-control" name="nohpayah" placeholder="No HP atau Telepon" required="">
          </div>
          <div class="form-group">
            <label>Nama Ibu</label>
            <input type="text" class="form-control" name="namaibu" required="">
          </div>
          <div class="form-group">
            <label>Alamat Ibu</label>
            <input type="textarea" class="form-control" name="alamatibu" required="">
          </div>
          <div class="form-group">
            <label>No HP Ibu</label>
            <input type="text" class="form-control" name="nohpibu" placeholder="No HP atau Telepon" required="">
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
  </div>
          <!-- /.box -->

