<?php 
require "../../koneksi.php";
require "../../fungsi/fungsi_dsn.php";
$id = @$_GET["nip"];

if(hapus($id) > 0 ){
	echo "<script>
          alert('data berhasil dihapus:');
          document.location.href = '?pages=dosen';
         </script>";
}else {
    echo "<script>
           alert('data gagal dihapus:');
           document.location.href = '?pages=dosen';
          </script>";
  }
?>