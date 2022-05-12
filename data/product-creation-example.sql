-- SQL Product creation:
insert into Products (Prod_ID,ProdName,ProdPrice) Values (1,'Laptop',1200);
insert into ProdProperties (Prop_ID,PropName,PropVal) Values (1,'img_main','/upload/products/1.jpg');
insert into ProdProperties (Prop_ID,PropName,PropVal,PropDesc) Values (2,'desc','Dieser Laptop hat tolle Funktionen.','Beschreibung');
insert into ProdProperties (Prop_ID,PropName,PropVal,PropDesc) Values (3,'color','Schwarz', 'Farbe');
insert into ProdProperties (Prop_ID,PropName,PropVal,PropDesc) Values (4,'desc_short','Toller Laptop sehr cool', 'Kurze Beschreibung');
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (1,1);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (1,2);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (1,3);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (1,4);

insert into Products (Prod_ID,ProdName,ProdPrice) Values (2,'Laptop Killer',1600);
insert into ProdProperties (Prop_ID,PropName,PropVal) Values (5,'img_main','/upload/products/2.jpg');
insert into ProdProperties (Prop_ID,PropName,PropVal,PropDesc) Values (6,'desc','Der Laptop der mehr kann als der andere und darum besser ist.','Beschreibung');
insert into ProdProperties (Prop_ID,PropName,PropVal,PropDesc) Values (7,'desc_short','Toller Laptop sehr cool', 'Kurze Beschreibung');
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (2,5);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (2,6);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (2,7);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (2,3);

insert into Products (Prod_ID,ProdName,ProdPrice) Values (3,'Tablet Birnenweich',999);
insert into ProdProperties (Prop_ID,PropName,PropVal) Values (8,'img_main','/upload/products/3.jpg');
insert into ProdProperties (Prop_ID,PropName,PropVal,PropDesc) Values (9,'desc','Das Tablet von ner Frucht, jetzt mit mehr Kernen','Beschreibung');
insert into ProdProperties (Prop_ID,PropName,PropVal,PropDesc) Values (10,'desc_short','Nices ding', 'Kurze Beschreibung');
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (3,8);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (3,9);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (3,10);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (3,3);

insert into Products (Prod_ID,ProdName,ProdPrice) Values (4,'Handy Sammersingsang',740);
insert into ProdProperties (Prop_ID,PropName,PropVal) Values (11,'img_main','/upload/products/4.jpg');
insert into ProdProperties (Prop_ID,PropName,PropVal,PropDesc) Values (12,'desc','Das Handy kann sogar andersrum fotografieren. Pass auf!','Beschreibung');
insert into ProdProperties (Prop_ID,PropName,PropVal,PropDesc) Values (13,'color','Mitternachts Blau', 'Farbe');
insert into ProdProperties (Prop_ID,PropName,PropVal,PropDesc) Values (14,'desc_short','Das geht schon', 'Kurze Beschreibung');
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (4,11);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (4,12);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (4,13);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (4,14);

insert into Products (Prod_ID,ProdName,ProdPrice) Values (5,'Monitor Giga',740);
insert into ProdProperties (Prop_ID,PropName,PropVal) Values (15,'img_main','/upload/products/5.jpg');
insert into ProdProperties (Prop_ID,PropName,PropVal,PropDesc) Values (16,'desc','Der Monitor kann dir Dinge anzeigen und das ist so mega cool','Beschreibung');
insert into ProdProperties (Prop_ID,PropName,PropVal,PropDesc) Values (17,'desc_short','Schau hier, Text.', 'Kurze Beschreibung');
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (5,3);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (5,15);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (5,16);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (5,17);

insert into Products (Prod_ID,ProdName,ProdPrice) Values (6,'Kamera Spion',740);
insert into ProdProperties (Prop_ID,PropName,PropVal) Values (18,'img_main','/upload/products/6.jpg');
insert into ProdProperties (Prop_ID,PropName,PropVal,PropDesc) Values (19,'desc','Diese Kamera kann Bilder machen, wie es Kameras eben halt so machen','Beschreibung');
insert into ProdProperties (Prop_ID,PropName,PropVal,PropDesc) Values (20,'color','Grau', 'Farbe');
insert into ProdProperties (Prop_ID,PropName,PropVal,PropDesc) Values (21,'desc_short','Das ist halt ne Kamera', 'Kurze Beschreibung');
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (6,18);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (6,19);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (6,20);
insert into ProdPropRelations (Prod_ID,Prop_ID) Values (6,21);