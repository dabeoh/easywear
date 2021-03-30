<html>
  <head>
    <meta charset="utf-8">
    <title>Mes habits</title>
    <link rel="stylesheet" href="style.css">
    <?php

    session_start();


    ?>
  </head>

  <body>
    <div class="middle">
      <div class="phone">
        <?php
        if ($_SESSION['SID']){
          $texte = "select * from vetements
                    where id_user='".$_SESSION['SID']."'";
          $connection = ocilogon("c##hmouden_a", "hmouden_a", "dbinfo");
          $ordre = ociparse($connection, $texte);
          ociexecute($ordre);
          while (ocifetchinto($ordre, $ligne)) 
              echo $ligne[0]." ".$ligne[1]
                    ."<b> Meteo : </b>".$ligne[2]
                    ."<b> Occasion : </b>".$ligne[3]."<br/>";
          
          ocilogoff($connection);
        } else {
          header.location("easywear.php");
        }
        ?>

        <form method="POST" action="easywear.php">
          <input type="submit" value="Retour vers la page principale"/>
        </form>

        <form method="POST" action="ajoutVetement.php">
          <input type="submit" value="Ajouter un autre vetement"/>
        </form>

        <!--bouton menu principal-->
        <a href="easywear.php" class="button">Menu Principal</a>
        
      </div>
    </div>
  </body>
</html>
