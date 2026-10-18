<!DOCTYPE html>
<html>
<head>
<style>
div.relative {
  position: relative;
  width: 400px;
  height: 200px;
  border: 3px solid green;
} 

div.absolute {
  position: absolute;
  top: 80px;
  right: 0;
  width: 200px;
  height: 100px;
  border: 3px solid red;
}
</style>
</head>
<body>

<h2>Usando position: absolute;</h2>

<p>Um elemento com position: absolute; é posicionado com relação ao ancestral posicionado mais próximo:</p>

<div class="relative">Esse elemento div tem posição: relativa;
  <div class="absolute">Esse elemento div tem posição: absoluta;</div>
</div>

</body>
</html>