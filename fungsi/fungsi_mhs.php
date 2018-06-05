<?php 
include "../../koneksi.php";

function tambah($data){
	global $conn;
	//ambil data dari tiap elemen dalam form
	$nim     = htmlspecialchars($data["nim"]);
	$nama    = htmlspecialchars($data["nama"]);
	$jk		 = $data["jk"];
	$tgl     = htmlspecialchars($data["tlahir"]);
	$alamat  = htmlspecialchars($data["alamat"]);
	$user    = htmlspecialchars($data["user"]);
	$pass1	 = mysqli_real_escape_string($conn, $data["pass1"]);
	$pass2	 = mysqli_real_escape_string($conn, $data["pass2"]);

	//query insert data
	$result = mysqli_query($conn, "SELECT username FROM mahasiswa WHERE username = '$user'");

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

	//tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$jk', '$tgl', '$alamat', '$user', '$pass1')");

	return mysqli_affected_rows($conn);
}

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim = '$id'");
	return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;
	//ambil data dari tiap elemen dalam form
	$nim     = $data["nim"];
	$nama    = htmlspecialchars($data["nama"]);
	$jk		 = $data["jk"];
    $tlahir  = $data["tlahir"];
    $alamat	 = $data["alamat"];
	$user    = htmlspecialchars($data["user"]);
	$pass1	 = mysqli_real_escape_string($conn, $data["pass1"]);
	$pass2	 = mysqli_real_escape_string($conn, $data["pass2"]);


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
	$query = "UPDATE mahasiswa SET
				nim 	    = '$nim',
				nama  	 	= '$nama',
				jk 			= '$jk',
				tlahir		= '$tlahir',
				alamat		= '$alamat',
				password    = '$pass1'
				WHERE nim   = $nim";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

 ?>