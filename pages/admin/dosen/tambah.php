<?php 
require "../../fungsi/fungsi_dsn.php";

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

	//cek apakah    data berhasil ditambahkan atau tidak
	if(tambah($_POST) > 0 ){
		echo "
			
		";
	} else {
		echo ("error ". mysqli_error($conn));
		echo "
		 	<script>
				alert('data gagal ditambahkan:');
				document.location.href = '../index.php?pages=dosen';
			</script>
		";
	}

}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data mahasiswa</title>
  <script src="../../bower_components/jquery/sweetalert.min.js"></script>

</head>
<body>
<div class="col-md-6">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah Dosen</h3>
    </div>
    <form class="form-horizontal" method="post" id="simpan" action="">
      <div class="box-body">
        <div class="form-group">
          <label for="nip" class="col-sm-2 control-label">NIP</label>

          <div class="col-sm-10">
            <input type="text" name="nip" class="form-control" id="nip" placeholder="Nomor Induk Pegawai" required>
          </div>
        </div>
         <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama</label>

          <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Dosen" required>
          </div>
        </div>
         <div class="form-group">
          <label for="user" class="col-sm-2 control-label">Username</label>

          <div class="col-sm-10">
            <input type="text" name="user" class="form-control" id="user" placeholder="Username" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pass1" class="col-sm-2 control-label">Password</label>

          <div class="col-sm-10">
            <input type="password" name="pass1" class="form-control" id="pass1" placeholder="Password" required>
          </div>
        </div>
         <div class="form-group">
          <label for="pass2" class="col-sm-2 control-label">Konfirmasi Password</label>

          <div class="col-sm-10">
            <input type="password" name="pass2" class="form-control" id="pass2" placeholder="Konfirmasi Password" required>
          </div>
        </div>
    
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="button" class="btn btn-default" onclick="coba()">Reset</button>
        <button type="submit" name="submit" class="btn btn-info pull-right">Tambah</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>

  <script>
    function coba(){
       swal('Data berhasil ditambahkan');
      document.location.href = '?pages=dosen';
    }
     
  </script>

</div>
  </body>
  </html>