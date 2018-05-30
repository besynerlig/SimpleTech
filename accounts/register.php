<?php
  require("../db.php");
  session_start();
?>

<?php if (isset($_GET['passwordDontMatch'])): ?>
  <script>window.alert("Password's did not match, try again!");</script>
<?php endif ?>
<?php if (isset($_GET['rg'])): ?>
  <script>window.alert("You've now been registered, go to the login page to login when you've been accepted!");</script>
<?php endif ?>
<?php if (isset($_GET['nt'])): ?>
  <script>window.alert("That name is taken, please choose another.");</script>
<?php endif ?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Import jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import Materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

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
     <form action="registerdone.php" method="post">
       <div class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 100px; solid #EEE;">
       <div class="section"></div>
       <div class="section"></div>
           <div class='row'>
           <h1 class="grey-text" style="font-size: 20px;"> REQUEST ACCESS </h1>
           <!-- Defining the username -->
             <div class='input-field col s12'>
               <input class='validate' type="text" name='username' id='username' required />
               <label for='username'>Username</label>
             </div>
             <!-- Defining the email -->
             <div class='input-field col s12'>
               <input class='validate' type="text" name='email' id='email' required />
               <label for='email'>Email</label>
             </div>
           </div>
           <div class='row'>
             <!-- Defining the password -->
             <div class='input-field col s12'>
               <input class='validate' type='password' name='password' id='password' required />
               <label for='password'>Password</label>
             </div>
             <!-- Confirming the passwords matching -->
             <div class='input-field col s12'>
               <input class='validate' type='password' name='password2' id='password' required />
               <label for='password2'>Confirm password</label>
             </div>
             </div>
             <div class="row">
               <div class="input-field col s12">
                  <select multiple>
                    <option value="" disabled selected>Choose your department</option>
                    <option value="1">Police</option>
                    <option value="2">Sheriff</option>
                    <option value="3">Highway</option>
                  </select>
                  <label>Select department</label>
                </div>
               <div class='input-field col s12'>
                 <input class='validate' type='text' name='callsign' id='callsign' />
                 <label for='callsign'>Callsing</label>
               </div>
            </div>

           <br/>
           <center>
             <div class='row'>
               <button style="margin-left:75px;"  type='submit' name='btn_login' class='col  s6 btn btn-small white black-text  waves-effect z-depth-1 y-depth-1'>Request access</button>
             </div>
             <div class='row'>
               <a href="../index.php" style="margin-left:75px;" class='col  s6 btn btn-small white black-text  waves-effect z-depth-1 y-depth-1'>Login page</a>
             </div>
           </center>

       </div>
     </form>

     </center>
     </main>

 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="../js/materialize.min.js">
 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
        </script>
  </body>
</html>
