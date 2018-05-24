<?php
session_start();
$num=$_POST["num_os"];
$_SESSION["ver_os"]=$num;
include("db.inc");
db_connect() or die("não conectou");
$num_os=$_POST["num_os"];
$def_cli=$_POST["def_cli"];
$def_tec=$_POST["def_tec"];
$materiais=$_POST["materiais"];
$val_ser=$_POST["val_ser"];
$val_mat=$_POST["val_mat"];
$pg=$_POST["pagamento"];
$parcelas=$_POST["parcelas"];

if(!($res=mysql_query("UPDATE als_os SET def_cli='$def_cli', def_tec='$def_tec', materiais='$materiais', val_ser='$val_ser', val_mat='$val_mat', tipo_pag='$pg', cheques='$parcelas' WHERE num_os='$num_os'"))){
print("erro:".mysql_error());
print("<br>messagem:".mysql_error());
echo"<br><br><a href=\"os_consulta_als.html\">voltar</a>";
exit;
}
header('Location:os_fechar_mostrar_als.php'); 
?>
