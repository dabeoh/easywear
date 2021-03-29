<html>
<form action="ajoute.php" method="POST">
<h2>Rajouter un vetement:</h2>
<p>Couleur:</p> <input type="text" name="color" required>

<p>Type:</p>
<select name="type" size="1" required>
<option value="veste">Veste</option>
<option value="shirt">Shirt</option>
<option value="polo">Polo</option>
<option value="pantalon">Pantalon</option>
<option value="shorts">Shorts</option>
<option value="chaussettes">Chaussettes</option>
<option value="pantoufles">Pantoufles</option>
<option value="baskets">Baskets</option>
<option value="casquette">casquette</option>
<option value="sweat">Sweat</option>
<option value="chemise">Chemise</option>
<option value="manteau">Manteau</option>
<option value="jeans">Jeans</option>
<option value="débardeur">Débardeur</option>
<option value="pull">Pull</option>
<option value="anorak">Anorak</option>
<option value="tunique">Tunique</option>
<option value="robe">Robe</option>
</select>

<p>Meteo</p>
<select name="meteo" size="1" required>
<option value="Pluie">Pluie</option>
<option value="Neige">Neige</option>
<option value="Ensoleille">Ensoleille</option>
<option value="Orage">Orage</option>
</select>
<br />

<p>Occasion:</p>
<select name="occasion" size="1" required>
<option value="quotidien">Quotidien</option>
<option value="festif">Festif</option>
<option value="travail">Travail</option>

</select>


<p>Rajouter un autre vetement:</p>
Yes:<input type="radio" value="Yes" name="rajoute"><br />
No:<input type="radio" value="No" name="rajoute"><br />

<br>

<input type="submit" name="sent" value="Send"><input type="reset" value="Clear">
</form>
</html>
