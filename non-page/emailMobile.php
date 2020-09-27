<?php
$theirName = $_POST['sender-name'];
$theirEmail = $_POST['sender-email'];
$emailData = $_POST['email-data'];
require_once $_SERVER['DOCUMENT_ROOT'] . '/non-page/CaptchaHandler.php';
$handler = new CaptchaHandler($_POST['g-recaptcha-response']);
require $_SERVER['DOCUMENT_ROOT'] . '/non-page/EmailUser.php';
if (filter_var($theirEmail, FILTER_VALIDATE_EMAIL) and (isEmail($theirEmail))) {
    // It's a valid email
    // Now we send the email
    if ($handler->getResult()) {
        $email = new EmailUser($theirName, $theirEmail, $emailData);
        if (!$email->phpMail()) {
            // SOMETHING WENT WRONG
            echo "<br /> <br />SOMETHING WENT TERRIBLY WRONG...";
        } else {
            // Redirect them to our regular site
            header("Location: https://jaredscarito.com/mobile");
        }
    } else {
        // Invalid Captcha
        echo "<br /> <br />Invalid Captcha...";
    }
}
function isEmail($email)
{
    return preg_match('|^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]{2,})+$|i', $email);
}

;
/**/
