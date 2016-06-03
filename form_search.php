<head>
	<title>List Data</title>
	<link rel = "stylesheet" type = "text/css" href = "./assets/css/bootstrap.min.css" />
</head>

<body>

	<?php
		require_once'Koneksi.php';
		
		$que = $_GET['query'];
	?>
<!--	<form action = "form_search.php" method = GET/>
		<input type = "text" id = "query" required = "required" />
		<input type = "submit" value = "Cari" /> 
	</form> -->
	
	<table class="table">
		
		<thead>
			<tr>
			<td>No. Bangku</td>
			<td>Rute</td>
			<td>Nama</td>
			<td>Email</td>
			<td>Action</td>
			</tr>
		</thead>
		
		<tbody>
			<?php
				$sql = "SELECT Nama, NPM, TL, Email FROM pengguna WHERE Nama LIKE '%$que%' OR NPM LIKE '%$que%' OR TL LIKE '%$que%' OR Email LIKE '%$que%'";
				$hasil = $db->query($sql);
				
				if($hasil->num_rows>0){
					$no = 1;
					while(($baris = $hasil->fetch_assoc())){
				
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $baris['Nama']; ?></td>
				<td><?php echo $baris['NPM']; ?></td>
				<td><?php echo $baris['Email']; ?></td>
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
	</script>
</body>
</html>