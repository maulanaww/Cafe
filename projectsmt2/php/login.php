<?php
session_start();
include "../php/koneksi.php";
?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/login.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
$proses=mysqli_real_escape_string($koneksi, @$_GET['proses']);
if($proses=="login"){
	$username=mysqli_real_escape_string($koneksi, @$_POST['username']);
	$password=mysqli_real_escape_string($koneksi, @$_POST['password']);
	$cekakun=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' AND password='$password'"));
	if($cekakun!=0){
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		header("Location: ../html/layout.html");
		echo '<script>alert"Sukses!! Login Berhasil"</script>';
	}else{
		echo '<script>alert"Maaf!! Username atau password yang anda masukkan salah, silahkan coba kembali"</script>';
	}
	
}
?>
<body id="bg-login">
	<div class="box-login">
		<h2>Login</h2>
		<form method="post" action="?proses=login">
			<input type="text" name="username" placeholder="Username" class="input-control">
			<input type="password" name="password" placeholder="Password" class="input-control">
			<input type="submit" name="submit" value="Login" class="btn">
		</form>
		<br>
		<h5><a href="../html/register.html">Belum punya akun?</a></h5>
	</div>

</body>
</html>