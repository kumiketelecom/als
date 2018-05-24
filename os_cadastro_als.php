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
		<form id="os_als" method="post" action="os_cadastro_grava_als.php">
		<fieldset id="ord_serv_als">
		<legend id="chamadas_als">Ordem de Serviços - Aliseu</legend>
<?php
include("db.inc");
db_connect() or die("não conectou");
$cod_als=$_GET["cod_als"];
$res=mysql_query("SELECT * FROM als_clientes WHERE cod_als=$cod_als");
while($linha=mysql_fetch_array($res)){
//$cod_als=$linha["cod_als"];
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
	<br><p>Código:&nbsp;$cod_als</p>
	<p>Nome do cliente:&nbsp;$cliente_als</p>
	<p>Endereço:&nbsp;$end_als &nbsp;&nbsp; Nº:&nbsp;$num_als</p><p>Complemento: &nbsp;$comp_als</p>
	<p>Bairro:&nbsp;$bairro_als &nbsp;&nbsp;Cidade:&nbsp;$cid_als&nbsp;&nbsp;CEP:&nbsp;$cep_als</p>
	<p>Telefone:&nbsp;($ddd1)&nbsp;$fixo_als&nbsp;&nbsp;Telefone 2:&nbsp;($ddd2)&nbsp;$cel_als</p>
	<p>E-mail:&nbsp;$email_als</p>
<input class='campo' type='hidden' name='cod_als' value='$cod_als'>
";
}	
?>
<p>Agendar horário: <input class='campo' type='date' name='data'>&nbsp;&nbsp;
	<select class='campo' name='hora' id='hora_als'>
			<option value='1'>09h00 - 10h30</option>
			<option value='2'>10h30 - 12h00</option>
			<option value='3'>14h00 - 15h30</option>
			<option value='4'>15h30 - 17h00</option>
			</select></p>
<p align="center" class="garantia"><input class="campo" type="radio" name="garantia" id="garantia_sim" value="Está na garantia"><label for="garantia_sim">Está na garantia</label>&nbsp;&nbsp;&nbsp;<input class="campo" type="radio" name="garantia" id="garantia_nao" value="Não está na garantia" checked><label for="garantia_nao">Não está na garantia.</label></p>
		<p><select class="campo" name="modelo" id="mod_aliseu">
  			<optgroup label="Smart">
   				<option value="SMT_COM">Smart - Globo Plástico</option>
   				<option value="SMT_LED">Smart - Placa LED</option>
   				<option value="SMT_ECO">Smart - ECO</option>
   			</optgroup>
   			<optgroup label="Terral">
   				<option value="TRR_COM">Terral - Globo Vidro</option>
   				<option value="TRR_LED">Terral - Placa LED</option>
   				<option value="TRR_ECO">Terral - ECO</option>
   			</optgroup>
   			<optgroup label="Aliseu">
   				<option value="ALS_COM">Aliseu - Globo Vidro</option>
   				<option value="ALS_PL">Aliseu - Globo PL</option>
   				<option value="ALS_SL">Aliseu - Sem Luminária</option>
   			</optgroup>
   			<optgroup label="Jet">
   				<option value="JET_COM">Jet - Globo Vidro</option>
   				<option value="JET_SL">Jet - Sem Luminária</option>
   			</optgroup>
   			<optgroup label="Duo">
   				<option value="DUO_COM">Duo - Globo Plástico</option>
   				<option value="DUO_ECO">Duo - ECO</option>
   			</optgroup>
   			<optgroup label="Alisclean">
   				<option value="ALC_COM">Alisclean - Globo Plástico</option>
   			</optgroup>
   			<optgroup label="Geo">
   				<option value="GEO_COM">Geo - Globo Plástico</option>
   			</optgroup>
   			<optgroup label="Wave">
   				<option value="WAV_COM">Wave - Globo Plástico</option>
   			</optgroup>
   			<optgroup label="Flow">
   				<option value="FLW_COM">Flow - Globo Plástico</option>
   				<option value="FLW_ECO">Flow - ECO</option>
   			</optgroup>
   			<optgroup label="Flow">
   				<option value="FLW_COM">Flow - Globo Plástico</option>
   				<option value="FLW_ECO">Flow - ECO</option>
   			</optgroup>
   			<optgroup label="Extras">
   				<option value="EXT_IC55">KIT - IC55 - 127V</option>
   				<option value="EXT_IC55_220">KIT - IC55 - 220V</option>
   				<option value="EXT_RCP">Receptor - IC55</option>
   				<option value="EXT_TRS">Transmissor - IC55</option>
   			</optgroup> 			
   			</select>
  			<p><textarea class="obs_als" placeholder="Digite a Solicitação do cliente aqui." name="solicita"></textarea></p>
   			<p align="center"><input class="buttons" type="submit" value="Salvar"></p>
			</fieldset>
   			</form>
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
