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
        $occasion= $_POST['occasion'];

        $texte = "insert into vetements values
                ('".$type."', '".$color."', '".$meteo."','".$occasion."')";
        $connection = ocilogon("c##hmouden_a", "hmouden_a", "dbinfo");
        $ordre = ociparse($connection, $texte);
        ociexecute($ordre);
        ocilogoff($connection);
        echo $type." ".$color
                    ."<b> Meteo : </b>".$meteo
                    ."<b> Occasion : </b>".$occasion." bien ajouté !<br/>";
        ?>
        <a href="ajoutVetement.php" class="button">Ajouter un autre</a>
        <!--bouton menu principal-->
        <a href="index.php" class="button">Menu Principal</a>
      </div>
    </div>
  </body>
</html>