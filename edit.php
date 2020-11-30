<?php 
//nampilin data yang mau di edit
include("koneksi.php");
$data=mysqli_query($koneksi,"select * from produk where id='$_GET[id]'");
$tmpl=mysqli_fetch_array($data);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>data barang</title>
  </head>
  <body class="container">
    <div class="jumbotron">
        <p><a class="btn btn-primary btn-lg" href="index.php" role="button">home</a> </p>
       
        <form action="" method="post">
            
            <input type="hidden"  name="id" value="<?= $tmpl['id']; ?>">

            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" class="form-control"  name="nama_produk" value="<?= $tmpl['nama_produk']; ?>">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" class="form-control"  name="keterangan" value="<?= $tmpl['keterangan']; ?>">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control"  name="harga" value="<?= $tmpl['harga']; ?>">
            </div>
            <div class="form-group">
                <label>Jumlah</label>
                <input type="text" class="form-control" name="jumlah" value=<?= $tmpl['jumlah']; ?>>
            </div>
            <input type="submit" class="btn btn-primary" value="ubah" name="proses">
        </form>
    </div>
    <?php 
    //kirim data yang udah di edit
    include("koneksi.php");
    if(isset($_POST['proses']) ) {
        $id = $_POST["id"];
        $nama_produk = $_POST["nama_produk"];
        $keterangan = $_POST["keterangan"];
        $harga = $_POST["harga"];
        $jumlah = $_POST["jumlah"];

        $query = "update produk set 
                    nama_produk ='$nama_produk',
                    keterangan ='$keterangan',
                    harga ='$harga',
                    jumlah ='$jumlah' 
                  where id='$_GET[id]'";
        mysqli_query($koneksi, $query);
               
        header("Location:index.php");
    }
    ?>  
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>