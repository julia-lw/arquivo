<?php
//chave estrangeira para criar relacionamento entre tabelas
CREATE TABLE Orders (
    OrderID int PRIMARY KEY,
    OrderNumber int NOT NULL,
    PersonID int,
    CONSTRAINT fk_Person
    FOREIGN KEY (PersonID)
    REFERENCES Persons(PersonID)
);

//alterar tabela para adicionar chave estrangeira
ALTER TABLE Orders
ADD CONSTRAINT fk_Person
FOREIGN KEY (PersonID)
REFERENCES Persons(PersonID);

//alterar tabela para remover chave estrangeira
ALTER TABLE Orders
DROP FOREIGN KEY fk_Person;

?>