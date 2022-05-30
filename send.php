<?php

require __DIR__.'/PHPMailer/Exception.php';
require __DIR__.'/PHPMailer/PHPMailer.php';
require __DIR__.'/PHPMailer/SMTP.php';

# use "use" after include or require

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function sendmail($name,$email,$subject,$message,$file_to_attach){
/* Envoi de mail */
    /*verification que champs nom et email sont non null */
    /* remplissage des variables avec les champs des form */
    /* integration des fichiers phpmailer */

    $mail=new PHPMailer();
    /* parametres SMTP */
    $mail->isSMTP();                            //envoyer utilisant SMTP
    $mail->Host="smtp.gmail.com";               //initialization de serveur SMTP
    $mail->SMTPAuth=true;                       //activation SMTP authentification
    $mail->Username="dont.reply.ht@gmail.com";  //ADRESSE SMTP
    $mail->Password="Dont.reply.ht1";           //Mot de passe SMTP
    $mail->Port=465;                            //Port TCP
    $mail->SMTPSecure="ssl";
    /* Contenu De mail de ADMIN*/
    $mail->isHTML(true);                                        //Format de mail html
    $mail->setFrom("dont.reply.ht@gmail.com",$name);
    $mail->addAddress("$email");                        //Adresse reception
    $mail->Subject=("$subject");                       //Le sujet de l'email
    $mail->Body=$message;                              //Le contenu de mail
    //$mail->AddAttachment('intro.pdf');
    $mail->AddAttachment($file_to_attach);
     
    /* Commande pour envoyer le mail */
    if ($mail->send())
        return 1;
    else   
        return $mail->ErrorInfo;
    }
?>
