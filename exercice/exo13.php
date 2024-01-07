<!DOCTYPE html>
<html>
<head>
  <title>Calcul de TVA</title>
</head>
<body>

<form>
  <label for="prixHT">Prix HT :</label>
  <input type="text" id="prixHT" name="prixHT" value=""><br><br>

  <label for="tauxTVA">Taux de TVA :</label>
  <input type="text" id="tauxTVA" name="tauxTVA" value=""><br><br>

  <input type="button" value="Calculer" onclick="calculerTVA()">
</form>

<p>Montant de la TVA : <span id="montantTVA"></span></p>
<p>Prix TTC : <span id="prixTTC"></span></p>

<script>
  function calculerTVA() {
    var prixHT = parseFloat(document.getElementById("prixHT").value);
    var tauxTVA = parseFloat(document.getElementById("tauxTVA").value);

    var montantTVA = prixHT * (tauxTVA / 100);
    var prixTTC = prixHT + montantTVA;

    document.getElementById("montantTVA").innerText = montantTVA.toFixed(2);
    document.getElementById("prixTTC").innerText = prixTTC.toFixed(2);
  }
</script>

</body>
</html>
