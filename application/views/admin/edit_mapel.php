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
              <li class="breadcrumb-item active">Data Mata Pelajaran</li>
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
                <h3 class="card-title">Form Tambah Mata Pelajaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <!-- /.card-header -->
              <!-- form start -->
              <form id="myForm" action="<?php echo site_url('admin/update_mapel') ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <label>Kode Mata Pelajaran</label>
                    <input required type="text" class="form-control"  placeholder="Isi Kode Mapel" name="kode_mapel" value="<?php echo $mapel->kode_mapel ?>">
                  </div>
                  <div class="col-5">
                    <label>Nama Mata Pelajaran</label>
                    <input required type="text" class="form-control"  placeholder="Isi Nama Mapel" name="nama_mapel" value="<?php echo $mapel->nama_mapel ?>">
                  </div>
                </div>

                <div class="row">
                  <div class="col-5">
                    <label>Jurusan</label>
                    <select required name="jurusan_kode" id="jurusan_kode" class="form-control">
                                                 <option value=""><?php echo $mapel->jurusan_kode ?></option>
                                                 <?php foreach ($jurusan_kode as $a) { ?>
                                                     <option value="<?= $a->kode_jurusan; ?>"><?= $a->nama_jurusan; ?></option>
                                                 <?php } ?>
                                             </select>
                  </div>
                  <div class="col-5">
                    <label>Kurikulum</label>
                    <select required name="kurikulum_kode" id="kurikulum_kode" class="form-control">
                                                 <option value=""><?php echo $mapel->kurikulum_kode ?></option>
                                                 <?php foreach ($kurikulum_kode as $b) { ?>
                                                     <option value="<?= $b->kode_kurikulum; ?>"><?= $b->nama_kurikulum; ?></option>
                                                 <?php } ?>
                                             </select>
                  </div>
                </div>

               
               
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <a type="button" class="btn btn-danger" href="<?= base_url('admin/mapel') ?>">Batal</a>
                    <input class="btn btn-primary" type="submit" name="btn" value="Simpan" />
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
                  <h3 class="timeline-header"><a href="#">Petunjuk Pengisian</a>Edit Mapel</h3>

                  <div class="timeline-body">
                    1. Kode Mapel harus dikasih tingkatan kelas diikuti dengan kode jurusan karena bersifat UNIQUE(ex: B.IND-XAV) <br>
                    2. Silahkan Masukkan Nama Mapel di ikuti Nama Jurusan<br>
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