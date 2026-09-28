<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["corFavorita"] = "roxo";
$_SESSION["animalFavorito"] = "gato";
echo "Variáveis da sessão estão definidas.";
?>

</body>
</html>