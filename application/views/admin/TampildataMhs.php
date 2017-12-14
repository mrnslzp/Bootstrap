
<a href="<?php echo base_url();?>index.php/TampilMhsController/tambah" class="btn btn-primary btn-xs">Tambah Data</a>
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr >
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Jurusan</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($mhs->result() as $row) { ?> 
                <tr>
                  <td><?php echo $row->nim;?></td>
                  <td><?php echo $row->nama ;?></td>
                  <td><?php echo $row->jurusan; ?></td>
                  <td><?php echo $row->jenis_kelamin; ?></td>
                  <td><?php echo $row->tempat_lahir; ?></td>
                  <?php $row->tanggal_lahir = date('d-m-Y', strtotime($row->tanggal_lahir)); ?>
                  <td><?php echo $row->tanggal_lahir; ?></td>
                  <td><?php echo $row->alamat; ?></td>

                  <td>
                    <a href="<?php echo base_url().'index.php/TampilMhsController/ubah/'.$row->nim; ?>"">Edit</a>
                    <a href="<?php echo base_url().'index.php/TampilMhsController/hapus/'.$row->nim; ?>"">Hapus</a> 
                </tr>
              <?php
              } ?>

                </tbody>
                <tfoot>
                <tr>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jurusan</th>
                  <th>J.Kelamin</th>
                  <th>TmpLahir</th>
                  <th>TglLahir</th>
                  <th>Alamat</th>
                  <th>Opsi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->