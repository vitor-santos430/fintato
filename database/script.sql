create database db_fintato;

use db_fintato;

create table tb_usuario(
	id_usuario int primary key auto_increment not null,
    nome varchar(200) not null,
    email varchar(200) not null,
    access_key varchar(200) not null,
    adm int not null,
    st_ativo int not null
);

create table tb_despesas(
	id_despesa int not null auto_increment primary key,
    titulo varchar(200) not null,
    valor decimal(9,2) not null,
    data_despesa date not null,
    id_usuario int not null,
    st_ativo int not null,
    
    constraint fk_despesa_usuario
    foreign key(id_usuario) references tb_usuario(id_usuario)
);

create table tb_receitas(
	id_receita int not null auto_increment primary key,
    titulo varchar(200) not null,
    valor decimal(9,2) not null,
    data_receita date not null,
    id_usuario int not null,
    st_ativo int not null,
    
    constraint fk_receita_usuario
    foreign key(id_usuario) references tb_usuario(id_usuario)
);