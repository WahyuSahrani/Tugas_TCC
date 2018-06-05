<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css">

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
	<div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Selamat Datang 
            	<?php if (isset($_SESSION['admin'])) {
            	//	echo $_SESSION['admin']; 
                echo $_SESSION['nama'];
            	}else if (isset($_SESSION['dosen'])) { 
                echo $_SESSION['nama'];
            	}else if (isset($_SESSION['mahasiswa'])) { 
                echo $_SESSION['nama'];
            	} ?></h3>
          </div>
          <div class="box-body">
			Selamat datang di sistem informasi akademik. Sistem informas akademik adalah 
			sistem yang memungkinkan para civitas akademik POLITEKNIK MUARA TEWEH untuk 
			menerima informasi dengan lebih cepat malalui internet. Sistem ini diharapkan 
			dapat memberikan kemudahan setiap civitas akademia untuk melakukan aktivitas-aktivitas 
			akademik dan proses belajar mengajar. Selamat menggunakan fasilitas ini.
          </div>
          <!-- /.box-body -->
        </div>

</body>
</html>