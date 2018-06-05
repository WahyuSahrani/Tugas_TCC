<?php 
require "../../fungsi/fungsi_dsn.php";
$dosen = mysqli_query($conn, "SELECT * FROM dosen");

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

  //cek apakah    data berhasil ditambahkan atau tidak
  if(tambah($_POST) > 0 ){    
    echo "<script>
        alert('data berhasil ditambahkan:');
        document.location.href = '../index.php?pages=dosen';
          </script>";
  } else {
    echo "<script>
       alert('data gagal ditambahkan:');
       document.location.href = '../index.php?pages=dosen';
          </script>";
  }

}

 ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
   <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">      
      <ol class="breadcrumb">
        <li><a href="?dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Dosen</li>
      </ol>

    <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Data Dosen</h3>
      <div class="pull-right">
       <a href="?pages=dosen&aksi=tambah" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Dosen </a>
      </div>  
    </div>  
    <div class="box-body table-responsive">
      <table id="example1" class="table table-bordered table-striped table-responsive" id="dosen">
          <thead style="text-align: center;">  
            <tr>
              <th style="text-align: center;">No</th>
              <th style="text-align: center;">NIP</th>
              <th style="text-align: center;">Nama</th>                  
              <th style="text-align: center;">Username</th>                
              <th style="text-align: center;">Aksi</th>
            </tr>
          </thead>  
          <tbody>          
            <?php $i = 1; ?> 
            <?php foreach ($dosen as $row): ?>                                
            <tr>
              <td><?= $i; ?></td>
              <td><?= $row["nip"] ?></td>
              <td><?= $row["nama_dosen"]; ?></td>
              <td><?= $row["username"]; ?></td>
              <td>
                <a href="?pages=dosen&aksi=ubah&nip=<?= $row["nip"]; ?>" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="?pages=dosen&aksi=hapus&nip=<?= $row["nip"]; ?>"onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
              </td>
              
            </tr>
           <?php $i++; ?>
           <?php endforeach; ?>
          </tbody>                   
      </table>         
    </div>
  </div>

 <!-- jQuery 2.1.4 -->
  <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../aset/dist/js/app.min.js"></script>
  <!-- Daterange Picker -->
  <script src="../aset/plugins/daterangepicker/moment.min.js"></script>
  <script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="../aset/plugins/select2/select2.full.min.js"></script>
  <script src="../aset/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
  <!-- page script -->



  <script>
  $(function () {
    $('#dosen').DataTable({
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