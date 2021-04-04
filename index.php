<html>

  <head>
    <meta charset="utf-8">
    <title>EasyWear</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="style2.css">

    <?php

session_start();

if (empty($_SESSION['count'])) {
   $_SESSION['count'] = 1;
} else {
   $_SESSION['count']++;
}

$_SESSION['SID'] =1;
$name="Jean";

?>

  </head>

  <body>
    <div class="middle">
      <div class="phone">
        <h1 id="logo">EasyWear</h1>
        <h3> <i>Toujours plus classe, toujours plus beau !<br>
        <hw>Même quand il fait pas beau !</hw></i></h3>

        <a href="dress.php" class="button">M'habiller</a>

        <a href="garderobe.php" class="button">Ma Garde Robe</a>

        <a href="ajoutVetement.php" class="button">Ajouter un Vetement</a>

      </div>
    </div>
  </body>
</html>