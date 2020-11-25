<?php
include("koneksi.php");

if(isset($_POST['update']))
{   
    $id_produk = $_POST['id_produk'];

    $nama_produk=$_POST['nama_produk'];
    $keterangan=$_POST['keterangan'];
    $harga=$_POST['harga'];
    $jumlah=$_POST['jumlah'];

    $result = mysqli_query($mysqli, "UPDATE produk SET id_produk='$id_produk',nama_produk='$nama_produk',keterangan='$keterangan',harga='$harga',jumlah='$jumlah' WHERE id_produk=$id_produk");

    header("Location: index.php");
}
?>
<?php

$id_produk = $_GET['id_produk'];

$result = mysqli_query($mysqli, "SELECT * FROM produk ");

while($user_data = mysqli_fetch_array($result))
{
    $id_produk = $user_data['id_produk'];
    $nama_produk = $user_data['nama_produk'];
    $keterangan = $user_data['keterangan'];
    $harga = $user_data['harga'];
    $jumlah = $user_data['jumlah'];
}
?>
<html>
<head>  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit data produk</title>
</head>

<body class="jumbotron" >
    <div class="container" align="center" >
        <h1 class="lead" lign="center">
             <a class="btn btn-primary btn-lg" href="index.php" role="button">home</a>
        </h1>
     </div>  

    <form name="update_user" method="post" action="edit.php" >
        <table border="0"  align="center" >
            <tr> 
                <td>id produk</td>
                <td><input type="text" name="id_produk" value=<?php echo $id_produk;?>></td>
            </tr>
            <tr> 
                <td>nama produk</td>
                <td><input type="text" name="nama_produk" value=<?php echo $nama_produk;?>></td>
            </tr>
            <tr> 
                <td>keterangan</td>
                <td><input type="text" name="keterangan" value=<?php echo $keterangan;?>></td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr> 
                <td>jumlah</td>
                <td><input type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_produk" value=<?php echo $_GET['id_produk'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>