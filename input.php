<html>
<head>
    <title>Input Produk</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="jumbotron">
   
        
     <div class="container" align="center" >
        <h1 class="lead" lign="center">
             <a class="btn btn-primary btn-lg" href="index.php" role="button">home</a>
        </h1>
     </div>          
    
    <form action="input.php" method="post" name="form1">
        <table width="25%" border="0" align="center">
            <tr> 
                <td>id produk</td>
                <td><input type="text" name="id_produk"></td>
            </tr>
            <tr> 
                <td>nama produk</td>
                <td><input type="text" name="nama_produk"></td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td><input type="text" name="keterangan"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td>jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <br>
            <tr> 
                <td></td>
                <td><button type="submit" name="Submit" value="SUBMIT" class="btn btn-outline-primary">tambah</button></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $id_produk = $_POST['id_produk'];
        $nama_produk = $_POST['nama_produk'];
        $keterangan = $_POST['keterangan'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        include("koneksi.php");
        $result = mysqli_query($mysqli, "INSERT INTO produk(id_produk,nama_produk,keterangan,harga,jumlah) VALUES('$id_produk','$nama_produk','$keterangan','$harga','$jumlah')");

        echo "Produk berhasil ditambahkan. <a href='index.php'>Lihat Daftar</a>";
    }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>