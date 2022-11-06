<?php 

    require_once "../function.php";

    $sql = "DELETE from tblkategori WHERE idkategori = 1";

    $result = mysqli_query($koneksi,$sql);

    header("location:http://localhost/PHP-SMK/restoran/kategori/select.php");


?>