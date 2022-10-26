<?php 

    require_once "../function.php";

    $id=3;

    $sql = "DELETE from tblkategori WHERE idkategori = 1";

    $result = mysqli_query($koneksi,$sql);

    echo $sql;


?>