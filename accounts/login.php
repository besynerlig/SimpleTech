<?php require "../db.php";

  //declare variables
  $username = $password = "";

  //grab the info from the form
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string ( $con, $_POST['username']);
    $password = mysqli_real_escape_string ( $con, $_POST['password']);

    //grab the hash from the database
    $hash = $con->query("SELECT password FROM users WHERE username = '$username'")->fetch_object()->password;

    //verify the password
    if (password_verify($password, $hash)) {
      //if true, log them in, send them to select deparatment.
      session_start();
      $_SESSION['username'] = $username;
      header("Location: ../seldep.php");
      die();
    }
    else {
      //if false, send them back to index with error code
      header("Location: ../index.php?err");
      die();
    }
  }
?>
