<?php
    require("db.php");
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="dist/components/form.css">
  <link rel="stylesheet" type="text/css" href="dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="dist/components/message.css">
  <link rel="stylesheet" type="text/css" href="dist/components/icon.css">

  <script src="components/form.js"></script>
  <script src="components/transition.js"></script>
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
   <body class="login">
   <div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <div class="content">
        <?php echo CLAN_NAME; ?> LOGIN
      </div>
    </h2>
    <form class="ui large form" action="login.php">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left input">
            <i class=""></i>
            <input type="text" name="email" placeholder="Email">
          </div>
        </div>
        <div class="field">
          <div class="ui left input">
            <i class=""></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <input name="submit" class="ui fluid large green submit button" type="submit" value="Login"/>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      <a href="#">Register</a>
    </div>
  </div>
</div>
   </body>
</html>

