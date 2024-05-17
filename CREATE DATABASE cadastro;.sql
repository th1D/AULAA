CREATE DATABASE cadastro;

CREATE TABLE devedores (
	id INT(11) NOT NULL auto_increment,
    nome VARCHAR (255) NOT NULL,
    cnpj_cpf BIGINT NOT NULL,
    data_nascimento DATE NOT NULL,
    endereco VARCHAR (255) NOT NULL,
    created_at TIMESTAMP NOT NULL default current_timestamp,
    uptade_at  TIMESTAMP NOT NULL default current_timestamp ON UPDATE current_timestamp,
    constraint pk_devedor_ir primary key(id)
    
);

CREATE TABLE dividas(
	id INT(11) NOT NULL auto_increment,
    descricao_titulo TEXT NOT NULL,
    valor FLOAT NOT NULL,
    data_vencimento DATE NOT NULL,
    created_at TIMESTAMP NOT NULL default current_timestamp,
    uptade_at  TIMESTAMP NOT NULL default current_timestamp ON UPDATE current_timestamp,
    constraint pk_dividas_id primary key(id),
    constraint fk_vendedor_id foreign key(id) references devedores(id)
    
);