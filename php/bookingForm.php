<?
$firstname  = $_REQUEST["firstname"];
$lastname  = $_REQUEST["lastname"];
$email = $_REQUEST["email"];
$phone  = $_REQUEST["phone"];
$service = $_REQUEST["service"];
$staff  = $_REQUEST["staff"];
$date   = $_REQUEST["date"];
$to    = "positivwellness.info@gmail.com"; // ENTER YOUR EMAIL ADDRESS
if (isset($email) && isset($firstname) && isset($lastname)) {
    $email_subject = "$name a enviado un mensaje via Positiv Wellness Center"; // ENTER YOUR EMAIL SUBJECT
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/plain; charset=iso-8859-1" . "\r\n";
	$headers .= "De: ".$firstname." ".$lastname." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
	$msg     = "
	Servicio: $service,
	Staff: $staff,
	Fecha solicitada: $date, 
	Nombre: $firstname, 
	Apellido: $lastname, 
	Email: $email , 
	Numero: $phone";
	
   $mail =  mail($to, $email_subject, $msg, $headers);
if($mail)
	{
		echo 'success';
	}

else
	{
		echo 'failed';
	}
}

?>
