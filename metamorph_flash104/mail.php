<?
$name=$_POST['inp1'];
$email=$_POST['inp2'];
$last=$_POST['inp3'];
$phone=$_POST['inp4'];
$message=$_POST['inp5'];

$ToEmail = "support@metamorphozis.com";
$ToSubject = "Message from your site";

$EmailBody =   "Name: $name\n
                Last Name: $last\n 
				Email: $email\n
				Phone: $phone\n
				Message: $message\n";

$Message = $EmailBody;


$headers .= "Content-type: text; charset=iso-8859-1\r\n";
$headers .= "From:".$name." / ".$email."\r\n";

mail($ToEmail,$ToSubject,$Message, $headers);

?>

