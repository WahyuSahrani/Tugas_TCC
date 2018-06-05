<?php 
include "../../fungsi/fungsi_mhs.php";
$mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa");

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
        <li class="active">mahasiswa</li>
      </ol>

    <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Data mahasiswa</h3>
      <div class="pull-right">
        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh" ></i></a>
        <a href="?pages=mahasiswa&aksi=tambah" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Dosen </a>
      </div>
  
    </div>

   

    <div class="box-body table-responsive">
      <table id="example1" class="table table-bordered table-striped table-responsive" id="mahasiswa">
              <thead style="text-align: center;">  
                <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">NIM</th>
                  <th style="text-align: center;">Nama</th>                  
                  <th style="text-align: center;">Gender</th>           
                  <th style="text-align: center;">Tgl Lahir</th> 
                  <th style="text-align: center;">Alamat</th>        
                  <th style="text-align: center;">Aksi</th>
                </tr>
              </thead>  
              <tbody>          
                <?php $i = 1; ?> 
                <?php foreach ($mahasiswa as $row): ?>                                
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $row["nim"] ?></td>
                  <td><?= $row["nama"]; ?></td>
                  <td><?= $row["jk"]; ?></td>
                  <td><?= $row["tlahir"]; ?></td>
                  <td><?= $row["alamat"]; ?></td>
                  <td style="text-align: center;">
                    <a href="?pages=mahasiswa&aksi=ubah&nim=<?= $row["nim"]; ?>" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="?pages=mahasiswa&aksi=hapus&nim=<?= $row["nim"]; ?>"onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
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
