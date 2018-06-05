<?php 
include "../../fungsi/fungsi_krs.php";
$mhs = mysqli_query($conn, "SELECT * FROM mahasiswa");
$mk  = mysqli_query($conn, "SELECT * FROM mata_kuliah");


if(isset($_POST["submit"])){

  //cek apakah    data berhasil ditambahkan atau tidak
  if(tambah($_POST) > 0 ){
    echo "
      <script>
        alert('data berhasil ditambahkan:');        
      </script>
    ";
    
  } else {
    echo ("error ". mysqli_error($conn));
    echo "
       <script>
       alert('data gagal ditambahkan:');
     </script>
    ";
  }

}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="col-md-8">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Kartu Rencana Studi</h3>
    </div>
    <form class="form-horizontal" method="post" action="">
      <div class="box-body">
        <div class="form-group">
          <label for="nim" class="col-sm-2 control-label">NIM</label>

          <div class="col-sm-5">
          	<select name="nim" class="form-control" id="nim">          		
          			<option value="">- Pilih -</option> 
          			<?php foreach ($mhs as $row): ?>
          				<?php echo '<option name="nim" value="'.$row["nim"].'">'.$row["nim"].' - '.$row["nama"].'</option>'; ?>
          			<?php endforeach; ?>       	         		
          	</select>
          </div>
        </div>
        <div class="form-group">
          <label for="tahun" class="col-sm-2 control-label">Tahun Akademik</label>

          <div class="col-sm-3">
            <input type="text" name="tahun" class="form-control" id="tahun"  required>
          </div>
        </div> 
     <!--    <div class="form-group">
          <label for="mk" class="col-sm-2 control-label">Mata Kuliah</label>

          <div class="col-sm-8">
            <select name="mk" class="form-control" id="mk">             
                <option value="">- Pilih -</option> 
                <?php foreach ($mk as $rowmk): ?>
                  <?php echo '<option name="mk" value="'.$rowmk["kd_mk"].'">'.$rowmk["kd_mk"].' - '.$rowmk["nama_mk"].'</option>'; ?>
                <?php endforeach; ?>                    
            </select>
          </div>
        </div> -->
      </div>
      <div class="box-body table-responsive">
      <table class="table table-bordered table-striped table-responsive">
                <tr>
                  <th style="text-align: center;">Pilih</th>
                  <th style="text-align: center;">Kode MK</th>
                  <th style="text-align: center;">Nama</th>                  
                  <th style="text-align: center;">Semester</th>           
                  <th style="text-align: center;">SKS</th>       
                </tr>         
                 
                <?php foreach ($mk as $row): ?>                                
                <tr>
                  <td><input type="checkbox" name="cek[]" value="<?= $row['kd_mk']; ?>"></td>
                  <td><?= $row["kd_mk"]; ?></td>
                  <td><?= $row["nama_mk"]; ?></td>
                  <td><?= $row["semester"]; ?></td>
                  <td><?= $row["sks"]; ?></td>            
                </tr>              
               <?php endforeach; ?>                
            </table>         
    </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="reset" class="btn btn-default">Reset</button>
        <button type="submit" name="submit" class="btn btn-info pull-right" value="tambah">Tambah</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</div>
</body>
</html>