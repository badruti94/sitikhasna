<?php 
require_once '../../DB.php';
hapusDataPengajuan($_GET['id']);

header("Location: index.php");


 ?>