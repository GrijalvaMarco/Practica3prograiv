<html>

<head>
<title>Programa</title>

</head>
<body>
<FORM> 
 <INPUT TYPE="button" VALUE="Convertir" onClick='alert("Mensaje de alerta")'> 
</FORM>  
<?php
$dolares = 10;
$tasa =15.5;
echo " <INPUT TYPE=text NAME=Numero value= $tasa ><BR>";
//echo "<INPUT TYPE=submit NAME=OK VALUE=Convertir ><BR>";



echo "<BR><BR>Este es el resultado:(ignorar lo dem&aacutes) <BR>";
 $pesos = $tasa * $dolares;
 echo $pesos;

?>

</body>


</html>