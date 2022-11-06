<?php 

    require_once "../function.php";

    echo $id;

    $sql = "SELECT * FROM tblkategori WHERE idkategori = $id";
    $result = mysqli_query($koneksi,$sql);

    $row = mysqli_fetch_assoc($result);


    echo $row['kategori'];


    // $kategori = 'Jelly Bean';
    // $id= 21;
    // $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori= ";

    // $result = mysqli_query($koneksi, $sql);

    // echo $sql;


?>

<form action="" method="post">
    kategori :
    <input type="text" name="kategori" value="<?php echo $row['kategori']?>">
    <br>
    <input type="submit" name="simpan" value="simpan">

</form>

<?php 

    if (isset($_GET['simpan'])) {

        $kategori = $_POST['kategori'];

        echo $kategori;

        $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori= ";

        $result = mysqli_query($koneksi, $sql);

        echo $sql;

        header("location:http://localhost/PHP-SMK/restoran/kategori/select.php");

    }


?>