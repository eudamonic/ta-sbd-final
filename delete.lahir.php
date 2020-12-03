<?php
// include database connection file
include_once("config.php");

// Get id_penduduk from URL to delete that user
$id_penduduk = $_GET['id_penduduk'];

// Delete user row from table based on given id_penduduk
$result = mysqli_query($mysqli, "DELETE FROM penduduk WHERE id_penduduk=$id_penduduk");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:data_penduduk.php");
?>
