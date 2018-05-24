CREATE TABLE als_clientes (
	cod_als int (4) zerofill auto_increment,
	cliente_als varchar(255) not null,
	end_als varchar (50),
	numero_als int (7),
	comp_als varchar (10),
	bairro_als varchar (50),
	cid_als varchar (50),
	cep_als varchar (9),
	ddd1 int (2);
	fixo_als varchar (10) not null,
	ddd2 int (2);
	cel_als varchar (10),
	email_als varchar (50),
	primary key (cod_als)
)
;
