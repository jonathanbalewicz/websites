<?php
require_once('recaptchalib.php');
$secret = "-------------------";
$response = null;
$reCaptcha = new ReCaptcha($secret);

if ($_POST["g-recaptcha-response"]) {
    $resp = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
$b=$_POST[email];
$c=$_POST[message];
mail('-----------',"Contact","Email: ".$b." Message: ".$c,'From: '.$b);
mail($b,"Buy Hydrogen Support","You are recieving this message because you submitted a message at BuyHydrogen.tk's contact form. If you did not, delete this email. If you did, this message confirms that you put in the right email address.",'From: BuyHydrogen.tk');
echo "Your message has been submitted.";}
else
echo "You must verify that you aren't a robot";
?>