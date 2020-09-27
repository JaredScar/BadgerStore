<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once $_SERVER['DOCUMENT_ROOT'] . '/non-page/phpMailer/MailerException.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/non-page/phpMailer/PHPMailer.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/non-page/phpMailer/SMTP.php';
require_once 'config.php';
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/21/2018
 * Time: 11:26 AM
 */
class EmailUser {
    private $theirName, $theirEmail, $emailData;
    public function __construct($theirName, $theirEmail, $emailData) {
        $this->theirEmail = $theirEmail;
        $this->theirName = $theirName;
        $this->emailData = $emailData;
        // Call the email() function to email them
    }
    public function phpMail() {
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->Mailer = "smtp";
            $mail->SMTPKeepAlive = true;
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            global $email_username;
            global $email_password;
            $mail->Username = $email_username;                 // SMTP username
            $mail->Password = $email_password;                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->SMTPAutoTLS = false;
            $mail->Port = 587;                                    // TCP port to connect to
            // TEMPORARY FIX:
            // TODO Find fix that doesn't do this:
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            // END TEMPORARY FIX

            //Recipients
            $mail->setFrom($this->theirEmail, $this->theirName);
            $mail->addAddress($email_username);     // Add a recipient
            $mail->addAddress($this->theirEmail);
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = "[Contact Me] " . $this->theirName . " (" . $this->theirEmail . ")";
            $mail->Body    = $this->emailData;
            $mail->AltBody = $this->emailData;

            $mail->send();
            //echo "Message should of been sent?";
            return true;
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            return false;
        }
    }
}
