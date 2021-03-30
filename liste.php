<html>
  <head>
    <meta charset="utf-8">
    <title>Mes habits</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
       $texte =
           "select * from vetements where occasion=".$_POST['occasion_choix'].value;
       $connection = ocilogon("c##hmouden_a", "hmouden_a", "dbinfo");
       $ordre = ociparse($connection, $texte);
       ociexecute($ordre);
       while (ocifetchinto($ordre, $ligne)) 
           echo $ligne[0]." ".$ligne[1]."<b> Meteo :</b>".$ligne[2]." <b>Occasion : </b>".$ligne[3]."<br/>";


      /*$texte2 =
           "delete from vetements where id=".$id;
      $ordre = ociparse($connection, $texte);
      ociexecute($ordre);*/
      
       ocilogoff($connection);
       ?>

       <form method="GET" action="liste.php?suppr_id="$id>
       <select name="liste_id" id="liste_id">
    <option value="">--Choisir le vetement à supprimer : (numéro)--</option>
    
    <?php
    /*
    while (ocifetchinto($ordre2, $ligne2)){
           echo $ligne2[0].", ".$ligne2[1].", ".$ligne2[2]."<br/>";
    }
    */
   echo "<option value='curr_id'>echo '$ligne[0]'</option>"
    ?>
    
 
</select>
        <input type="submit" value="suppr_vetement"/>

       </form>

    <form method="POST" action="easywear.php">
      <input type="submit" value="Retour vers la page principale"/>
      

    </form>

    <form method="POST" action="ajoutVetement.php">
      <input type="submit" value="Ajouter un autre vetement"/>
      

    </form>
  </body>
</html>
