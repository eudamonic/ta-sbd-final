<?php
// include database connection file
include_once("config.php");

session_start();

if ( !isset($_SESSION['status']) ) {
    header("Location: index.php?pesan=belum_login");
}

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_penduduk = $_POST['id_penduduk'];

    $nama_penduduk=$_POST['nama_penduduk'];
    $id_lahir=$_POST['id_lahir'];
    $id_mati=$_POST['id_mati'];
    $id_petugas=$_POST['id_petugas'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE penduduk SET nama_penduduk='$nama_penduduk',
id_lahir='$id_lahir',id_mati='$id_mati',id_petugas='$id_petugas'
 WHERE id_penduduk=$id_penduduk");

    // Redirect to homepage to display updated user in list
    header("Location: data_penduduk.php");
}
?>
<?php
// Display selected user data based on id_penduduk
// Getting id_penduduk from url
$id_penduduk = $_GET['id_penduduk'];

// Fetech user data based on id_penduduk
$result = mysqli_query($mysqli, "SELECT * FROM penduduk WHERE id_penduduk=$id_penduduk");

while($user_data = mysqli_fetch_array($result))
{
    $id_penduduk = $user_data['id_penduduk'];
    $nama_penduduk = $user_data['nama_penduduk'];
    $id_lahir = $user_data['id_lahir'];
    $id_mati = $user_data['id_mati'];
    $id_petugas = $user_data['id_petugas'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="data_penduduk.php">Home</a>
    <br/><br/>

    <h2>data penduduk</h2>

    <form name="update_user" method="post" action="edit.php">
        <table border="1">
            <tr> 
                <td>nama_penduduk</td>
                <td><input type="varchar" name="nama_penduduk" value=<?php echo $nama_penduduk;?>></td>
            </tr>
            <tr> 
                <td>id_lahir</td>
                <td><input type="int" name="id_lahir" value=<?php echo $id_lahir;?>></td>
            </tr>
            <tr> 
                <td>id_mati</td>
                <td><input type="int" name="id_mati" value=<?php echo $id_mati;?>></td>
            </tr>
            <tr> 
                <td>id_petugas</td>
                <td><input type="int" name="id_petugas" value=<?php echo $id_petugas;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_penduduk" value=<?php echo $_GET['id_penduduk'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
