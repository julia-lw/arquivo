<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "revisao";

// cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// checa conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query template
$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)";

// prepara o template da consulta SQL
if($stmt = $conn->prepare($sql)) {
  // Vincula os parâmetros
  $stmt->bind_param("sss", $firstname, $lastname, $email);

  // define os valores dos parâmetros e executa a consulta
  $firstname = "John";
  $lastname = "Doe";
  $email = "john@example.com";
  $stmt->execute();

  $firstname = "Mary";
  $lastname = "Moe";
  $email = "mary@example.com";
  $stmt->execute();

  $firstname = "Julie";
  $lastname = "Dooley";
  $email = "julie@example.com";
  $stmt->execute();
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>