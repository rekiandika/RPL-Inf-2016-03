<html>
	<head>
		<title>Log In</title>
	</head>
	<body style="background-color:#009688">
		<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.min.css" />	
	
	<div class="jumbotron">
    		<h1 <font size=40 color=black face=timesnewroman>L300Ku</font></h1>
			<div class="form-group">
			</div>
		</div>
	
	<center>
	<h1>Log In</h1>
	<br></br>	
	<div class = "container">
	<div class = "row">
	<div class = "col-xs-offset-3 col-xs-6">
		<div class = "well">
		<form class = "form-horizontal" action = "form_login.php" method = "post">
		
		<div class="form-group">
            <label class="control-label col-xs-2">Nama</label>
            <div class="col-xs-10">
                <input type="text" name="nama" placeholder="Masukkan Nama" class="form-control" size="30" required="required"><br>
            </div>
        </div>
		
		<div class="form-group">
            <label class="control-label col-xs-2">Password</label>
            <div class="col-xs-10">
                <input type="password" name="pass_mhs" placeholder="Masukkan Password" class="form-control" size="30" required="required"><br>
            </div>
        </div>
		
		<div class="form-group">
            <div class="col-xs-offset-10 col-xs-0">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
		
</form>
</center>
</div>
		
			<?php
			if (isset($_POST["nama"])){
				
				$hasil =("berhasil");
				
				if($hasil=="berhasil"){
					$_SESSION['npm']=$npm;
					header("location:daftar_penumpang.html");
				}else{
					echo 'Periksa NPM atau Password Anda';
				}
			}
			?>
	</body>
</html>