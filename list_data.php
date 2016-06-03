<head>
	<title>Daftar Penumpang</title>
	<link rel = "stylesheet" type = "text/css" href = "./assets/css/bootstrap.min.css" />
</head>

<body>
	<div class="jumbotron">
    		<h1 style = "text-align: center">Daftar Penumpang</h1>
	</div>
		
	<?php
		require_once'Koneksi.php';
	?>
	    <div class="row">
        <div class="col-xs-offset-9 col-xs-2">
            <div class="input-group">
                <input type="text" class="form-control" id = "query" placeholder="Search&hellip;">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default">Go</button>
                </span>
            </div>
        </div>
	
	<div class = "container">
	<div class = "row">
	<div class = "col-xs-offset-1 col-xs-0">
	
	
	<div id = "data" >
	<table class="table">
		<thead>
			<tr>
			<td>No. Bangku</td>
			<td>Rute</td>
			<td>Nama</td>
			<td>Jadwal</td>
			<td>Pembayaran</td>
			<td>Action</td>
			</tr>
		</thead>
		
		<tbody>
			<?php
				$sql = "SELECT Nama, NPM, TL, Email FROM pengguna";
				$hasil = $db->query($sql);
				
				if($hasil->num_rows>0){
					$no = 1;
					while(($baris = $hasil->fetch_assoc())){
				
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $baris['Nama']; ?></td>
				<td><?php echo $baris['NPM']; ?></td>
				<td><?php echo $baris['TL']; ?></td>
				<td><a href = "" class = "btn btn-success">Sudah</a></td>
				<td><a class = "btn btn-primary" href = "form_edit.php?npm=<?php echo $baris['NPM']; ?>">Edit<a class = "btn btn-danger" href = 'javascript:tampilinModal("<?php echo $baris['NPM']; ?>");'>Hapus</td>
				
			</tr>
			
			<?php
				$no++;
					}
				}else{
					echo"No Data Available. Isi dulu di <a href'form_daftar.php' target='_blank'>Form Pendaftaran</a>";
				}
				?>
		</tbody>
	</table>
	</div>
	</div>
	
	<div class="modal fade" id="Pemberitahuan" tabindex="-1" role="modal" aria-labelledby="label">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="label">Pemberitahuan</h4>
				</div>
				  
				<div class="modal-body">
					Apakah Anda Ingin Menghapus Data ?<br>
					<a href = "" id="hapus" class = "btn btn-success">Ya</a>
					<a href = "" id="close" class = "btn btn-danger">No</a>
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src = "./assets/js/bootstrap.min.js"></script>
	
	<script>
		function tampilinModal(id){
			$("#Pemberitahuan").modal("show");
			$("#hapus").attr("href","form_hapus.php?npm=" +id);
		}
		
		$("#query").change(function(){
			var kata = $("#query").val();
			$.ajax({
				url : "form_search.php",
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