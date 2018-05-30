<?php require "../db.php" ?>
<?php session_start(); ?>

<?php
//declare the variables
$username = $email = $password = $password2 = $callsign = $department = $date = $hash = "";

//grab the info from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = mysqli_real_escape_string ( $con,  $_POST['username']);
  $email = mysqli_real_escape_string ( $con,  $_POST['email']);
  $password = mysqli_real_escape_string ( $con,  $_POST['password']);
  $password2 = mysqli_real_escape_string ( $con,  $_POST['password2']);
  $callsign = mysqli_real_escape_string ( $con,  $_POST['callsign']);
  $department = mysqli_real_escape_string ( $con,  $_POST['department']);

  //Check if username is taken
  $usernameTaken = $con->query("SELECT username FROM users WHERE username = '$username'")->fetch_object()->username;

    if(!empty($usernameTaken)) {
      header("Location: register.php?nt");
    } else {
      //check if passwords match
      if ($password == $password2) {

        //hash it
        $hash = password_hash($password, PASSWORD_DEFAULT);

        //set a variable with the date for account creation storring
        $date = date("Y-m-N H:i:s ");

        //create the sql querry
        $sql = "INSERT INTO users (username, email, password, callsign, auth, department, trn_date)
        VALUES ('$username', '$email', '$hash', '$callsign', '1', '$department', '$date')";

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

  }

?>
