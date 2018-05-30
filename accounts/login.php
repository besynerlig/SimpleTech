<?php require "../db.php";

  $username = $password = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string ( $con,  $_POST['username']);
    $password = $_POST['password'];

    // $hash = $con->query("SELECT password FROM users WHERE username = '$username'")->fetch_object()->password;
    //
    // print_r($password);?><br><?php
    //
    // $hash2 = password_hash($password, PASSWORD_DEFAULT);
    // echo $hash2;?><br><?php
    //
    // $hash3 = password_hash($password, PASSWORD_DEFAULT);
    // echo $hash3;?><br><?php
    //
    // print_r($hash);?><br><?php
    //
    // var_dump(password_verify($password, $hash));

    if (password_verify($password, $hash)) {
      session_start();
      $_SESSION['username'] = $username;
      header("Location: ../seldep.php");
      die();
    }
    else {
      header("Location: ../index.php?1");
      die();
    }
  }
?>
