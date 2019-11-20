<?php
include('connect-db.php');
$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));
mysqli_query($connection, "INSERT INTO aacuna_newsletter (email) VALUES ('$email')");
mysqli_close($connection);
?>