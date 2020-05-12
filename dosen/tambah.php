<?php 
require_once '../../DB.php';
require_once 'header.php';

if(isset($_POST['submit'])){
  tambahDataUser($_POST);
}

 ?>


<div class="container-fluid">

	<?php 

	if(isset($_SESSION['pesan'])){

		 ?>

		 	<div class="alert alert-warning alert-dismissible fade show" role="alert">
			  <strong>Data Berhasil Ditambah
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		 <?php 

		 session_unset();
	}

	 ?>

	 

	
	<form class="form" action="" method="post">
		<form-group>
			<label for="">Username</label>
			<input type="text" class="form-control" name="username">
		</form-group>
		<form-group>
			<label for="">Password</label>
			<input type="text" class="form-control" name="password">
		</form-group>
		<form-group>
			<label for="">Level</label>
			<input type="text" class="form-control" name="level">
		</form-group>
		<button class="btn btn-success" type="submit" name="submit">Kirim</button>
	</form>
</div>


<?php 
require_once 'footer.php';

 ?>