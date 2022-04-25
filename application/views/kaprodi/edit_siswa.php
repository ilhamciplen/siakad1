<div class="content-wrapper">
         <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title;  ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url('admin/data_master') ?>">Data Master</a></li>
              <li class="breadcrumb-item active">Data Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Form Edit Siswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <!-- /.card-header -->
              <!-- form start -->
              <form id="myForm" action="<?php echo site_url('kaprodi/update_siswa') ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="row">
                  <div class="col-6">
                    <label>NISN</label>
                    <input required type="text" class="form-control"  placeholder="Isi NISN" name="nisn" value="<?php echo $siswa->nisn ?>">
                  </div>
                  <div class="col-6">
                    <label>Kelurahan</label>
                    <input required type="text" class="form-control"  placeholder="Isi Kelurahan" name="kelurahan" value="<?php echo $siswa->kelurahan ?>">
                  </div>

                </div>
                <div class="row">
                  <div class="col-6">
                  <label>Nama Siswa</label>
                    <input required type="text" class="form-control"  placeholder="Isi Nama Siswa" name="nama_siswa" value="<?php echo $siswa->nama_siswa ?>">
                  </div>
                  <div class="col-6">
                    <label>Kecamatan</label>
                    <input required type="text" class="form-control"  placeholder="Isi Kecamatan" name="kecamatan" value="<?php echo $siswa->kecamatan ?>">
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-6">
                    <label>NIK</label>
                    <input required type="text" class="form-control"  placeholder="Isi NIK" name="nik" value="<?php echo $siswa->nik ?>">
                  </div>
                  <div class="col-6">
                    <label>Kode Pos</label>
                    <input required type="text" class="form-control"  placeholder="Isi Kode Pos" name="kode_pos" value="<?php echo $siswa->kode_pos ?>">
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-6">
                    <label>Tempat Lahir</label>
                    <input required type="text" class="form-control"  placeholder="Isi Tempat Lahir" name="tempat_lahir" value="<?php echo $siswa->tempat_lahir ?>">
                  </div>
                  <div class="col-6">
                    <label>Jenis Tinggal</label>
                    <input required type="text" class="form-control"  placeholder="Isi Jenis Tinggal" name="jenis_tinggal" value="<?php echo $siswa->jenis_tinggal ?>">
                  </div>
                 
                </div>
                <div class="row">
                  <div class="col-6">
                    <label>Tanggal Lahir</label>
                    <input required type="date" class="form-control"  placeholder="Isi Tanggal Lahir" name="tgl_lahir" value="<?php echo $siswa->tgl_lahir ?>">
                  </div>
                  <div class="col-6">
                    <label>Transportasi</label>
                    <input required type="text" class="form-control"  placeholder="Isi Transportasi" name="transportasi" value="<?php echo $siswa->transportasi ?>">
                  </div>
                 
                </div>
                <div class="row">
                  <div class="col-6">
                    <label>Jenis Kelamin</label>
                    <select required name="jenis_kelamin" class="form-control">
                    <option value="<?php echo $siswa->jenis_kelamin ?>"><?php echo $siswa->jenis_kelamin ?></option>
                      <option value="laki-laki">Laki-Laki</option>
                     <option value="perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="col-6">
                    <label>E-mail</label>
                    <input required type="text" class="form-control"  placeholder="Isi E-Mail" name="email" value="<?php echo $siswa->email ?>">
                  </div>
                </div>

                <div class="row">
                  <div class="col-6">
                    <label>Agama</label>
                    <input required type="text" class="form-control"  placeholder="Isi Agama" name="agama" value="<?php echo $siswa->agama ?>">
                  </div>
                  <div class="col-6">
                    <label>No. Telepon</label>
                    <input required type="text" class="form-control"  placeholder="Isi No. Telepon" name="no_telepon" value="<?php echo $siswa->no_telepon ?>">
                  </div>
                </div>

                <div class="row">
                  <div class="col-6">
                    <label>Alamat</label>
                    <input required type="text" class="form-control"  placeholder="Isi Alamat" name="alamat" value="<?php echo $siswa->alamat ?>">
                  </div>
                  <div class="col-6">
                    <label>No HP</label>
                    <input required type="text" class="form-control"  placeholder="Isi No. HP" name="no_hp" value="<?php echo $siswa->no_hp ?>">
                  </div>
                 
                </div>

                <div class="row">
                  <div class="col-6">
                    <label>Dusun/Desa</label>
                    <input required type="text" class="form-control"  placeholder="Isi Dusun/Desa" name="dusun" value="<?php echo $siswa->dusun ?>">
                  </div>
                  <div class="col-6">
                    <label>Kelas</label>
                    <select required name="kelas_kode" id="kelas_kode" class="form-control">
                    <option value=""><?= $siswa->kelas_kode?></option>
                                                 <?php foreach ($kelas_kode as $e) { ?>
                                                     <option value="<?= $e->kode_kelas; ?>"><?= $e->nama_kelas; ?></option>
                                                 <?php } ?>
                                             </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <label>Jurusan</label>
                    <select required name="jurusan_kode" id="jurusan_kode" class="form-control">
                                                 <option value=""><?= $siswa->jurusan_kode?></option>
                                                 <?php foreach ($jurusan_kode as $f) { ?>
                                                     <option value="<?= $f->kode_jurusan; ?>"><?= $f->nama_jurusan; ?></option>
                                                 <?php } ?>
                                             </select>
                  </div>
                 
                </div>

                <div class="row">
                  <div class="col-6">
                    <label>Nama Ayah</label>
                    <input required type="text" class="form-control"  placeholder="Isi Nama Ayah" name="nama_ayah" value="<?php echo $siswa->nama_ayah ?>">
                  </div>
                  <div class="col-6">
                    <label>Nama Ibu</label>
                    <input required type="text" class="form-control"  placeholder="Isi Nama Ibu" name="nama_ibu" value="<?php echo $siswa->nama_ibu ?>">
                  </div>

                </div>
                <div class="row">
                  <div class="col-6">
                    <label>Pekerjaan Ayah</label>
                    <input required type="text" class="form-control"  placeholder="Isi Pekerjaan Ayah" name="pekerjaan_ayah" value="<?php echo $siswa->pekerjaan_ayah ?>">
                  </div>
                  <div class="col-6">
                    <label>Pekerjaan Ibu</label>
                    <input required type="text" class="form-control"  placeholder="Isi Pekerjaan Ibu" name="pekerjaan_ibu" value="<?php echo $siswa->pekerjaan_ibu ?>">
                  </div>

                </div>
                <div class="row">
                  <div class="col-6">
                    <label>Kontak Ayah</label>
                    <input required type="text" class="form-control"  placeholder="Isi Kontak Ayah" name="kontak_ayah" value="<?php echo $siswa->kontak_ayah ?>">
                  </div>
                  <div class="col-6">
                    <label>Kontak Ibu</label>
                    <input required type="text" class="form-control"  placeholder="Isi Kontak Ibu" name="kontak_ibu" value="<?php echo $siswa->kontak_ibu ?>">
                  </div>

                </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <a type="button" class="btn btn-danger" href="<?= base_url('kaprodi/kelas') ?>">Batal</a>
                    <input class="btn btn-primary" type="submit" name="btn" value="Update" />
                </div>

              </form>
           
            <!-- /.card -->

        </div></div>

        <div class="col-md-4">
            <!-- general form elements disabled -->
            <!-- timeline item -->
              <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-red">Harap Dibaca</span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-bell bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> <?php echo date('l, d M Y'); ?></span>
                  <h3 class="timeline-header"><a href="#">Petunjuk Pengisian</a> Data Siswa</h3>

                  <div class="timeline-body">
                    1. Silahkan isi data yang ada<br>
                    2. Alamat diisi secara lengkap<br>
                    3. Jika belum jelas bisa menghubungi Contact Person yang ada<br>
                  

                    
                  </div>
                  
                </div>
              </div>

                <div>
                <i class="fas fa-user bg-green"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-comments"></i><a href="https://api.whatsapp.com/send?phone=+62 "> Hanya Whatsapp</a></span>
                  <h3 class="timeline-header no-border">Edi Susanto, S.Pd &nbsp;&nbsp;<br><a href="https://api.whatsapp.com/send?phone=+62 ">0899-9999-9999</a></h3>
                </div>
               </div>
              </div>
          </div>
      

              

</div></div></div></div></div></div></div></section>