<?php
    require("db.php");
    session_start();
    require("head.php");
?>

<?php if (isset($_GET['na'])): ?>
  <script>window.alert("You have not been accepted yet, contact an administrator for further help.");</script>
<?php endif ?>

<?php if (isset($_GET['err'])): ?>
  <script>window.alert("There was an error logging in, check your login credentials for spelling errors.");</script>
<?php endif ?>

<div class="section"></div>
   <main>
    <center>
      <form action="accounts/login.php" method="post">
        <div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 100px; solid #EEE;">
        <div class="section"></div>
        <div class="section"></div>

              <h1 class="grey-text" style="font-size: 20px;"> <?php echo CLAN_NAME; ?> </h1>

            <div class='row'>
            <h1 class="grey-text" style="font-size: 20px;"> LOGIN </h1>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='username' required />
                <label for='email'>Username</label>
              </div>
            </div>
            <div class='row'>
              <div class='input-field col m12'>
                <input class='validate' type='password' name='password' required />
                <label for='password'>Password</label>
              </div>
              <label style='float: right;'>
              <b style="color: #F5F5F5;">Forgot Password?</b>
              </label>
            </div>
            <br/>
            <center>
              <div class='row'>
                <button style="margin-left:75px;"  type='submit' name='btn_login' class='col  s6 btn btn-small green black-text  waves-effect z-depth-1 y-depth-1'>Login</button>
              </div>
              <div class='row'>
                <a href="accounts/register.php" style="margin-left:75px;" class='col  s6 btn btn-small blue black-text  waves-effect z-depth-1 y-depth-1'>Request access</a>
              </div>
            </center>

        </div>
      </form>

      </center>
      </main>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
   </body>
</html>
