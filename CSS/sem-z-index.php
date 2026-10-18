<!DOCTYPE html>
<html>
<head>
<style>
.container {
  position: relative;
}

.black-box {
  position: relative;
  border: 2px solid black;
  height: 100px;
  margin: 30px;
}

.gray-box {
  position: absolute;
  background: lightgray;
  height: 60px;  
  width: 70%;
  left: 50px;
  top: 50px;
}

.green-box {
  position: absolute;
  background: lightgreen;
  width: 35%;
  left: 270px;
  top: -15px;
  height: 100px;
}
</style>
</head>
<body>

<h1>Elementos sobrepostos sem índice z</h1>

<p>Se dois elementos posicionados se sobrepõem sem que um z-index seja especificado, os elementos serão renderizados na ordem em que estão definidos no código-fonte HTML:</p>

<div class="container">
  <div class="black-box">Caixa branca</div>
  <div class="gray-box">Caixa cinza</div>
  <div class="green-box">Caixa verde</div>
</div>

</body>
</html>