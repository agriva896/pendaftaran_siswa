<?php 

include 'koneksi/koneksi.php';
if (isset($_POST['login'])) {
	
	$username =$_POST['username'];
	$pass =$_POST['pass'];

	$login = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password ='$pass'");

	$cek = mysqli_num_rows($login);

	if ($cek > 0) {
		
		session_start();
		$_SESSION['username']=$username;
		$_SESSION['sistem']="login";
		header("location:index.php");
	}else{
		header("location:gagal.php");
	}
}
 ?>