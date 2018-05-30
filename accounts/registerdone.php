<?php require "../db.php" ?>
<?php session_start(); ?>

<?php

$username = $email = $password = $password2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = mysqli_real_escape_string ( $con,  $_POST['username']);
  $email = mysqli_real_escape_string ( $con,  $_POST['email']);
  $password = $_POST['password'];
  $password2 = $_POST['password2'];

  if ($password == $password2) {
    $hash = password_hash($password2, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password)
    VALUES ('$username', '$email', '$hash')";

    if ($con->query($sql) === TRUE) {
      header("Location: register.php?rg");
      die();
      } else {
          echo "Error: " . $sql . "<br>" . $con->error;
      }
    } else {
      header("Location: register.php?passwordDontMatch");
    }
  }

?>
