<?php
//sintaxe do inner join para selecionar dados de duas tabelas relacionadas
SELECT table1.column1, table1.column2, ..., table2.column1, ...
FROM table1
INNER JOIN table2
ON table1.condition_column = table2.condition_column;

//exemplo
SELECT Products.ProductID, Products.ProductName, Categories.CategoryName
FROM Products
INNER JOIN Categories ON Products.CategoryID = Categories.CategoryID;

//exemplo com mais de duas tabelas
SELECT Orders.OrderID, Customers.CustomerName, Shippers.ShipperName
FROM Orders
INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID
INNER JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID;

?>