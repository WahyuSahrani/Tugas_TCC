<?php 
require "../../fungsi/fungsi_mhs.php";

// ambil data di URL
$id = @$_GET["nim"];

// query data mahasiswa berdasarkan id
$mahasiswa = query("SELECT * FROM mahasiswa WHERE nim = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){
 
  // cek apakah  data berhasil diubah atau tidak
  if(ubah($_POST) > 0 ){
    echo "
      <script>
        alert('data berhasil diubah:');
        document.location.href = '?pages=mahasiswa';
      </script>
    ";
  } else {
    // echo ("error ". mysqli_error($conn));
    echo "
      <script>
        alert('data gagal diubah:');
        document.location.href = '?pages=mahasiswa';
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
<div class="col-md-9">
    <!-- Horizontal Form -->
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Tambah Mahasiswa</h3>
      </div>
      <form class="form-horizontal" method="post" action="">
        <div class="box-body">
          <div class="form-group">
            <label for="nim" class="col-sm-2 control-label">NIM</label>

            <div class="col-sm-10">
              <input type="text" name="nim" class="form-control" id="nim" value="<?= $mahasiswa["nim"]; ?>">
            </div>
          </div>
           <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Nama</label>

            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa["nama"]; ?>">
            </div>
          </div>

           <div class="form-group">
            <label for="jk" class="col-sm-2 control-label">Gender</label>
              <div class="radio">
                <div class="col-sm-10">
                <label>
                  <input type="radio" name="jk" id="jk1" value="<?= $mahasiswa["jk"]; ?>"> Laki-Laki
                </label>
                <label>
                  <input type="radio" name="jk" id="jk2" value="<?= $mahasiswa["jk"]; ?>"> Perempuan
                </label>
              </div>           
            </div> 
          </div>

          <div class="form-group">
            <label for="tgl" class="col-sm-2 control-label">Tanggal Lahir</label>

            <div class="col-sm-10">
              <input type="text" name="tlahir" class="form-control" id="tgl" value="<?= $mahasiswa["tlahir"]; ?>">
            </div>
          </div>
           <div class="form-group">
            <label for="alamat" class="col-sm-2 control-label">Alamat</label>

            <div class="col-sm-10">
              <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $mahasiswa["alamat"]; ?>">
            </div>
          </div> 
           <div class="form-group">
            <label for="Username" class="col-sm-2 control-label">Username</label>

            <div class="col-sm-10">
              <input type="text" name="user" class="form-control" id="Username" value="<?= $mahasiswa["username"]; ?>">
            </div>
          </div> 
          <div class="form-group">
            <label for="pass1" class="col-sm-2 control-label">Password</label>

            <div class="col-sm-10">
              <input type="password" name="pass1" class="form-control" id="pass1" placeholder="Konfirmasi Password">
            </div>
          </div> 
          
          <div class="form-group">
            <label for="pass2" class="col-sm-2 control-label">Konfirmasi Password</label>

            <div class="col-sm-10">
              <input type="password" name="pass2" class="form-control" id="pass2" placeholder="Konfirmasi Password">
            </div>
          </div>    
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="reset" class="btn btn-default">Reset</button>
          <button type="submit" name="submit" class="btn btn-info pull-right">Tambah</button>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
  </div>
  </body>
  </html>