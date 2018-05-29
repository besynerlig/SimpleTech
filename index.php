<?php
    require("db.php");
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Import jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import Materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

   <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>

  </head>
<body>
<div class="section"></div>
   <main>
    <center>
    
        <div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 100px; solid #EEE;">
        <div class="section"></div>
<div class="section"></div>
            <div class='row'>
            <h1 class="grey-text" style="font-size: 20px;"> LOGIN </h1>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='username' id='email' required />
                <label for='email'>Username</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col m12'>
                <input class='validate' type='password' name='password' id='password' required />
                <label for='password'>Password</label>
              </div>
              <label style='float: right;'>
              <b style="color: #F5F5F5;">Forgot Password?</b>
              </label>
            </div>
            <br/>
            <center>
              <div class='row'>
                <button style="margin-left:65px;"  type='submit' name='btn_login' class='col  s6 btn btn-small white black-text  waves-effect z-depth-1 y-depth-1'>Login</button>
              </div>
            </center>
     
        </div>
      
      </center>
      </main>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
   </body>
</html>

