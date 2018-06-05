<?php 
include "../../koneksi.php";

function tambah($data){
	global $conn;
	//ambil data dari tiap elemen dalam form
	$jumlah = count($_POST["cek"]);
	for ($i = 0; $i < $jumlah; $i++) { 		
		$thn   = $_POST["tahun"];
		$nim   = $_POST["nim"];
		$kd	   = $_POST["cek"][$i];	

		//tambahkan user baru ke database
		mysqli_query($conn, "INSERT INTO krs VALUES ('','$thn','$kd','$nim')");

		
	}return mysqli_affected_rows($conn);

}

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM dosen WHERE nip = '$id'");
	return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;
	//ambil data dari tiap elemen dalam form
	$nip     = $data["nip"];
	$nama    = htmlspecialchars($data["nama"]);
	$user    = htmlspecialchars($data["user"]);
	$pass1	 = mysqli_real_escape_string($conn, $data["pass1"]);
	$pass2	 = mysqli_real_escape_string($conn, $data["pass2"]);


    $result = mysqli_query($conn, "SELECT username FROM dosen WHERE username = '$user'");

	if(mysqli_fetch_assoc($result)){
		echo "<script>
				alert('username sudah terdaftar!');
			  </script>";	
		return false;
	}

	//cek konf irmasi password
	if ($pass1 !== $pass2){
		echo "<script>
				alert('konfirmasi password tidak sesuai');
			  </script>";
		return false;
	}

	//enkripsi password
	$pass1 = password_hash($pass1, PASSWORD_DEFAULT);
	//query ubah data
	$query = "UPDATE dosen SET
				nip 	    = '$nip',
				nama_dosen 	= '$nama',
				username    = '$user',
				password    = '$pass1'
				WHERE nip = $nip";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

 ?>