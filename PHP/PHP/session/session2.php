<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_SESSION["corFavorita"])) {
  echo "Minha cor favorita é " . $_SESSION["corFavorita"] . ".<br>";
  echo "Meu animal favorito é " . $_SESSION["animalFavorito"] . ".";
} else {
  echo "Nenhuma informação de sessão encontrada.";
}
?>

</body>
</html>