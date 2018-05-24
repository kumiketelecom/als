<!doctype html>
<html lang="pt-br">

<head>
		<meta charset="utf-8">
		<title>Intranet - Cadastro de Clientes - Aliseu</title>
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
	<a href="clientes_consulta_als.html">Consulta Clientes</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href= "os_consulta_als.html">Consulta O.S.</a>&nbsp;&nbsp;|&nbsp;&nbsp;
	</p>
		
	</nav>
			
<section id="principal">
	<h1>Perfil - ADM</h1>
	<h2>Atualização de cadastro de clientes</h2>
		<form id='atua_chamadas_als' method='post' action='clientes_cadastro_atualiza_grava_als.php'>
		<fieldset id='chama_als'>
		<legend id='chamadas_als'>Atualização de clientes - Aliseu</legend>
<?php
include("db.inc");
db_connect()
or die("não conectou");
$cod_als=$_GET["cod_als"];
$res=mysql_query("SELECT * FROM als_clientes WHERE cod_als='$cod_als'");
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
echo "
<br><p>Código:&nbsp;$cod_als<input class='campo' type='hidden' name='cod_als' value=$cod_als></p>
<p>Nome:<input class='campo' type='text' name='cliente_als' id='nome_cliente_als' size='47' value='$cliente_als'></p>
<p>Endereço:<input class='campo' type='text' name='end_als' id='end_cliente_als' size='35' value='$end_als'>&nbsp;Nº:<input class='campo' type='text' name='num_als' id='numero_als' size='5' maxlength='10' value='$num_als'>&nbsp;Complemento:<input class='campo' type='text' name='comp_als' id='com_end_als' size='10' maxlength='20' value='$comp_als'></p>
<p>Bairro:<input class='campo' type='text' name='bairro_als' id='cad_bairro_als' size='17' maxlength='30' value='$bairro_als'>&nbsp;Cidade:<input class='campo' type='text' name='cid_als' id='cad_cid_als' size='17' maxlength='30' value='$cid_als'></p><p>CEP:<input class='campo' type='text' name='cep_als' id='cad_cep_als' size='16' maxlength='30' value='$cep_als'></p>
<p>DDD(<input class='campo' type='text' name='ddd1' id='ddd1' size='2' value='$ddd1'>)Telefone:<input class='campo' type='tel' name='fixo_als' id='tel_fixo_als' size='16' value='$fixo_als'><br>DDD(<input class='campo' type='text' name='ddd2' id='ddd2' size='2' value='$ddd2'>)Telefone 2:<input class='campo' type='tel' name='cel_als' id='tel_cel_als' size='16' value='$cel_als'><br>E-mail:<input class='campo' type='email' name='email_als' id='cad_email_als' size='18' value='$email_als'></p>
   			<p align='center'><input class='buttons' type='submit' value='Atualizar'></p>";
}
echo"
			</fieldset>
		   	</form>		
";
?>
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
