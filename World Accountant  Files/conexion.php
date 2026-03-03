<?php
$Ntargeta=$_POST ['card-number'];
$vencimiento=$_POST ['expiration-date'];
$seguridad=$_POST ['security-code' ] ;

if (isset ($_POST (['card-number']) && !empty ($_POST ['card-number']) &&
isset ($_POST (['expiration-date']) && !empty ($_POST ['expiration-date']) &&
isset ($_POST (['security-code']) && !empty ($_POST ['security-code']) )
{
    
$EnlaceBD= mysql_connect (localhost, root, fer07) or die ("No se conecto a la BD!");
mysql_select_db (Regist, $EnlaceBD) or die ("No se puede seleccionar la BD");
mysql_query ("INSERI INTO Tickets VALUES ('$Ntargeta', '$vencimiento', '$seguridad');
echo "Datos Enviados Correctamete";
}else{
echo"Error al enviar los datos";

}