use secret;

INSERT INTO `sseguidorecret`.`usuario`
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


