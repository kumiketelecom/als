<!doctype html>
<html lang="pt-br">

<head>
		<meta charset="utf-8">
		<title>Intranet - Cadastro de Chamadas - Aliseu</title>
		<meta name="author" content="Kumike Telecomunicações Ltda - ME">
		<meta name="Description" content="Intranet Kumike Telecom">
		<link rel="stylesheet" href="_css/estilo.css">
		<link rel="stylesheet" href="_css/forms.css">		
</head>
<body>
<div id="interface">
	<header id="cabecalho"></header>
	
	<nav> 
	
	<p>
	<a href="clientes_consulta_als.html">Consulta</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href= "os_consulta_als.html">Consulta O.S.</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	</p>
		
	</nav>
			
<section id="principal">
	<h1>Perfil - ADM</h1>
	<h2>Consulta de Clientes</h2>
		<fieldset id="consulta_cli">
		<legend id="cons_cli">Consulta de Clientes</legend>
<?php
session_start();
$ver_os=$_SESSION["ver_os"];
include("db.inc");
db_connect()
or die("não conectou");
$os=mysql_query("SELECT * FROM als_os WHERE num_os=$ver_os");
while($olinha=mysql_fetch_array($os)){
$modelo=$olinha["modelo"];
$garantia=$olinha["garantia"];
$solicita=$olinha["solicita"];
$cod_als=$olinha["cod_als"];
$def_cli=$olinha["def_cli"];
$def_tec=$olinha["def_tec"];
$materiais=$olinha["materiais"];
$val_ser=$olinha["val_ser"];
$val_mat=$olinha["val_mat"];
$tipo_pag=$olinha["tipo_pag"];
$cheques=$olinha["cheques"];
}
$res=mysql_query("SELECT * FROM als_clientes WHERE cod_als=$cod_als");
while($linha=mysql_fetch_array($res)){
$cliente_als=$linha["cliente_als"];
$end_als=$linha["end_als"];
$num_als=$linha["numero_als"];
$comp_als=$linha["comp_als"];
$bairro_als=$linha["bairro_als"];
$cid_als=$linha["cid_als"];
$cep_als=$linha["cep_als"];
$ddd1=$linha["ddd1"];
$fixo_als=$linha["fixo_als"];
$ddd2=$linha["ddd2"];
$cel_als=$linha["cel_als"];
$email_als=$linha["email_als"];
}
$da=mysql_query("SELECT * FROM agenda WHERE cod_aos=$ver_os");
while($dlinha=mysql_fetch_array($da)){
$data=$dlinha["data"];
}
$br_data=date('d/m/Y', strtotime($data));
echo"
	<p>Código:&nbsp;$cod_als</p>
	<p>Nome do cliente:&nbsp;$cliente_als</p>
	<p>Endereço:&nbsp;$end_als &nbsp;&nbsp; Nº:&nbsp;$num_als</p><p>Complemento: &nbsp;$comp_als</p>
	<p>Bairro:&nbsp;$bairro_als &nbsp;&nbsp;Cidade:&nbsp;$cid_als&nbsp;&nbsp;CEP:&nbsp;$cep_als</p>
	<p>Telefone:&nbsp;($ddd1)&nbsp;$fixo_als&nbsp;&nbsp;Telefone 2:&nbsp;($ddd2)&nbsp;$cel_als</p>
	<p>E-mail:&nbsp;$email_als</p>
	<p>garantia:$garantia&nbsp;&nbsp;Modelo:$modelo</p>
	<p>Data:$br_data</p>
   	<p>Solicitação do cliente:$solicita</p>
  	<p>OS:KMK_ALS_$ver_os</p>
	<p>Defeito Cliente:$def_cli</p>
	<p>Defeito Técnico:$def_tec</p>
	<p>Materiais Utilizados:$materiais</p>
	<p>Valor Serviço:$val_ser&nbsp;&nbsp;Valor Materiais:$val_mat</p>
	<p>Forma de pagamento:$tipo_pag&nbsp;&nbsp;Parcelas:$cheques</p>
";

?>
	
		</fieldset>
   	
</section>

<aside id="lateral"> 
	<article>
		<h1>Informações Gerais</h1>
		<h2>Minhas atividades</h2>
		<p>Contatos - Clientes - Parceiros - Fornecedores </p>
	</article>
</aside>

<footer id="rodape">
	<p>Copyright 2018 &copy; - by Kumike Telecommunicações Ltda - ME<br/> 
	<a href="http://facebook.com" target="_blank">Facebook</a> | 
	<a href="http:twitter.com" target="_blank">Twitter</a></p>
</footer>
</div>
	
</body>

</html>
