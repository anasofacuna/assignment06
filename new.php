<?php
include('connect-db.php');

$name = mysqli_real_escape_string($connection, htmlspecialchars($_POST['name']));
$email = mysqli_real_escape_string($connection, htmlspecialchars($_POST['email']));
$comments = mysqli_real_escape_string($connection, htmlspecialchars($_POST['comment']));

mysqli_query($connection, "INSERT INTO rome (name, email, comments) VALUES ('$name', '$email', '$comments')");

mysqli_close($connection);

header("Location: signup.html");
?>