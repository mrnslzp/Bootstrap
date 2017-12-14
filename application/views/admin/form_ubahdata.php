
<form method="POST" action="<?php echo base_url().'index.php/TampildpaController/simpanUbah/'.$dpa->nik; ?>">

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
            <label>Username</label>
            <input type="username" class="form-control" name="username" placeholder="Username" required="" value="<?php echo set_value('username', $dpa->username); ?>" >
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required="" value="<?php echo set_value('password', $dpa->password); ?>" >
          </div>
          <div class="form-group">
            <label>NIK</label>
            <input type="text" class="form-control" name="nik" required="" value="<?php echo set_value('nik', $dpa->nik); ?>" readonly >
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" required="" value="<?php echo set_value('nama', $dpa->nama); ?>" >
          </div>
          <div class="form-group ">
            <label>Jurusan</label>
            <select class="form-control" name="jurusan" required="">
            <option value="Teknik Informatika" <?php echo set_select('jurusan', 'Teknik Informatika', ($dpa->jurusan == "Teknik Informatika")? true : false); ?> >Teknik Informatika</option>
            <option value="Teknik Industri" <?php echo set_select('jurusan', 'Teknik Industri', ($dpa->jurusan == "Teknik Industri")? true : false); ?> >Teknik Industri</option>
            <option value="Teknik Kimia" <?php echo set_select('jurusan', 'Teknik Kimia', ($dpa->jurusan == "Teknik Kimia")? true : false); ?> >Teknik Kimia</option>
            <option value="Teknik Mesin" <?php echo set_select('jurusan', 'Teknik Mesin', ($dpa->jurusan == "Teknik Mesin")? true : false); ?> >Teknik Mesin</option>
            <option value="Teknik Elektro" <?php echo set_select('jurusan', 'Teknik Elektro', ($dpa->jurusan == "Teknik Elektro")? true : false); ?> >Teknik Elektro</option>
          </select>
          </div>
          <div class="form-row" required="">
            <div class="form-group ">
              <label>Jenis Kelamin</label>
                <input name="jKel" type="radio" value="Laki-Laki" class="custom-control-input" <?php echo set_radio('jKel', 'Laki-Laki', ($dpa->jenis_kelamin == "Laki-Laki")? true : false); ?> >
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Laki-Laki</span>

                <input name="jKel" type="radio" value="Perempuan" class="custom-control-input" <?php echo set_radio('jKel', 'Perempuan', ($dpa->jenis_kelamin == "Perempuan")? true : false); ?> >
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Perempuan</span>
            </label>
            </div>
          </div>
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" class="form-control" name="tmpLahir" required="" value="<?php echo set_value('tmpLahir', $dpa->tempat_lahir); ?>" >
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
            <input type="textarea" class="form-control" name="alamat" required="" value="<?php echo set_value('alamat', $dpa->alamat); ?>" >
          </div>
          <div class="form-group">
            <label>No HP</label>
            <input type="text" class="form-control" name="noHP" placeholder="No HP atau Telepon" required="" value="<?php echo set_value('noHP', $dpa->no_hp); ?>" >
          </div>
          <div class="form-group ">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email', $dpa->email); ?>" >
            </div>
          </div>

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
  </div>
          <!-- /.box -->
