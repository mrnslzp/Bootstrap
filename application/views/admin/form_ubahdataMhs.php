
<form method="POST" action="<?php echo base_url().'index.php/TampilMhsController/simpanUbah/'.$mhs->nim; ?>">
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
            <input type="text" class="form-control" name="nama" placeholder="Nama" required="" value="<?php echo set_value('nama', $mhs->nama); ?>"   >
          </div>
          <div class="form-group">
            <label>NIM</label>
            <input type="text" class="form-control" name="nim" required="" value="<?php echo set_value('nim', $mhs->nim); ?>" readonly>
          </div>
          <div class="form-group">
            <label>NIK DPA</label>
            <input type="text" class="form-control" name="nik" required="" value="<?php echo set_value('nik', $mhs->nik); ?>">
          </div>
          <div class="form-group ">
            <label>Jurusan</label>
            <select class="form-control" name="jurusan" required="">
            <option value="Teknik Informatika" <?php echo set_select('jurusan', 'Teknik Informatika', ($mhs->jurusan == "Teknik Informatika")? true : false); ?>>Teknik Informatika</option>
            <option value="Teknik Industri" <?php echo set_select('jurusan', 'Teknik Industri', ($mhs->jurusan == "Teknik Industri")? true : false); ?> >Teknik Industri</option>
            <option value="Teknik Kimia" <?php echo set_select('jurusan', 'Teknik Kimia', ($mhs->jurusan == "Teknik Kimia")? true : false); ?> >Teknik Kimia</option>
            <option value="Teknik Mesin" <?php echo set_select('jurusan', 'Teknik Mesin', ($mhs->jurusan == "Teknik Mesin")? true : false); ?> >Teknik Mesin</option>
            <option value="Teknik Elektro" <?php echo set_select('jurusan', 'Teknik Elektro', ($mhs->jurusan == "Teknik Elektro")? true : false); ?> >Teknik Elektro</option>
          </select>
          </div>
          <div class="form-row" required="">
            <div class="form-group ">
              <label>Jenis Kelamin</label>
                <input name="jKel" type="radio" value="Laki-Laki" class="custom-control-input" <?php echo set_radio('jKel', 'Laki-Laki', ($mhs->jenis_kelamin == "Laki-Laki")? true : false); ?>>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Laki-Laki</span>

                <input name="jKel" type="radio" value="Perempuan" class="custom-control-input" <?php echo set_radio('jKel', 'Perempuan', ($mhs->jenis_kelamin == "Perempuan")? true : false); ?> >
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Perempuan</span>
            </label>
            </div>
          </div>
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" class="form-control" name="tmpLahir" required="" value="<?php echo set_value('tmpLahir', $mhs->tempat_lahir); ?>" >
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
            <input type="textarea" class="form-control" name="alamat" required="" value="<?php echo set_value('alamat', $mhs->alamat); ?>" >
          </div>
          <div class="form-group">
            <label>No HP</label>
            <input type="text" class="form-control" name="noHP" placeholder="No HP atau Telepon" required="" value="<?php echo set_value('noHP', $mhs->no_hp); ?>">
          </div>
          <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email', $mhs->email); ?>">
            </div>
          </div>
          <div class="form-group">
            <label>Nama Ayah</label>
            <input type="text" class="form-control" name="namaayah" required="" value="<?php echo set_value('namaayah', $mhs->nama_ayah); ?>">
          </div>
          <div class="form-group">
            <label>Alamat Ayah</label>
            <input type="textarea" class="form-control" name="alamatayah" required="" value="<?php echo set_value('alamatayah', $mhs->alamat_ayah); ?>">
          </div>
          <div class="form-group">
            <label>No HP Ayah</label>
            <input type="text" class="form-control" name="nohpayah" placeholder="No HP atau Telepon" required="" value="<?php echo set_value('nohpayah', $mhs->noHP_ayah); ?>">
          </div>
          <div class="form-group">
            <label>Nama Ibu</label>
            <input type="text" class="form-control" name="namaibu" required="" value="<?php echo set_value('namaibu', $mhs->nama_ibu); ?>">
          </div>
          <div class="form-group">
            <label>Alamat Ibu</label>
            <input type="textarea" class="form-control" name="alamatibu" required="" value="<?php echo set_value('alamatibu', $mhs->alamat_ibu); ?>">
          </div>
          <div class="form-group">
            <label>No HP Ibu</label>
            <input type="text" class="form-control" name="nohpibu" placeholder="No HP atau Telepon" required="" value="<?php echo set_value('nohpibu', $mhs->noHP_ibu); ?>">
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
  </div>
          <!-- /.box -->

