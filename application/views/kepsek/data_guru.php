<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('format_indo')) {
    function format_indo($date)
    {
        //date_default_timezone_set('Asia/Jakarta');
        // array hari dan bulan
        $Hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
        $Bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        // pemisahan tahun, bulan, hari, dan waktu
        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 2);
        $tgl = substr($date, 8, 2);
        $waktu = substr($date, 11, 5);
        $hari = date("w", strtotime($date));
        $result = $Hari[$hari] . ", " . $tgl . " " . $Bulan[(int)$bulan - 1] . " " . $tahun . " " . $waktu;

        return $result;
    }
}
?>

<?php $this->load->view('admin/alert');?>

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
              <li class="breadcrumb-item"><a href="<?= base_url('kepsek') ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Guru</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<!-- Main content -->
<section class="content">
     <div class="container-fluid">
         <!-- Main row -->
         <div class="row">
             <div class="col-12">
                 <div class="card card-info">
                     <div class="card-header">
                     <h3 class="card-title">Data Guru (last update <?php echo date('d M Y'); ?>)</h3>
                     </div>
                     
                     <div class="card-body">

            <section class="content">
                <div class="row">
                    <div class="col-12">
                         <div class="card">

                        <!-- DataTales Example -->
                                    <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Status Aktif</th>
                    
                    
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php $id = 1;
                foreach ($guru as $row) : ?>
                    <tr>
                        <td><?= $id++; ?></td>
                        <td><?= $row->nip; ?></td>
                        <td><?= $row->nama_guru; ?></td>
                        <td><?= $row->jenis_kelamin; ?></td>
                        <td><?= $row->tempat_lahir; ?></td>
                        <td><?php echo format_indo($row->tgl_lahir) ?></td>
                        <td><?= $row->status_keaktifan; ?></td>
                        <td>
                            <?php echo anchor('kepsek/detail_guru/'.$row->nip, '<div title="Detail" class="btn btn-success btn-sm"><i class="fa fa-bars"></i></div>')?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
      </table>
      </div>
      </div>
    </div>
  </div>

</div>
</section>
</div>
</div>
</section>

<script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>






                    