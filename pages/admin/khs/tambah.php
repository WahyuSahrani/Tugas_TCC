<?php 
require "../../fungsi/fungsi_khs.php";

// ambil data di URL
$id = @$_GET["id_krs"];

// query data mahasiswa berdasarkan id
$khs = query("SELECT * FROM krs 
       INNER JOIN mata_kuliah ON krs.kd_mk = mata_kuliah.kd_mk 
       INNER JOIN mahasiswa ON krs.nim = mahasiswa.nim 
       WHERE krs.id_krs = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){
 
  // cek apakah  data berhasil diubah atau tidak
  if(tambah($_POST) > 0 ){
    echo "
      <script>
        alert('Nilai berhasil ditambahkan:');
        document.location.href = '?pages=khs';
      </script>
    ";
  } else {
    //echo ("error ". mysqli_error($conn));
    echo "
      <script>
        alert('Nilai berhasil ditambahkan:');
        document.location.href = '?pages=khs';
      </script>
    ";
  }

}

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Tambah data mahasiswa</title>
     <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css">

</head>
<body>
<div class="col-md-6">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah khs</h3>
    </div>
    <form class="form-horizontal" method="post" action="">
      <div class="box-body">
        <div class="form-group">
          <label for="nim" class="col-sm-2 control-label">NIM</label>

          <div class="col-sm-10">
            <input type="text" name="nim" class="form-control" readonly value="<?= $khs["nim"]; ?>">
          </div>
        </div>
         <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama</label>

          <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" readonly  value="<?= $khs["nama"]; ?>">
          </div>
        </div>
         <div class="form-group">
          <label for="kd_mk" class="col-sm-2 control-label">Kode MK</label>

          <div class="col-sm-10">
            <input type="text" name="kd_mk" class="form-control" readonly  value="<?= $khs["kd_mk"]; ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="pass1" class="col-sm-2 control-label">Nama MK</label>

          <div class="col-sm-10">
            <input type="text" name="pass1" class="form-control" readonly value="<?= $khs["nama_mk"]; ?>">
          </div>
        </div>
         <div class="form-group">
          <label for="pass2" class="col-sm-2 control-label">Nilai</label>

          <div class="col-sm-10">
           <select name="nilai" class="form-control">
           	<option>Pilih</option>
           	<option value="A">A</option>
           	<option value="B">B</option>
           	<option value="C">C</option>
           	<option value="D">D</option>
           	<option value="E">E</option>
           </select>
          </div>
        </div>
    
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" name="submit" class="btn btn-info pull-right">Tambah Nilai</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</div>
  </body>
  </html>