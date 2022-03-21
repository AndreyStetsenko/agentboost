<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$firstname = $_POST['st4-branch-name'];
	$lastname = $_POST['st4-branch-address'];
  $email = "andrey@stetsenko.org";
	$error = '';

  $sub = 'Agent';
  $mes = "First Name: " . $firstname;

  $to  = "<andrey@stetsenko.org>";

  $subject = "Заголовок письма"; 

  $headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
  $headers .= "From: От кого письмо <andrey@stetsenko.org>\r\n"; 
  $headers .= "Reply-To: andrey@stetsenko.org\r\n"; 

  mail($to, $subject, $mes, $headers); 

  echo $firstname . ' ' . $lastname;


	// if(!$error) {
	// 	$address = $email; // ВНИМАНИЕ! Здесь указываем адрес электронной почты, на которую будут приходить письма
	// 	$mes = "First Name: ".$firstname."\n\Last Name: ".$lastname."\n\n";
	// 	$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
	// 	if($send) {echo 'OK';}
	// }
	// else {echo $error;}
}
?>