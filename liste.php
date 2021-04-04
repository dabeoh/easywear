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
          $liste_meteo=array("Ensoleille","Neige","Pluie","Orage");
          
          shuffle($liste_meteo);
          $meteo=$liste_meteo[rand(0,3)];
          $occasion=$_POST['occasion_choix'];
        
          $texte = "select * from vetements
                    where occasion='".$occasion."'and meteo='".$meteo."'";
          
          $ordre = ociparse($connection, $texte);
          ociexecute($ordre);
          echo "Contexte du jour choisi :".$occasion."<br>
                Aujourd'hui la Meteo est :".$meteo."<br>
                Vêtements suggérés :<br>
                <table>
                  <tr>
                    <th>Type</th>
                    <th>Couleur</th>
                </tr>";
        
            while (ocifetchinto($ordre, $ligne)) 
                echo "<tr>
                        <td>".$ligne[0]."</td>
                        <td>".$ligne[1]."</td>
                      </tr>";
          echo "</table>";
            
          ocilogoff($connection);
        ?>
        </br>
        
        <form method="POST" action="ajoutVetement.php">
          <input class="button" type="submit" value="Ajouter un autre vetement"/>
        </form>

         <!--bouton menu principal-->
        <a href="index.php" class="button">Menu Principal</a>
        
      </div>
    </div>
  </body>
</html>
