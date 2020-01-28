<!DOCTYPE html>
<html>
<head>
	<title>Belajar Export Dan Import Data</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">
</head>
<body>
	<div class="container">

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">Hayu Ngoding</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url() ?>index.php/beranda">Beranda <span class="sr-only">(current)</span></a>
		      </li>

		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo base_url() ?>index.php/siswa">Siswa</a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url() ?>index.php/kontak">Kontak</a>
		      </li>

		    </ul>
		    
		  </div>
		</nav>

		<br><br>
		<h3>Data Siswa</h3>
		<table id="myTable" class="table table-striped table-bordered table-sm" style="width:100%">
		    <thead class="table-primary">
		        <tr>
		            <th>No</th>
		            <th>Nama</th>
		            <th>Jenis Kelamin</th>
		            <th>Alamat</th>
		            <th>Opsi</th>
		        </tr>
		    </thead>
		    <tbody>
		    <?php $no=1; foreach ($data_siswa as $row) {
		    ?>
		        <tr>
		            <td><?php echo $no++; ?></td>
		            <td><?php echo $row->nama ?></td>
		            <td><?php echo $row->jenis_kelamin ?></td>
		            <td><?php echo $row->alamat ?></td>
		            <td>
		            	<a href="<?php echo base_url() ?>index.php/siswa/lihat/<?php echo $row->id_siswa ?>"><button type="button" class="btn btn-success btn-sm">Lihat</button></a>
		            	<a href="<?php echo base_url() ?>index.php/siswa/edit/<?php echo $row->id_siswa ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
		            	<a href="<?php echo base_url() ?>index.php/siswa/hapus/<?php echo $row->id_siswa ?>"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
		            </td>
		        </tr>
		    <?php } ?>
		    </tbody>
		</table>

	</div>

</body>
</html>

<script src="<?php echo base_url()?>assets/js/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script>

<script>
  	$(document).ready( function () {
    	$('#myTable').DataTable();
    });
</script>