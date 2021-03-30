<html>
  <head>
    <meta charset="utf-8">
    <title>Ajout d'un habit</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="middle">
      <div class="phone">
        <?php
        $type = $_POST['type'];
        $color = $_POST['color'];

        $meteo = $_POST['meteo'];
        $rajoute = $_POST['rajoute'];
        $occasion= $_POST['occasion'];

        $texte = "insert into vetements values
                ('".$type."', '".$color."', '".$meteo."','".$occasion."')";
        $connection = ocilogon("c##hmouden_a", "hmouden_a", "dbinfo");
        $ordre = ociparse($connection, $texte);
        ociexecute($ordre);
        ocilogoff($connection);
        echo "merci pour l'ajout! (debug, ordre est: ".$texte.")";
        ?>
        <!--bouton menu principal-->
        <a href="easywear.php" class="button">Menu Principal</a>
      </div>
    </div>
  </body>
</html>