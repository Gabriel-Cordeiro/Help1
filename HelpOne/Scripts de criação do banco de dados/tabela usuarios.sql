Create table usuario
(
u_id int not null AUTO_INCREMENT,
u_nome varchar(45),
u_data_nasc datetime,
u_sexo varchar(45),
u_email varchar(45),
u_cpf varchar(50),
u_login varchar(50),
u_senha varchar(50),
u_cidade varchar(50),
u_estado varchar(50),
Primary key (u_id)
);

