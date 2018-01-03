<?php
  include ("member.php");

  $nim = $_GET['nim'];
  $member = new member($nim);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test PHP</title>
    <style type="text/css">
      body
      {
        background-color: #<?= $member->getwarna() ?>;
      }
    </style>
  </head>
  <body>
    <h1>hallo, <?= $member->getnama() ?></h1>
  </body>
</html>
