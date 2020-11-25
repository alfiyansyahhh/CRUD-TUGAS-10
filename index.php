<?php
// Create database connection using config file
include("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM produk ");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>produk</title>
  </head>
  <body class="jumbotron">

  
      
                    <h1 class="display-4">data produk!</h1> <br><br>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="input.php" role="button">tambah produk</a>
                    </p>
            
            
                <table width='80%' border=1 callpadding="10" callspacing="0" >

                <tr align="center">
                    <th>id produk</th><th>nama produk</th> <th>keterangan</th> <th>harga</th> <th>jumlah</th> <th> aksi</th> 
                </tr>
                 
                <?php  
                    while($user_data = mysqli_fetch_array($result)) {         
                        echo "<tr>";
                        echo "<td>".$user_data['id_produk']."</td>";
                        echo "<td>".$user_data['nama_produk']."</td>";
                        echo "<td>".$user_data['keterangan']."</td>"; 
                        echo "<td>".$user_data['harga']."</td>"; 
                        echo "<td>".$user_data['jumlah']."</td>";    
                        echo "<td><a href='edit.php?id_produk=$user_data[id_produk]'>Edit</a> | <a href='delete.php?id_produk=$user_data[id_produk]'>Delete</a></td></tr>";        
                    }
                ?>
                </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
        