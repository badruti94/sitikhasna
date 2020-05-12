<?php

session_start();

//koneksi
$conn = mysqli_connect('localhost','root','','sitikhasna');

//login
function login($data){
	global $conn;

	$username = $data['username'];
	$password = $data['password'];

	$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $query);
	$result = mysqli_fetch_assoc($result);


	if($result == null){
		$_SESSION['pesan'] = 'Password Salah';

		header("Location: index.php");
		exit;
	}

	if($result['level'] == 'admin'){
		header("Location: admin/index.php");
		exit;
	}else{
		$_SESSION['id_user'] = $result['id_user'];
		$_SESSION['pesan'] = false;
		header("Location: dosen/index.php");
		exit;
	}
}


//Admin
//-user
function ambilDataUser(){
	global $conn;

	$query = "SELECT * FROM user";
	$result = mysqli_query($conn, $query);

	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}

	return $rows;

}

function tambahDataUser($data){
	global $conn;

	$username = $data['username'];
	$password = $data['password'];
	$level = $data['level'];

	$query = "INSERT INTO user(username, password, level) VALUES('$username','$password','$level')";
	$result = mysqli_query($conn, $query);

	pesan();
}

function ambilDataUserById($id){
	global $conn;

	$query = "SELECT * FROM user WHERE id_user='$id'";
	$result = mysqli_query($conn, $query);
	$result = mysqli_fetch_assoc($result);

	return $result;
}

function updateDataUser($data){
	global $conn;

	$id = $data['id'];
	$username = $data['username'];
	$password = $data['password'];
	$level = $data['level'];

	$query = "UPDATE user SET username = '$username', password = '$password', level = '$level' WHERE id_user='$id'";
	$result = mysqli_query($conn, $query);


}

function hapusDataUser($id){
	global $conn;

	$query = "DELETE FROM user WHERE id_user='$id'";
	$result = mysqli_query($conn, $query);

	pesan();
}


//-Pengajuan Email
function ambilDataPengajuan(){
	global $conn;

	$query = "SELECT * FROM pengajuan WHERE status = 'Belum Disetujui'";
	$result = mysqli_query($conn, $query);

	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}

	return $rows;

}

function hapusDataPengajuan($id){
	global $conn;

	$query = "DELETE FROM pengajuan WHERE id_pengajuan='$id'";
	$result = mysqli_query($conn, $query);

	pesan();
}


function setujui($id){
	global $conn;


	$query = "UPDATE pengajuan SET status = 'Sudah Disetujui' WHERE id_pengajuan='$id'";
	$result = mysqli_query($conn, $query);
}

function ambilDataPengajuanSelesai(){
	global $conn;

	$query = "SELECT * FROM pengajuan WHERE status = 'Sudah Disetujui'";
	$result = mysqli_query($conn, $query);

	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}

	return $rows;

}


//Dosen
function ajukan($data){
	global $conn;

	$id_user 	= $_SESSION['id_user'];
	$nama 		= $data['nama'];
	$alamat 	= $data['alamat'];
	$no_hp 		= $data['no_hp'];
	$email 		= $data['email'];
	$jabatan 	= $data['jabatan'];
	$keperluan 	= $data['keperluan'];
	$status 	= 'Belum Disetujui';

	$query = "INSERT INTO 
	pengajuan(id_user, nama, alamat, no_hp, email, jabatan, keperluan, status) 
	VALUES('$id_user', '$nama', '$alamat', '$no_hp', '$email', '$jabatan', '$keperluan', '$status')";
	$result = mysqli_query($conn, $query);

	pesan();
	
}

function ambilDataPengajuanDosen(){
	global $conn;

	$id_user = $_SESSION['id_user'];
	$query = "SELECT * FROM pengajuan WHERE id_user = '$id_user'";
	$result = mysqli_query($conn, $query);

	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}

	return $rows;

}


function pesan(){
	$_SESSION['pesan'] = true;
}

 ?>