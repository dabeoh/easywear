<html>
  <body>
    <?php
       $texte =
           "select * from vetements";
       $connection = ocilogon("c##hmouden_a", "hmouden_a", "dbinfo");
       $ordre = ociparse($connection, $texte);
       ociexecute($ordre);
       while (ocifetchinto($ordre, $ligne)) 
           echo $ligne[0].", ".$ligne[1].", ".$ligne[2]."<br/>";
       ocilogoff($connection);
       ?>
  </body>
</html>
