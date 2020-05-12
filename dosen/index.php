<?php 
require_once '../DB.php';
require_once 'header.php';

$data = ambilDataPengajuanDosen();


 ?>

<div class="container-fluid">
	<?php 

	if($_SESSION['pesan']){

		 ?>

		 	<div class="alert alert-warning alert-dismissible fade show" role="alert">
			  <strong>Email Berhasil Diajukan
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		 <?php 

		 $_SESSION['pesan'] = false;
	}

	 ?>

	 <a class="btn btn-primary" href="ajukan.php">Ajukan Email <i class="fas fa-plus" ></i> </a>
	 <table class="table table-bordered table-hover table-striped" >
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nama</th>
	      <th scope="col">Alamat</th>
	      <th scope="col">Nomor Hp</th>
	      <th scope="col">Email</th>
	      <th scope="col">Jabatan</th>
	      <th scope="col">Keperluan</th>
	      <th scope="col">Status</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php
	  	$i = 1;
	  	foreach ($data as $dt) { ?>
	    <tr>
	      <th scope="row"><?php echo $i ?></th>
	      <td><?php echo $dt['nama'] ?></td>
	      <td><?php echo $dt['alamat'] ?></td>
	      <td><?php echo $dt['no_hp'] ?></td>
	      <td><?php echo $dt['email'] ?></td>
	      <td><?php echo $dt['jabatan'] ?></td>
	      <td><?php echo $dt['keperluan'] ?></td>
	      <td><?php echo $dt['status'] ?></td>
	    </tr>
	    <?php 
	    $i++;
	}
	     ?>
	  </tbody>
	</table>
</div>


<?php 
require_once 'footer.php';

 ?>