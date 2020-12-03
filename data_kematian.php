<?php
// Create database connection using config file
include_once("config.php");

session_start();

if ( !isset($_SESSION['status']) ) {
    header("Location: index.php?pesan=belum_login");
}

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM kematian ORDER BY id_mati ASC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.mati.php">tambahkan kematian baru</a><br/><br/>
<a href="data_penduduk.php">daftar penduduk</a><br/><br/>
<a href="data_kelahiran.php">daftar kelahiran</a><br/><br/>
<a href="data_kematian.php">tdaftar kematian</a><br/><br/>
    <right> <a href="logout.php">LOGOUT</a><br/><br/> </right>
<center> 
    <h2>Data kematian</h2>

    <table width='80%' border=1>

    <tr>
        <th>id_mati</th> <th>tempat_mati</th> <th>tanggal_mati</th> <th>id_petugas</th> 
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_mati']."</td>";
        echo "<td>".$user_data['tempat_mati']."</td>";
        echo "<td>".$user_data['tanggal_mati']."</td>";
        echo "<td>".$user_data['id_petugas']."</td>";
        echo "<td><a href='edit.mati.php?id_mati=$user_data[id_mati]'>Edit</a> | <a href='delete.mati.php?id_mati=$user_data[id_mati]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
