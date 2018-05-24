<?php
session_start();
$codals=$_POST["cod_als"];
$_SESSION["codals"]=$codals;
$mod=$_POST["modelo"];
$_SESSION["mod"]=$mod;
include("db.inc");
db_connect() or die("não conectou");
$cod_als=$_POST["cod_als"];
$garantia=$_POST["garantia"];
$modelo=$_POST["modelo"];
$data=$_POST["data"];
$hora=$_POST["hora"];
$solicita=$_POST["solicita"];
$data=$_POST["data"];
$hora=$_POST["hora"];
$obs_hora=$_POST["obs_hora"];
if(!($res=mysql_query("INSERT INTO als_os (cod_als, garantia, modelo, solicita) VALUES ('$cod_als','$garantia', '$modelo', '$solicita')"))){
print("erro:".mysql_error());
print("<br>messagem:".mysql_error());
echo"<br><br><a href=\"os_consulta_als.html\">voltar</a>";
exit;
}
$os=mysql_query("SELECT num_os FROM als_os WHERE cod_als=$cod_als AND modelo='$modelo'");
while($linha=mysql_fetch_array($os)){
$num_os=$linha["num_os"];
}
if(!($da=mysql_query("INSERT INTO agenda (data, id_data, cod_aos, cod_als) VALUES ('$data', '$hora', '$num_os', '$cod_als')"))){
print("erro data:".mysql_error());
print("<br>mensagem:".mysql_error());
echo"<br><br><a href='os_consulta_als.html'>voltar</a>";
exit;
}
header('Location:os_imprimir_als.php'); 
?>
