<html>
  <head>
    <meta charset="utf-8">
    <title>S'habiller</title>
    <link rel="stylesheet" href="style2.css">
  </head>
  
  <body>
    <div class="middle">
      <div class="phone">
        <form action="liste.php" method="POST">
          <h2>Aide-moi à choisir un vêtement !</h2>
          <h4> Je sélectionne mon occasion : </h4>

          <select class = "button" name="occasion_choix" size="1" required>
            <option value="quotidien">Quotidien</option>
            <option value="festif">Festif</option>
            <option value="travail">Travail</option>
          </select>
          <br>
          <input class = "button" type="submit" name="affiche_vetements" value="M'habiller !">
        </form>

        <!--bouton menu principal-->
        <a href="index.php" class="button">Menu Principal</a>
      </div>
    </div>
  </body>
</html>