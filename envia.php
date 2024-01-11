<?php



if(isset($_POST['email']) && !empty($_POST['email'])){

$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

$to = "matteus05goulart@gmail.com";
$subject = "Formulário Projeto Desenvolvendo Esperança";
$body = "Nome: ".$name. "\n".
        "E-mail: ".$email. "\n".
        "Mensagem: ".$mensagem;

require_once("PHPmailer/class.phpmailer.php");

define('GUSER' == 'matteusgr005@gmail.com');
define('GPWD' == '@020524mth');

$header = "From: matteusgr005@gmail.com"."\r\n"."Reply-to: ".$email."\r\n"."X=Mailer:PHP/".phpversion();

function smtpmailer($to, $subject, $body, $header){
    global $error;
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->Username = 'GUSER';
    $mail->Password = 'GPWD';
    $mail->SetFrom($header);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);

}

if(!$mail->Send()){
    $error = "Erro ao enviar: ".$mail->ErrorInfo;
    return false;
    header('index.html');
}
} else{
    $error = "E-mail enviado com sucesso!";
    return true;
    header('index.html');
}

if(!empty($error)) echo $error;


?>