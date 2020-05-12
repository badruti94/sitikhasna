<?php 
require_once '../../DB.php';
require_once 'header.php';

$data = ambilDataPengajuan();

 ?>

<div class="container-fluid">
	<?php 

	if(isset($_SESSION['pesan'])){

		 ?>

		 	<div class="alert alert-warning alert-dismissible fade show" role="alert">
			  <strong>Data Berhasil Dihapus
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		 <?php 

		 session_unset();
	}

	 ?>


	 <table class="table table-bordered table-hover table-striped" >
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nama</th>
	      <th scope="col">Alamat</th>
	      <th scope="col">No HP</th>
	      <th scope="col">Email</th>
	      <th scope="col">Jabatan</th>
	      <th scope="col">Keperluan</th>
	      <th scope="col">Status</th>
	      <th scope="col" colspan="3" class="text-center" >Aksi</th>
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
	      <td class="text-center" ><a href="setujui.php?id=<?php echo $dt['id_pengajuan'] ?>" title="setujui"  ><i class="fas fa-check text-success" ></i></a></td>
	      <td class="text-center" ><a href="edit.php?id=<?php echo $dt['id_pengajuan'] ?>"  ><i class="fas fa-edit text-warning" ></i></a></td>
	      <td class="text-center" ><a onclick="return confirm('Data Akan dihapus?');" href="hapus.php?id=<?php echo $dt['id_pengajuan'] ?>"  ><i class="fas fa-trash text-danger" ></i></a></td>
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