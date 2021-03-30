<html>

  <head>
    <meta charset="utf-8">
    <title>EasyWear</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="style.css">

    <?php

session_start();

if (empty($_SESSION['count'])) {
   $_SESSION['count'] = 1;
} else {
   $_SESSION['count']++;
}

$_SESSION['SID'] =1;
$name="Jean";
$_SESSION['Sname'] = $Sname;
?>

  </head>

  <body>
    <div class="middle">
      <div class="phone">
        <h1 id="logo"><span id="easy">Easy</span><span id="wear">Wear</span></h1>
        <h3> <i>Toujours plus classe, toujours plus beau ! Même quand il fait pas beau !</i></h3>

        <form method="POST" action="dress.php">
          <input type="submit" value="M'habiller"/>
        </form>

        <form method="POST" action="garderobe.php">
          <input type="submit" value="Ma garde-robe"/>
        </form>

        <form method="POST" action="ajoutVetement.php">
          <input type="submit" value="Ajouter un vetement"/>
        </form>
        
      </div>
    </div>
  </body>
</html>
