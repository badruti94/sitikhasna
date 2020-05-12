<?php 
require_once '../../DB.php';
hapusDataUser($_GET['id']);

header("Location: index.php");


 ?>