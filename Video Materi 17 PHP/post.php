<form action="nav.php" method="post">
    email :
    <input type="email" name="email">
    password
    <input type="passwprd" name=password>
    <input type="submit" name="kirim" value="login">
</form>

<?php 

    if (isset($_POST['kirim'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $email;
    echo '<br>';
    echo $password;
        
    }

?>