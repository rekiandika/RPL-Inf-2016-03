
<html>
	<head>
		<title>Daftar Penumpang</title>
		<link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		
<?php
if(isset($_GET["login"])){
  $kode=$_GET["login"];
    if($kode==1){
    echo "<script>alert('berhasil mengirim data penumpang')</script>";
    }
}
?>
	</head>
	<body style="background-color:#009688">
		<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.min.css" />
		
		<div class="jumbotron">
    		<center><h1 <font size=40 color=black face=timesnewroman>L300Ku</font></h1></center>
			<div class="form-group">
			<div class="col-xs-offset-10 col-xs-10">
			</div>
		</div>
		</div>
		
		<div class="col-xs-offset-1 col-xs-2">
            <div class="input-group">
			<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
			<div class="input-group-btn">
				<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			</div>
		</div>
        </div>
		
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
							<li class="dropdown" >
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white"><span class="fa fa-sign-in" style="color:white"></span><span class="caret"></span></a>
							  <ul class="dropdown-menu" >
								 <li class="dropdown-header"></li>
								 <li><a href="profil_loket.html" style="font-size:15px;"><span class="fa fa-user"></span> Profil</a>  </li>
								 <hr>
								 <li><a href="halaman_awal.html" style="font-size:15px;"><span class="fa fa-power-off"></span> Log Out</a></li>
								 <li><a href="#" style="font-size:15px;"></a></li>
							  </ul>
							</li>
                        
                        </ul>
            </div>
		
		<div class = "container">
		<div class = "row">
		<div class = "demo-content bg-alt"></div>
		<div class = "well">
        <div class="bs-example">
		<table class="table table-bordered">		
        <thead>
			<br></br>
            <tr>
                <th><center>No</center></th>
                <th><center>Nama</center></th>
                <th><center>Rute</center></th>
                <th><center>Jadwal Keberangkatan</center></th>
				<th><center>Status</center></th>
				<th><center>Hapus</center></th>
            </tr>
        </thead>
        <tbody style="text-align:center">
            <tr>
                <td>1</td>
                <td>Khalid Rianda</td>
                <td>Banda Aceh-Lhokseumawe</td>
                <td>Senin, 27 Juni 2016</td>
				<td><a class = "btn btn-success">Selesai</td>
				<td><a class = "btn btn-danger">Hapus</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pobi Rizki</td>
                <td>Banda Aceh-Lhokseumawe</td>
                <td>Senin, 27 Juni 2016</td>
				<td><a class = "btn btn-danger">Pending</td>
				<td><a class = "btn btn-danger">Hapus</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Dayat Nrd</td>
                <td>Banda Aceh-Lhokseumawe</td>
                <td>Senin, 27 Juni 2016</td>
				<td><a class = "btn btn-danger">Pending</td>
				<td><a class = "btn btn-danger">Hapus</td>
            </tr>
			<tr>
                <td>4</td>
                <td>Baradizu</td>
                <td>Banda Aceh-Lhokseumawe</td>
                <td>Senin, 27 Juni 2016</td>
				<td><a class = "btn btn-danger">Pending</td>
				<td><a class = "btn btn-danger">Hapus</td>
            </tr>
			<tr>
                <td>5</td>
                <td>Arip</td>
                <td>Banda Aceh-Lhokseumawe</td>
                <td>Senin, 27 Juni 2016</td>
				<td><a class = "btn btn-danger">Pending</td>
				<td><a class = "btn btn-danger">Hapus</td>
            </tr>
        </tbody>
    </table>
			<br>
			<form action="daftar_penumpang.php?login=1" method="POST">
                <div class="panel-body">
				<div class="col-xs-offset-10 col-xs-10">
                <button type="submit" class="btn btn-success">Kirim Data</button>
				</div>
			</div>
			</div>
			</br>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src = "./assets/js/bootstrap.min.js"></script>
	
	<script>
		$("#query").change(function(){
			var kata = $("#query").val();
			$.ajax({
				url : "search.php",
				type : "GET",
				data : "query=" +kata,
				success : function(hasil){
					$("#data").html(hasil);
				}
			});
		});
	</script>
	</div>
	</body>

</html>