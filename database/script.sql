CREATE DATABASE web;

USE web;

create table estado(
	estado_id int NOT NULL AUTO_INCREMENT,
	estado_nome varchar(45),
	estado_atual int,
	estado_descricao varchar(45),
	PRIMARY KEY (estado_id));

create table campo(
	campo_id int not null AUTO_INCREMENT,
	campo_nome varchar(45),
	campo_lote varchar(45),
	campo_endereco varchar(45),
	campo_tamanho_total_ha int,
	campo_capacidade_producao_toneladas int,
	PRIMARY KEY (campo_id));

create table parcela (
	parcela_id int not null AUTO_INCREMENT,
	parcela_lote varchar(45),
	parcela_tamanho_ha int,
	parcela_capacidade_producao_m2 int,
	parcela_cultura varchar(45),
	campo_id int NOT NULL,
	estado_id int NOT NULL,
	PRIMARY KEY (parcela_id),
    FOREIGN KEY (campo_id) REFERENCES campo(campo_id),
	FOREIGN KEY (estado_id) REFERENCES estado(estado_id)
	)  ;

create table usuario(
	usuario_id int not null AUTO_INCREMENT,
	usuario_email varchar(45) not null,
	usuario_senha varchar(45)not null,
	usuario_data_login datetime,
	PRIMARY KEY(usuario_id));

create table trabalhador(
	trabalhador_id int not null AUTO_INCREMENT,
	trabalhador_nome varchar(45),
	trabalhador_bi varchar(10),
	trabalhador_n_contrato int not null,
	trabalhador_salrio_base float,
	estado_id int NOT NULL,
	usuario_id int NOT NULL,
	PRIMARY KEY (trabalhador_id),
    FOREIGN KEY (usuario_id) REFERENCES usuario(usuario_id),
	FOREIGN KEY (estado_id) REFERENCES estado(estado_id));

create table tarefa (
	tarefa_id int not null AUTO_INCREMENT,
	tarefa_nome varchar(45),
	tarefa_data_definicao datetime,
	tarefa_data_inicio datetime,
	tarefa_data_fim_previsto datetime,
	tarefa_data_conclusao datetime,
	estado_id int NOT NULL,
	trabalhador_id int not null,
	parcela_id int NOT NULL,
	PRIMARY KEY (tarefa_id),
    FOREIGN KEY (trabalhador_id) REFERENCES trabalhador(trabalhador_id),
	FOREIGN KEY (estado_id) REFERENCES estado(estado_id),
	FOREIGN KEY (parcela_id) REFERENCES parcela(parcela_id));

create table producao(
	producao_id int not null AUTO_INCREMENT,
	producao_quantidade_toneladas int,
	producao_data datetime,
	estado_id int NOT NULL,
	trabalhador_id int not null,
	parcela_id int NOT NULL,
	PRIMARY KEY (producao_id),
	FOREIGN KEY (estado_id) REFERENCES estado(estado_id),
	FOREIGN KEY (parcela_id) REFERENCES parcela(parcela_id));