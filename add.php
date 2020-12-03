<html>
<head>
    <title>tambahkan penduduk baru</title>
</head>

<body>
    <a href="data_penduduk.php">Go to Home</a>
    <br/><br/>

    <h2>data penduduk</h2>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="1">
            <tr> 
                <td>id_penduduk</td>
                <td><input type="int" name="id_penduduk" placeholder="Masukkan id_penduduk"></td>
            </tr>
            <tr> 
                <td>nama_penduduk</td>
                <td><input type="varchar" name="nama_penduduk"></td>
            </tr>
            <tr> 
                <td>id_lahir</td>
                <td><input type="int" name="id_lahir"></td>
            </tr>
            <tr> 
                <td>id_mati</td>
                <td><input type="int" name="id_mati"></td>
            </tr>
            <tr> 
                <td>id_petugas</td>
                <td><input type="int" name="id_petugas"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_penduduk = $_POST['id_penduduk'];
        $nama_penduduk = $_POST['nama_penduduk'];
        $id_lahir = $_POST['id_lahir'];
        $id_mati = $_POST['id_mati'];
        $id_petugas = $_POST['id_petugas'];
        // include database connection file
        include_once("config.php");

        // Insert penduduk data into table
        $result = mysqli_query($mysqli, "INSERT INTO penduduk(id_penduduk,nama_penduduk,id_lahir,id_mati,id_petugas) VALUES('$id_penduduk','$nama_penduduk','$id_lahir','$id_mati','$id_petugas')");

        // Show message when penduduk added
        echo "penduduk added successfully. <a href='data_penduduk.php'>Lihat Penduduk</a>";
    }
    ?>
</body>
</html>
