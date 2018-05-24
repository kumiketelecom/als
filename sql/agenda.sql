CREATE TABLE agenda (
	data date,
	id_data int (1),
	cod_als int (4) zerofill,
	cod_kmk int (4) zerofill,
	cod_aos int (4) zerofill,
	tag varchar (30),
	index (data)
)
;
