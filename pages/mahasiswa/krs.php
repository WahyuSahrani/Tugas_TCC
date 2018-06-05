<?php 
include "../../fungsi/fungsi_mhs.php";

$nim = $_SESSION['nim'];
$krs = mysqli_query($conn, "SELECT * FROM krs 
       INNER JOIN mata_kuliah ON krs.kd_mk = mata_kuliah.kd_mk 
       INNER JOIN mahasiswa ON  krs.nim = mahasiswa.nim 
       WHERE krs.nim = '$nim'");

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
        <li class="active">KRS</li>
      </ol>

    <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Kartu Rencana Studi</h3>
      <div class="pull-right">
       
      </div>
  
    </div>

   

    <div class="box-body table-responsive">
      <table border="1" cellpadding="10" id="example1" class="table table-bordered table-striped table-responsive" id="mk">
              <thead style="text-align: center;">  
                <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">Tahun Akademik</th>
                  <th style="text-align: center;">Kode MK</th>                  
                  <th style="text-align: center;">Nama MK</th>           
                  <th style="text-align: center;">Semester</th>       
                  <th style="text-align: center;">SKS</th>
                </tr>
              </thead>  
              <tbody>          
                <?php $i = 1; ?> 

                <?php foreach ($krs as $row): ?>                               
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $row["tahun_ajaran"]; ?></td>
                  <td><?= $row["kd_mk"]; ?></td>
                  <td><?= $row["nama_mk"]; ?></td>
                  <td><?= $row["semester"]; ?></td>
                  <td><?= $row["sks"]; ?></td>                                  
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
