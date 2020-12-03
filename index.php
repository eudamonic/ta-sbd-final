<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<center><h2>LOGIN</h2></center>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<center>LOGIN GAGAL ! nama_petugas ATAU PASSWORD SALAH !</center>";
		}else if($_GET['pesan'] == "logout"){
			echo "<center>ANDA TELAH BERHASIL LOGOUT</center>";
		}else if($_GET['pesan'] == "belum_login"){
			echo "<center>ANDA HARUS LOGIN SEBELUM MASUK KE HALAMAN YANG LAIN</center>";
		}
	}

	
	?>

	<form method="post" action="cek_login.php">
        <center><table>
			<tr>
				<td>nama_petugas</td>
				<tr></tr>
				<td><input type="varchar" name="nama_petugas" placeholder="Masukkan nama_petugas"></td>
            </tr>
            <tr></tr>
			<tr>
				<td>password</td>
				<tr></tr>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
            <tr></tr>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table></center>		
	</form>
</body>
</html>