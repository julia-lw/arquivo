<!DOCTYPE html>
<html>
<head>
<style>
.container {
  display: grid;
  grid-template-areas:
    "header header"
    "menu content"
    "footer footer";
  grid-template-columns: 1fr 3fr;
  gap: 3px;
  background-color: dodgerblue;
  padding: 5px;
}
.container div {
  background-color: white;
  padding: 10px;
}
.container div.header {
  grid-area: header;
  text-align: center;
}
.container div.menu {
  grid-area: menu;
}
.container div.content {
  grid-area: content;
}
.container div.footer {
  grid-area: footer;
  text-align: center;  
}
</style>
</head>
<body>

<h1>CSS Layout "Grade"</h1>

<p>O módulo de layout em grade oferece um sistema de layout baseado em grade, com linhas e colunas.</p>
<p>O módulo de layout em grade facilita a criação de páginas web complexas e responsivas sem a necessidade de flutuações ou posicionamento:</p>

<div class="container">
  <div class="header"><h2>Meu Cabeçalho</h2></div>
  <div class="menu"><a href="#">Link 1</a><br><a href="#">Link 2</a><br><a href="#">Link 3</a></div>
  <div class="content"><h3>Lorem Ipsum</h3><p>Lorem ipsum odor amet, consectetuer adipiscing elit. Ridiculus sit nisl laoreet facilisis aliquet. Potenti dignissim litora eget montes rhoncus sapien neque urna. Cursus libero sapien integer magnis ligula lobortis quam ut.</p></div>
  <div class="footer"><h4>Rodapé</h4></div>
</div>

</body>
</html>