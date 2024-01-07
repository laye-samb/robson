<!DOCTYPE html>
<html>
<head>
  <title>Agence Immobilière</title>
</head>
<body>

<form id="agenceForm">
  <input type="submit" name="action" value="Vendre">
  <input type="submit" name="action" value="Acheter">
  <input type="submit" name="action" value="Louer">
</form>

<script>
  document.getElementById("agenceForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var action = document.activeElement.value;

    switch(action) {
      case "Vendre":
        window.location.href = "page_vendre.html";
        break;
      case "Acheter":
        window.location.href = "page_acheter.html";
        break;
      case "Louer":
        window.location.href = "page_louer.html";
        break;
      default:
        // Redirection par défaut ou gestion d'erreur
        break;
    }
  });
</script>

</body>
</html>
