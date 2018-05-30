<?php require "../db.php" ?>
<?php session_start(); ?>

<?php
//declare the variables
$username = $email = $password = $password2 = "";

//grab the info from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = mysqli_real_escape_string ( $con,  $_POST['username']);
  $email = mysqli_real_escape_string ( $con,  $_POST['email']);
  $password = mysqli_real_escape_string ( $con,  $_POST['password']);
  $password2 = mysqli_real_escape_string ( $con,  $_POST['password2']);

  //check if passwords match
  if ($password == $password2) {
    //hash it
    $hash = password_hash($password, PASSWORD_DEFAULT);

    //create the sql querry
    $sql = "INSERT INTO users (username, email, password)
    VALUES ('$username', '$email', '$hash')";

    //insert it into the database
    if ($con->query($sql) === TRUE) {
      //if it worked, send them back to register.php with the GET code rg (registered)
      header("Location: register.php?rg");
      die();
      } else {
          echo "Error: " . $sql . "<br>" . $con->error;
      }
    } else {
      //if it dosent work, sent them back with error code that they dont match
      header("Location: register.php?passwordDontMatch");
    }
  }

?>
