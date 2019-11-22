use secret;

INSERT INTO `secret`.`usuario`
(`username`,
`senha`)
VALUES
 ('_natcrm','12345'),
 ('liviacorlaite','12345'),
 ('isabela','12345'),
 ('dbconrado','12345');
 
 INSERT INTO `secret`.`seguidor`
(`username`,
`seguindo`)
VALUES
('dbconrado','_natcrm'),
('dbconrado','isabela'),
('dbconrado','liviacorlaite'),
('_natcrm','dbconrado'),
('isabela','dbconrado'),
('liviacorlaite','dbconrado'),
('liviacorlaite','isabela'),
('liviacorlaite','_natcrm'),
('isabela','_natcrm'),
('_natcrm','liviacorlaite'),
('_natcrm','isabela');


INSERT INTO `secret`.`secret`
(`id`,
`texto`,
`cor_fundo`,
`cor_texto`,
`username`)
VALUES

(NULL, 'Uma vez eu roubei o livro do hobbit da blibioteca da escola', 'firebrick', 'white', 'dbconrado'),
(NULL, 'varias vezes eu sequei na biclicleta depois do banho', 'purple', 'white','liviacorlaite'),
(NULL, 'Sou secretamente apaixonada por duas pessoas', 'red','white','isabela'),
(NULL, 'Gosto de alguém que namora' , 'blue', 'black','_natcrm'),
(NULL, 'Jordana adoraria viver nas suas fantasias pedagógicas', 'purple','white','dbconrado');

select texto,id from secret S inner join seguidor SS on S.username=SS.seguindo where SS.username='isabela';

INSERT INTO `secret`.`comentario`
(`id`,
`texto`,
`datahora`,
`username`,
`secret_id`)
VALUES
(NULL,'QUE PERIGOOOO!',NULL,'isabela',10),
(NULL,'MAAAS GENTEEEEE!',NULL,'_natcrm',10),
(NULL,'pelo menos ela não é lesbica',NULL,'liviacorlaite',10),
(NULL,'desapega,desapega, OLX',NULL,'isabela',9),
(NULL,'minha situação tá pior/ele não te merece',NULL,'liviacorlaite',9),
(NULL,'MEUS OLHOS QUEIMÃO',NULL,'_natcrm',6);

select texto,datahora, secret_id, id from comentario;

select texto,datahora from comentario where secret_id=9;

select texto,datahora from comentario where secret_id=6;



CREATE USER 'misterio'@'localhost' IDENTIFIED BY 'senha123';

GRANT ALL PRIVILEGES ON secret.* TO 'misterio'@'localhost'; 





