<?php 
require_once '../../DB.php';



$data = ambilDataUserById($_GET['id']);
if(isset($_POST['submit'])){
  updateDataUser($_POST);

  header("Location: index.php");
  exit;
}


require_once 'header.php';

 ?>


<div class="container-fluid">

		<?php 

	if(isset($_SESSION['pesan'])){

		 ?>

		 	<div class="alert alert-warning alert-dismissible fade show" role="alert">
			  <strong>Data Berhasil Diubah
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		 <?php 

		 session_unset();
	}

	 ?>

	<form class="form" action="" method="post">
		<input type="hidden" name="id" value="<?php echo $data['id_user'] ?>">
		<form-group>
			<label for="">Username</label>
			<input type="text" class="form-control" name="username" value="<?php echo $data['username'] ?>">
		</form-group>
		<form-group>
			<label for="">Password</label>
			<input type="text" class="form-control" name="password" value="<?php echo $data['password'] ?>">
		</form-group>
		<form-group>
			<label for="">Level</label>
			<input type="text" class="form-control" name="level" value="<?php echo $data['level'] ?>">
		</form-group>
		<button class="btn btn-success" type="submit" name="submit">Kirim</button>
	</form>
</div>


<?php 
require_once 'footer.php';

 ?>