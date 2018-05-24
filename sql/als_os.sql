CREATE TABLE als_os (
	num_os int (4) zerofill auto_increment,
	cod_als int (4) zerofill,
	garantia varchar (23),
	modelo varchar (20),
	solicita varchar(255),
	def_cli varchar (255),
	def_tec varchar (255),
	materiais varchar (255),
	val_ser decimal(5,2),
	val_mat decimal(5,2),
	tipo_pag varchar (11),
	cheques int (2),
	primary key (num_os)
)
;
