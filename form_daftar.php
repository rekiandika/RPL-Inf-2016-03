<html>
	<head>
		<title>Daftar</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css" />
	</head>
	
	<body>
	<div class="jumbotron">
    		<h1 style = "text-align: center">Daftar</h1>
	</div>
	<div class = "container">
	<div class = "row">
	<div class = "col-xs-offset-2 col-xs-8">
		<div class = "well">
		<form class = "form-horizontal" action = "form_daftar.php" method = "post">
		
		    <div class="form-group">
            <label class="control-label col-xs-2">Rute</label>
            <div class="col-xs-10">
                <input type="text" name="nama_mhs" placeholder="Masukkan Rute" class="form-control" size="30" required="required"><br>
            </div>
        </div>
		
		<div class="form-group">
            <label class="control-label col-xs-2">Nama</label>
            <div class="col-xs-10">
                <input type="text" name="nim_mhs" placeholder="Masukkan Nama" class="form-control" size="30" required="required"><br>
            </div>
        </div>
		
		<div class="form-group">
            <label class="control-label col-xs-2">Jadwal Keberangkatan</label>
            <div class="col-xs-10">
                <input type="date" name="tgl_mhs" placeholder="Masukkan Jadwal Keberangkatan" class="form-control"  size="30" required="required"><br>
            </div>
        </div>
		
		<div class="form-group">
            <label class="control-label col-xs-2">Password</label>
            <div class="col-xs-10">
                <input type="password" name="pass_mhs" placeholder="Masukkan Password" class="form-control" required="required"><br>
            </div>
        </div>
		
		<div class="form-group">
            <label class="control-label col-xs-2">Email</label>
            <div class="col-xs-10">
                <input type="email" name="email_mhs" placeholder="Masukkan Email" class="form-control" id="inputEmail" required="required"><br>
            </div>
        </div>
		
		<div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
            </div>
        </div>
		
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
        </div>
    
</form>
</div>
		
		
			<?php
			if (isset($_POST["nim_mhs"])){
				
				require_once 'Koneksi.php';
				
				$nama =  $_POST["nama_mhs"];
				$nim = $_POST["nim_mhs"];
				$tl = $_POST["tgl_mhs"];
				$pass = md5($_POST["pass_mhs"]);
				$email = $_POST ["email_mhs"];
				$Pembayaran = $_POST["false"];
				
				$sql =  "INSERT INTO pengguna VALUES ('$nama', '$nim', '$tl', '$pass', '$email','$Pembayaran')";
				
				if($db->query($sql)){
					echo 'Data Berhasil Disimpan';
					header("location:form_login.php");
				}else{
					echo 'Error : ' . $db->error;
				}
			}
			?>
	</body>
</html>