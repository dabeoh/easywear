<html>
  <head>
    <meta charset="utf-8">
    <title>Mes habits</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="middle">
      <div class="phone">
        <?php

        $connection = ocilogon("c##hmouden_a", "hmouden_a", "dbinfo");
        $rand=rand(0,3);
        //echo '$rand';
        $liste_meteo=array("ensoleille","neige","pluie","orage");
        
        shuffle($liste_meteo);
        $meteo=$liste_meteo[rand(0,3)];
      
          $texte = "select * from vetements
                    where occasion='".$_POST['occasion_choix']."'and meteo='".$meteo."'";
          
          $ordre = ociparse($connection, $texte);
          ociexecute($ordre);
          while (ocifetchinto($ordre, $ligne)) 
              echo $ligne[0]." ".$ligne[1]
                    ."<b> Meteo : </b>".$ligne[2]
                    ."<b> Occasion : </b>".$ligne[3]."<br/>";
          
          ocilogoff($connection);
        ?>
        </br>
        
        <form method="POST" action="ajoutVetement.php">
          <input type="submit" value="Ajouter un autre vetement"/>
        </form>

         <!--bouton menu principal-->
        <a href="index.php" class="button">Menu Principal</a>
        
      </div>
    </div>
  </body>
</html>
