<?php 
require_once '../DB.php';


if(isset($_POST['submit'])){
  ajukan($_POST);

  header("Location: index.php");
  exit;
}

require_once 'header.php';

 ?>


<div class="container-fluid">	
	<form class="form" action="" method="post">
		<form-group>
			<label for="">Nama</label>
			<input type="text" class="form-control" name="nama">
		</form-group>
		<form-group>
			<label for="">Alamat</label>
			<input type="text" class="form-control" name="alamat">
		</form-group>
		<form-group>
			<label for="">No HP</label>
			<input type="text" class="form-control" name="no_hp">
		</form-group>
		<form-group>
			<label for="">Email</label>
			<input type="text" class="form-control" name="email">
		</form-group>
		<form-group>
			<label for="">Jabatan</label>
			<input type="text" class="form-control" name="jabatan">
		</form-group>
		<form-group>
			<label for="">Keperluan</label>
			<input type="text" class="form-control" name="keperluan">
		</form-group>
		<button class="btn btn-primary" type="submit" name="submit">Kirim</button>
	</form>
</div>


<?php 
require_once 'footer.php';

 ?>