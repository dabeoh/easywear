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
        if (session_status() === PHP_SESSION_NONE){
          header('Location: index.php');
        } else {
          $texte = "select * from vetements";
          $connection = ocilogon("c##hmouden_a", "hmouden_a", "dbinfo");
          $ordre = ociparse($connection, $texte);
          ociexecute($ordre);

        echo  "<table>
                  <tr>
                    <th>Type</th>
                    <th>Couleur</th>
                    <th>Meteo</th>
                    <th>Occasion</th>
                </tr>";
        
            while (ocifetchinto($ordre, $ligne))
                echo "<tr>
                        <td>".$ligne[0]."</td>
                        <td>".$ligne[1]."</td>
                        <td>".$ligne[2]."</td>
                        <td>".$ligne[3]."</td>
                      </tr>";
          echo "</table>";
            
          ocilogoff($connection);
        ?>

        <a href="ajoutVetement.php" class="button">Ajouter un autre Vêtement</a>

        <!--bouton menu principal-->
        <a href="index.php" class="button">Menu Principal</a>
        
      </div>
    </div>
  </body>
</html>