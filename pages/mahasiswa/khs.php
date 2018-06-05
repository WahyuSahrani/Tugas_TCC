<?php 
include "../../fungsi/fungsi_mhs.php";

$nim = $_SESSION['nim'];
$nilai = mysqli_query($conn, "SELECT * FROM nilai 
       INNER JOIN mata_kuliah ON nilai.kd_mk = mata_kuliah.kd_mk 
       WHERE nilai.nim = '$nim'");

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
        <li class="active">KHS</li>
      </ol>

    <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Kartu Hasil Studi</h3>
      <div class="pull-right">
       
      </div>
  
    </div>

   

    <div class="box-body table-responsive">
      <table border="1" cellpadding="10" id="example1" class="table table-bordered table-striped table-responsive" id="mk">
              <thead style="text-align: center;">  
                <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">Kode MK</th>                  
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
                  <td><?= $row["kd_mk"]; ?></td>
                  <td><?= $row["nama_mk"]; ?></td>
                  <td><?= $row["sks"]; ?></td>    
                  <td><?= $row["nilai"]; ?></td>                                  
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
