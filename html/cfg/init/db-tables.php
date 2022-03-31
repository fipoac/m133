<?php
    // Creation of table products if not existant
    $sql = "CREATE TABLE IF NOT EXISTS Products (
        Prod_ID INT UNSIGNED NOT NULL,
        ProdName VARCHAR(30) NOT NULL,
        ProdPrice INT NOT NULL,
        CONSTRAINT Prod_Pk PRIMARY KEY (Prod_ID,ProdName)
    )";
    $cnct_hobby->exec($sql);
    // Creation of table ProdProperties
    $sql = "CREATE TABLE IF NOT EXISTS ProdProperties (
        Prop_ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        PropName VARCHAR(30) NOT NULL,
        PropVal VARCHAR(30) NOT NULL
    )";
    $cnct_hobby->exec($sql);
    // Creation of table ProdPropRelations
    $sql = "CREATE TABLE IF NOT EXISTS ProdPropRelations (
        ProdProp_ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Prod_ID INT UNSIGNED,
        Prop_ID INT UNSIGNED NOT NULL,
        FOREIGN KEY (Prod_ID) REFERENCES Products(Prod_ID),
        FOREIGN KEY (Prop_ID) REFERENCES ProdProperties(Prop_ID)
    )";
    $cnct_hobby->exec($sql);
?>