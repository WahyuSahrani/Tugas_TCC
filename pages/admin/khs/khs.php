<?php 
require "../../fungsi/fungsi_dsn.php";
$khs = mysqli_query($conn, "SELECT * FROM krs 
       INNER JOIN mata_kuliah ON krs.kd_mk = mata_kuliah.kd_mk 
       INNER JOIN mahasiswa ON  krs.nim = mahasiswa.nim");

$nilai = mysqli_query($conn, "SELECT * FROM nilai 
       INNER JOIN mata_kuliah ON nilai.kd_mk = mata_kuliah.kd_mk 
       INNER JOIN mahasiswa ON  nilai.nim = mahasiswa.nim");

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

  //cek apakah    data berhasil ditambahkan atau tidak
  if(tambah($_POST) > 0 ){    
    echo "<script>
        alert('data berhasil ditambahkan:');
        document.location.href = '../index.php?pages=khs';
          </script>";
  } else {
    echo "<script>
       alert('data gagal ditambahkan:');
       document.location.href = '../index.php?pages=khs';
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
        <li class="active"> khs</li>
      </ol>

    <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah Nilai Mahasiswa</h3>
      <!--  --> 
    </div>  
    <div class="box-body table-responsive">
      <table id="example1" class="table table-bordered table-striped table-responsive" id="khs">
          <thead style="text-align: center;">  
            <tr>
              <th style="text-align: center;">No</th>
              <th style="text-align: center;">NIM</th>
              <th style="text-align: center;">Nama</th>                  
              <th style="text-align: center;">Kode MK</th>                
              <th style="text-align: center;">Nama MK</th>
              <th style="text-align: center;">Semester</th>
              <th style="text-align: center;">SKS</th>
              <th style="text-align: center;">Nilai</th>
            </tr>
          </thead>  
          <tbody>          
            <?php $i = 1; ?> 
            <?php foreach ($khs as $row): ?>
            <?php 
              $nim = $row["nim"];
              $kd  = $row["kd_mk"];
              $cek = mysqli_query($conn, "SELECT * FROM  nilai WHERE nim = '$nim' AND kd_mk = '$kd'");

              if(mysqli_num_rows($cek) == 0) { ?>                                       
            <tr>
              <td><?= $i; ?></td>
              <td><?= $row["nim"] ?></td>
              <td><?= $row["nama"]; ?></td>
              <td><?= $row["kd_mk"]; ?></td>
              <td><?= $row["nama_mk"]; ?></td>
              <td><?= $row["semester"]; ?></td>
              <td><?= $row["sks"]; ?></td>                       
              <td>  
               <a href="?pages=khs&aksi=ubah&id_krs=<?= $row["id_krs"]; ?>"  class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></a>
              </td>
            </tr>           
           <?php $i++; ?>
           <?php } ?>
           <?php endforeach; ?>

          </tbody>                   
      </table>         
    </div>  
  </div>

  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Rekap Nilai Mahasiswa</h3>
      <!--  --> 
    </div>  
    <div class="box-body table-responsive">
      <table id="example2" class="table table-bordered table-striped table-responsive" id="khs">
          <thead style="text-align: center;">  
            <tr>
              <th style="text-align: center;">No</th>
              <th style="text-align: center;">NIM</th>
              <th style="text-align: center;">Nama</th>
              <th style="text-align: center;">Nama MK</th>
              <th style="text-align: center;">SKS</th>
              <th style="text-align: center;">Nilai</th>
            </tr>
          </thead>  
          <tbody>          
            <?php $i = 1; ?> 
            <?php foreach ($nilai as $row): ?>                               
            <tr>
              <td><?= $i; ?></td>
              <td><?= $row["nim"] ?></td>
              <td><?= $row["nama"]; ?></td>
              <td><?= $row["nama_mk"]; ?></td>
              <td><?= $row["sks"]; ?></td>                       
              <td><?= $row["nilai"]; ?></td>
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



<!--   <script>
  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script> -->
</body>
</html>