<?php
    // Creation of table Products if not existant
    $sql = "CREATE TABLE IF NOT EXISTS `Products` (
        `Prod_ID` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        `ProdName` VARCHAR(30) NOT NULL UNIQUE,
        `ProdPrice` INT NOT NULL
    )";
    $cnct_db->exec($sql);
    // Creation of table ProdProperties
    $sql = "CREATE TABLE IF NOT EXISTS `ProdProperties` (
        `Prop_ID` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `PropName` VARCHAR(30) NOT NULL,
        `PropDesc` VARCHAR(50),
        `PropVal` VARCHAR(30) NOT NULL
    )";
    $cnct_db->exec($sql);
    // Creation of table ProdPropRelations
    $sql = "CREATE TABLE IF NOT EXISTS `ProdPropRelations` (
        `ProdProp_ID` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `Prod_ID` INT UNSIGNED,
        `Prop_ID` INT UNSIGNED NOT NULL,
        FOREIGN KEY (Prod_ID) REFERENCES Products(Prod_ID),
        FOREIGN KEY (Prop_ID) REFERENCES ProdProperties(Prop_ID)
    )";
    $cnct_db->exec($sql);
    // Creation of table Accounts
    $sql = "CREATE TABLE IF NOT EXISTS `Accounts` (
        `Account_ID` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `Username` VARCHAR(30) NOT NULL UNIQUE,
        `Password` VARCHAR(255) NOT NULL,
        `Email` VARCHAR(100) NOT NULL UNIQUE
    )";
    $cnct_db->exec($sql);
    // Creation of Product view
    $sql = "CREATE VIEW IF NOT EXISTS `prod_view` 
    AS SELECT Products.Prod_ID,Products.ProdName,Products.ProdPrice,ProdProperties.PropName,ProdProperties.PropVal,ProdProperties.PropDesc 
    FROM Products 
    INNER JOIN ProdPropRelations ON Products.Prod_ID=ProdPropRelations.Prod_ID 
    INNER JOIN ProdProperties ON ProdPropRelations.Prop_ID=ProdProperties.Prop_ID";
    $cnct_db->exec($sql);
?>