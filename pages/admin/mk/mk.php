<?php 
include "../../fungsi/fungsi_mhs.php";
$mk = mysqli_query($conn, "SELECT * FROM mata_kuliah");

 ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
 
</head>
<body class="hold-transition skin-blue sidebar-mini">  

    
      <ol class="breadcrumb">
        <li><a href="?dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">mata kuliah</li>
      </ol>

    <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Data Mata Kuliah</h3>
      <div class="pull-right">
        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh" ></i></a>
        <a href="?pages=mk&aksi=tambah" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah MK </a>
      </div>
  
    </div>

   

    <div class="box-body table-responsive">
      <table id="example1" class="table table-bordered table-striped table-responsive" id="mk">
              <thead style="text-align: center;">  
                <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">Kode MK</th>
                  <th style="text-align: center;">Nama</th>                  
                  <th style="text-align: center;">Semester</th>           
                  <th style="text-align: center;">SKS</th>       
                  <th style="text-align: center;">Aksi</th>
                </tr>
              </thead>  
              <tbody>          
                <?php $i = 1; ?> 
                <?php foreach ($mk as $row): ?>                                
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $row["kd_mk"]; ?></td>
                  <td><?= $row["nama_mk"]; ?></td>
                  <td><?= $row["semester"]; ?></td>
                  <td><?= $row["sks"]; ?></td>
                  <td style="text-align: center;">
                    <a href="?pages=mk&aksi=ubah&kd_mk=<?= $row["kd_mk"]; ?>" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="?pages=mk&aksi=hapus&kd_mk=<?= $row["kd_mk"]; ?>"onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                  
                </tr>
               <?php $i++; ?>
               <?php endforeach; ?>
              </tbody>                   
            </table>         
    </div>

    <!-- /.box-body -->
  </div>
  <script>
  $(function () {
    $('#example1').DataTable()
    $('#dokter').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
