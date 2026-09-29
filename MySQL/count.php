<?php
//sintaxe
SELECT COUNT([DISTINCT] column_name | *)
FROM table_name
WHERE condition;

//exemplo - conta os numeros de produtos na tabela Products
SELECT COUNT(*)
FROM Products;

//exemplo - conta os valores não vazios na coluna ProductID da tabela Products
SELECT COUNT(ProductID)
FROM Products;

//exemplo - conta os valores distintos na coluna ProductName da tabela Products
SELECT COUNT(DISTINCT ProductName)
FROM Products;

//exemplo - conta os valores maiores que 20 na coluna Price da tabela Products
SELECT COUNT(ProductID)
FROM Products
WHERE Price > 20;

?>