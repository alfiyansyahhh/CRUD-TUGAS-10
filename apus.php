<?php 
    include("koneksi.php");
    //delete
    if(isset($_GET['id'])){
      mysqli_query($koneksi,"delete from produk where id='$_GET[id]'");
     
      header("Location:index.php");

    }
    
    ?>