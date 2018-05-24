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
	<h2>Consulta de Clientes</h2>
		<fieldset id="consulta_cli">
		<legend id="cons_cli">Consulta de Clientes</legend>
<?php
session_start();
$tel_cad=$_SESSION["tele"];
$atua=$_SESSION["datua"];
include("db.inc");
db_connect()
or die("não conectou");
$nome=$_POST["cons_nome_cli"];
$tel=$_POST["cons_tel_cli"];
if($tel!=""){
$res=mysql_query("SELECT * FROM als_clientes WHERE fixo_als like '%".$tel."%'");
}
elseif($nome!=""){
$res=mysql_query("SELECT * FROM als_clientes WHERE cliente_als like '%".$nome."%'");
}
elseif($tel_cad!=""){
$res=mysql_query("SELECT * FROM als_clientes WHERE fixo_als like '%".$tel_cad."%'");
}
elseif($atua!=""){
$res=mysql_query("SELECT * FROM als_clientes WHERE cod_als=$atua");
}
$busca=mysql_num_rows($res);
if($busca !=0){
while($linha=mysql_fetch_array($res)){
$cod_als=$linha["cod_als"];
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

echo"
	<p>Código:&nbsp;$cod_als</p>
	<p>Nome do cliente:&nbsp;$cliente_als</p>
	<p>Endereço:&nbsp;$end_als &nbsp;&nbsp; Nº:&nbsp;$num_als</p><p>Complemento: &nbsp;$comp_als</p>
	<p>Bairro:&nbsp;$bairro_als &nbsp;&nbsp;Cidade:&nbsp;$cid_als&nbsp;&nbsp;CEP:&nbsp;$cep_als</p>
	<p>Telefone:&nbsp;($ddd1)&nbsp;$fixo_als&nbsp;&nbsp;Telefone 2:&nbsp;($ddd2)&nbsp;$cel_als</p>
	<p>E-mail:&nbsp;$email_als</p>
	<form id='atualizar' method='POST' action='clientes_cadastro_atualiza_als.php?cod_als=$cod_als'><input class='buttons' type='submit' value='Atualizar'></form><form id='gera_os' method='post' action='os_cadastro_als.php?cod_als=$cod_als'><input class='buttons' type='submit' value='Gerar OS'></form>
";
}
}		
else{
header('Location: clientes_cadastro_als.html');
}
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
