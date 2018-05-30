<?php require "../db.php";

  //declare variables
  $username = $password = "";

  //grab the info from the form
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string ( $con, $_POST['username']);
    $password = mysqli_real_escape_string ( $con, $_POST['password']);

    //grab the hash from the database
    $hash = $con->query("SELECT password FROM users WHERE username = '$username'")->fetch_object()->password;
    $auth = $con->query("SELECT auth FROM users WHERE username = '$username'")->fetch_object()->auth;
    $department = $con->query("SELECT department FROM users WHERE username = '$username'")->fetch_object()->department;
    $accepted = $con->query("SELECT accepted FROM users WHERE username = '$username'")->fetch_object()->accepted;
    $callsign = $con->query("SELECT callsign FROM users WHERE username = '$username'")->fetch_object()->callsign;

    //Verify that they are accepted
    if ($accepted == "1") {
      //if they are accepted do this:
      //verify the password
      if (password_verify($password, $hash)) {
        //if true, log them in and send them to the select deparatment page.
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['auth'] = $auth;
        $_SESSION['department'] = $department;
        $_SESSION['department'] = $callsign;
        header("Location: ../seldep.php");
        die();
      }
      else {
        //if false, send them back to index with error code
        header("Location: ../index.php?err");
        die();
      }
    } else {
      //if they arent accepted yet send them back with an error messege
      header("Location: ../index.php?na");
    }
  }
?>
