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
		<form id="os_als" method="post" action="os_fechar_grava_als.php">
		<fieldset id="ord_serv_als">
		<legend id="chamadas_als">Ordem de Serviços - Aliseu</legend>
<?php
include("db.inc");
db_connect() or die("não conectou");
$num_os=$_POST["num_os"];
$os=mysql_query("SELECT * FROM als_os WHERE num_os=$num_os");
while($olinha=mysql_fetch_array($os)){
$modelo=$olinha["modelo"];
$garantia=$olinha["garantia"];
$solicita=$olinha["solicita"];
$cod_als=$olinha["cod_als"];
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
$da=mysql_query("SELECT * FROM agenda WHERE cod_aos=$num_os");
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
  	<p>OS:KMK_ALS_$num_os</p>
	<input class='campo' type='hidden' name='num_os' value=$num_os>
";
?>
	<p><textarea class="def_als" name="def_cli" placeholder="Digite o defeito descrito pelo cliente aqui."></textarea><textarea class="def_als" name="def_tec" placeholder="Defeito Constatado pelo Tecnico."></textarea></p>
 			<p><textarea class="obs_als" name="materiais" placeholder="Materiais Utilizados."></textarea></p>
  			<p align="center" >Forma de Pagamento</p>
  			
  			<p><input class="campo" type="text" name="val_ser" id="valor_serv" size="28" maxlength="10" placeholder="Valor dos Serviços"/>&nbsp;&nbsp;<input class="campo" type="text" name="val_mat" id="valor_mat" size="28" maxlength="30" placeholder="Valor dos Materiais" autofocus></p>
  			
  			<p align="center" class="garantia"><input class="campo" type="radio" name="pagamento" value="dinheiro" id="dinheiro" checked><label for="dinheiro">Em Dinheiro</label>&nbsp;&nbsp;&nbsp;<input class="campo" type="radio" name="pagamento" value="cheque" id="cheque"><label for="cheque">Em Cheque</label>&nbsp;&nbsp;&nbsp;<input class="campo" type= "text"  name="parcelas" id="parc" size="1"><label for="parc">&nbsp;&nbsp;Parcelas</label></p>
   			<p align="center"><input class="buttons" type="submit" value="Fechar OS"></p>
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
