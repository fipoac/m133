-- SQL Product creation:
insert into ProdProperties (PropName,PropVal) Values ('img_main','/upload/products/1.jpg');
insert into ProdProperties (PropName,PropVal,PropDesc) Values ('desc','Dieser Laptop hat tolle Funktionen.','Beschreibung');
insert into Products (ProdName,ProdPrice) Values ('Laptop',1200);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (1,2);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (1,3);
insert into ProdProperties (PropName,PropVal,PropDesc) Values ('color','Schwarz', 'Farbe');
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (1,4);
insert into ProdProperties (PropName,PropVal,PropDesc) Values ('desc_short','Toller Laptop sehr cool', 'Kurze Beschreibung');
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (1,5);