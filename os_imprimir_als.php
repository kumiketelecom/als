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
	<a href="clientes_consulta_als.html">Consulta clientes</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href= "os_consulta_als.html">Consulta O.S.</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	</p>
		
	</nav>
<section id="principal">
	<h1>Perfil - ADM</h1>
	<h2>Ordem de Serviços - Aliseu</h2>
	<legend id="chamadas_als">Ordem de Serviços - Aliseu</legend>
<?php
session_start();
$cod_als_grava=$_SESSION["codals"];
$mod_grava=$_SESSION["mod"];
include("db.inc");
db_connect() or die("não conectou");
$res=mysql_query("SELECT * FROM als_clientes WHERE cod_als=$cod_als_grava");
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
$os=mysql_query("SELECT * FROM als_os WHERE cod_als=$cod_als_grava AND modelo='$mod_grava'");
while($olinha=mysql_fetch_array($os)){
$mod=$olinha["modelo"];
$garantia=$olinha["garantia"];
$solicita=$olinha["solicita"];
$num_os=$olinha["num_os"];
}
$da=mysql_query("SELECT * FROM agenda WHERE cod_aos=$num_os");
while($dlinha=mysql_fetch_array($da)){
$data=$dlinha["data"];
}
$br_data=date('d/m/Y', strtotime($data));
echo"
	<p>Nome do cliente:&nbsp;$cliente_als&nbsp;&nbsp;&nbsp;Data:$br_data</p>
	<p>Endereço:&nbsp;$end_als &nbsp;&nbsp; Nº:&nbsp;$num_als</p><p>Complemento: &nbsp;$comp_als</p>
	<p>Bairro:&nbsp;$bairro_als &nbsp;&nbsp;Cidade:&nbsp;$cid_als&nbsp;&nbsp;CEP:&nbsp;$cep_als</p>
	<p>Telefone:&nbsp;($ddd1)&nbsp;$fixo_als&nbsp;&nbsp;Telefone 2:&nbsp;($ddd2)&nbsp;$cel_als</p>
	<p>E-mail:&nbsp;$email_als</p>
	<p>Solicitação do cliente:$solicita</p>
	<p>Garantia:$garantia&nbsp;&nbsp;Modelo:$mod&nbsp;&nbsp; OS: KMK_ALS_$num_os</p>
";
echo"
<form method='post' action='os_gerar_pdf_als.php'>
<input class='campo' type='hidden' name='cod_als' value=$cod_als_grava>
<input class='campo' type='hidden' name='modelo' value=$mod_grava>
<input class='campo' type='hidden' name='num_os' value=$num_os>
<input class='buttons' type='submit' value='Imprimir'></form>
";
?>
</section>

</div>
	
</body>

</html>
