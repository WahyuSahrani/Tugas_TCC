<?php 
require "../../fungsi/fungsi_mhs.php";

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

	//cek apakah    data berhasil ditambahkan atau tidak
	if(tambah($_POST) > 0 ){
		echo "
			<script>
				alert('data berhasil ditambahkan:');
				document.location.href = '?pages=mahasiswa';
			</script>
		";
	} else {
		echo ("error ". mysqli_error($conn));
		// echo "
		//  	<script>
		// 		alert('data gagal ditambahkan:');
		// 		document.location.href = 'pages=mahasiswa';
		// 	</script>
		// ";
	}

}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data mahasiswa</title>
</head>
<body>
  <div class="col-md-6">
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
              <input type="text" name="nim" class="form-control" id="nim" placeholder="Nomor Induk Mahasiswa" required>
            </div>
          </div>
           <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">Nama</label>

            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Mahasiswa" required>
            </div>
          </div>

           <div class="form-group">
            <label for="jk" class="col-sm-2 control-label">Gender</label>
              <div class="radio">
                <div class="col-sm-10">
                <label>
                  <input type="radio" name="jk" id="jk1" value="l" checked=""> Laki-Laki
                </label>
                <label>
                  <input type="radio" name="jk" id="jk2" value="p"> Perempuan
                </label>
              </div>           
            </div> 
          </div>

          <div class="form-group">
            <label for="pass1" class="col-sm-2 control-label">Tanggal Lahir</label>

            <div class="col-sm-10">
              <input type="text" name="tlahir" class="form-control" id="pass1" placeholder="Tanggal Lahir" required>
            </div>
          </div>
           <div class="form-group">
            <label for="pass2" class="col-sm-2 control-label">Alamat</label>

            <div class="col-sm-10">
              <input type="text" name="alamat" class="form-control" id="pass2" placeholder="Password" required>
            </div>
          </div> 
           <div class="form-group">
            <label for="Username" class="col-sm-2 control-label">Username</label>

            <div class="col-sm-10">
              <input type="text" name="user" class="form-control" id="Username" placeholder="Username" required>
            </div>
          </div> 
          <div class="form-group">
            <label for="pass2" class="col-sm-2 control-label">Password</label>

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
          <button type="reset" class="btn btn-default">Reset</button>
          <button type="submit" name="submit" class="btn btn-info pull-right">Tambah</button>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
  </div>
</body>
</html>