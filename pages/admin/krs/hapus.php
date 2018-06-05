<?php 
require "../../fungsi/fungsi_mhs.php";
$id = @$_GET["nim"];

if(hapus($id) > 0 ){
	echo "<script>
          alert('data berhasil dihapus:');
          document.location.href = '?pages=mahasiswa';
         </script>";
}else {

    echo "<script>
           alert('data gagal dihapus:');
           document.location.href = '?pages=mahasiswa';
          </script>";
  }
?>