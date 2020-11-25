<?php
// include database connection file
include("koneksi.php");

// Get id from URL to delete that user
$id_produk = $_GET['id_produk'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM produk WHERE id_produk=$id_produk");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>