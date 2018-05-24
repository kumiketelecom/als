<?php
$cod_als_grava=$_POST["cod_als"];
$mod_grava=$_POST["modelo"];
$num_os_grava=$_POST["num_os"];
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
$os=mysql_query("SELECT * FROM als_os WHERE num_os=$num_os_grava");
while($olinha=mysql_fetch_array($os)){
$mod=$olinha["modelo"];
$garantia=$olinha["garantia"];
$solicita=$olinha["solicita"];
$num_os=$olinha["num_os"];
}
$da=mysql_query("SELECT * FROM agenda WHERE cod_aos=$num_os_grava");
while($dlinha=mysql_fetch_array($da)){
$data=$dlinha["data"];
}
$br_data=date('d/m/Y', strtotime($data));

$pdf=file_get_contents("os_modelo_pdf_als.html");
$pdf=str_replace("#cliente_als","$cliente_als",$pdf);
$pdf=str_replace("#br_data","$br_data",$pdf);
$pdf=str_replace("#end_als","$end_als",$pdf);
$pdf=str_replace("#num_als","$num_als",$pdf);
$pdf=str_replace("#comp_als","$comp_als",$pdf);
$pdf=str_replace("#bairro_als","$bairro_als",$pdf);
$pdf=str_replace("#cid_als","$cid_als",$pdf);
$pdf=str_replace("#cep_als","$cep_als",$pdf);
$pdf=str_replace("#ddd1","$ddd1",$pdf);
$pdf=str_replace("#fixo_als","$fixo_als",$pdf);
$pdf=str_replace("#ddd2","$ddd2",$pdf);
$pdf=str_replace("#cel_als","$cel_als",$pdf);
$pdf=str_replace("#email_als","$email_als",$pdf);
$pdf=str_replace("#modelo","$mod_als",$pdf);
$pdf=str_replace("#garantia","$garantia",$pdf);
$pdf=str_replace("#solicita","$solicita",$pdf);
$pdf=str_replace("#num_os","$num_os",$pdf);
require_once("mpdf60/mpdf.php");
$mpdf=new mPDF('utf-8','A4-L');
$mpdf->WriteHTML($pdf);
$mpdf->Output();

?>
