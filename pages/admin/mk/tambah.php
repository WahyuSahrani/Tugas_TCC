<?php 
require "../../fungsi/fungsi_mk.php";

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

	//cek apakah    data berhasil ditambahkan atau tidak
	if(tambah($_POST) > 0 ){
		echo "
			<script>
				alert('data berhasil ditambahkan:');
				document.location.href = '?pages=mk';
			</script>
		";
	} else {
		echo ("error ". mysqli_error($conn));
		// echo "
		//  	<script>
		// 		alert('data gagal ditambahkan:');
		// 		document.location.href = '../index.php?pages=Mata Kuliah';
		// 	</script>
		// ";
	}

}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data Mata Kuliah</title>
</head>
<body>
<div class="col-md-6">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah Mata Kuliah</h3>
    </div>
    <form class="form-horizontal" method="post" action="">
      <div class="box-body">
        <div class="form-group">
          <label for="kode" class="col-sm-2 control-label">Kode MK</label>

          <div class="col-sm-10">
            <input type="text" name="kode" class="form-control" id="kode" placeholder="Kode Mata Kuliah" required>
          </div>
        </div>
         <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama MK</label>

          <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Mata Kuliah" required>
          </div>
        </div>
         <div class="form-group">
          <label for="smt" class="col-sm-2 control-label">Semester</label>

          <div class="col-sm-10">
            <input type="text" name="smt" class="form-control" id="smt" placeholder="Semester" required>
          </div>
        </div>
        <div class="form-group">
          <label for="sks" class="col-sm-2 control-label">SKS</label>

          <div class="col-sm-10">
            <input type="text" name="sks" class="form-control" id="sks" placeholder="Password" required>
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