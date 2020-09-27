<?php
require_once 'config.php';
class CaptchaHandler {
    private $captchaResponse;
    public function __construct($captchaResponse) {
        $this->captchaResponse = $captchaResponse;
    }
    public function getResult() {
        global $captcha_secret;
        $result = file_get_contents( 'https://www.google.com/recaptcha/api/siteverify', false, stream_context_create( array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query( array(
                    'response' => $_POST['g-recaptcha-response'],
                    'secret' => $captcha_secret
                ) ),
            ),
        ) ) );
        $result = json_decode($result);
        return $result->success;
    }
}
