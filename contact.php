<html>
	<head>
		<title>Profil Admin</title>
		<link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		
<?php
if(isset($_GET["login"])){
  $kode=$_GET["login"];
    if($kode==1){
    echo "<script>alert('berhasil mengirim pesan')</script>";
    }
}
?>

	</head>
	<body style="background-color:#009688">
		<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.min.css" />

		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
							<li><a class="color_animation" href="halaman_awal.html">Home</a></li>
                        </ul>
        </div>
	
		<center>
		<div class = "container">
		<div class = "row">
		<div class = "col-xs-offset-3 col-xs-6">
		<div class = "well">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading" >
                            <h1>Kritik dan Saran</h1>
                        </div>
                    <form action="contact.php?login=1" method="POST">
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user blue"></i></span>
                                <input type="text" name="InputName" placeholder="Name" class="form-control" autofocus="autofocus" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope blue"></i></span>
                                <input type="email" name="InputEmail" placeholder="Email" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone blue"></i></span>
                                <input type="number" name="InputCno" placeholder="Phone" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-comment blue"></i></span>
                                <textarea name="InputMessage" rows="6" class="form-control" type="text" required></textarea>
                            </div>
                        </div>
                        <div class="">
                        <button type="submit" class="btn btn-info pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                            <button type="reset" value="Reset" name="reset" class="btn">Reset <span class="glyphicon glyphicon-refresh"></span></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	</div>
	</div>
	</div>
	</center>
	
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>
	</body>

</html>