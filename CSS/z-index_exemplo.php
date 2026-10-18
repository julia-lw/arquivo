<!DOCTYPE html>
<html>
<head>
<style>
.container {
  position: relative;
}

.black-box {
  position: relative;
  z-index: 1;
  border: 2px solid black;
  height: 100px;
  margin: 30px;
}

.gray-box {
  position: absolute;
  z-index: 3; /* gray box will be above both green and black box */
  background: lightgray;
  height: 60px;  
  width: 70%;
  left: 50px;
  top: 50px;
}

.green-box {
  position: absolute;
  z-index: 2; /* green box will be above black box */
  background: lightgreen;
  width: 35%;
  left: 270px;
  top: -15px;
  height: 100px;
}
</style>
</head>
<body>

<h1>Exemplo de z-index</h1>

<p>Um elemento com maior ordem na pilha está sempre acima de um elemento com menor ordem na pilha.</p>

<div class="container">
  <div class="black-box">Caixa branca (z-index: 1)</div>
  <div class="gray-box">Caixa cinza (z-index: 3)</div>
  <div class="green-box">Caixa verde (z-index: 2)</div>
</div>

</body>
</html>