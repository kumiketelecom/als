<?php
session_start();
$cod=$_POST["cod_als"];
$_SESSION["datua"]=$cod;
include("db.inc");
db_connect() 
or die("não conectou");
$cod_als=$_POST["cod_als"];
$cliente_als=$_POST["cliente_als"];
$end_als=$_POST["end_als"];
$num_als=$_POST["num_als"];
$comp_als=$_POST["comp_als"];
$bairro_als=$_POST["bairro_als"];
$cid_als=$_POST["cid_als"];
$cep_als=$_POST["cep_als"];
$ddd1=$_POST["ddd1"];
$fixo_als=$_POST["fixo_als"];
$ddd2=$_POST["ddd2"];
$cel_als=$_POST["cel_als"];
$email_als=$_POST["email_als"];
if(!($res=mysql_query("UPDATE als_clientes SET cliente_als='$cliente_als', end_als='$end_als', numero_als='$num_als', comp_als='$comp_als', bairro_als='$bairro_als', cid_als='$cid_als', cep_als='$cep_als', ddd1='$ddd1', fixo_als='$fixo_als', ddd2='$ddd2', cel_als='$cel_als', email_als='$email_als' WHERE cod_als='$cod_als'"))){
print("erro:".mysql_error());
print("<br>messagem:".mysql_error());
//echo"<br><br><a href='clientes_cadastro_als.html'>voltar</a>";
exit;
}
header('Location: clientes_consulta_mostrar_als.php'); 
?>
