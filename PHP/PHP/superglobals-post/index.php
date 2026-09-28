<!DOCTYPE html>
<html>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nome: <input type="text" name="fname">
  <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['fname']);
    
    if (empty($name)) {
        echo "<p>O campo está vazio!</p>";
    } else {
        echo "<p>Olá, <strong>" . $name . "</strong>! Dados recebidos com sucesso via POST.</p>";
    }
}
?>

</body>
</html>