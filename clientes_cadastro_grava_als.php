<?php
session_start();
$co=$_POST["fixo_als"];
$_SESSION["tele"]=$co;
include("db.inc");
db_connect() or die("não conectou");
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
if(!($res=mysql_query("INSERT INTO als_clientes (cliente_als, end_als, numero_als, comp_als, bairro_als, cid_als, cep_als, ddd1, fixo_als, ddd2, cel_als, email_als) VALUES ('$cliente_als', '$end_als','$num_als', '$comp_als', '$bairro_als', '$cid_als', '$cep_als', '$ddd1', '$fixo_als', '$ddd2', '$cel_als', '$email_als')"))){
print("erro:".mysql_error());
print("<br>messagem:".mysql_error());
echo"<br><br><a href=\"clientes_cadastro_als.html\">voltar</a>";
exit;
}
header('Location:clientes_consulta_mostrar_als.php'); 
?>
