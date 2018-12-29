<?php
  require_once('recaptchalib.php');
  $privatekey = "6LcGVPkSAAAAANqHL5mv6ixSrcmEGqo2JEB6eWDF";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again");
  } else {
$b=$_POST[email];
$c=$_POST[message];
mail('njaohnt2@gmail.com',"Contact","Email: ".$b." Message: ".$c,'From: '.$b);
mail($b,"Buy Hydrogen Support","You are recieving this message because you submitted a message at BuyHydrogen.tk's contact form. If you did not, delete this email. If you did, this message confirms that you put in the right email address.",'From: BuyHydrogen.tk');
echo "Your message has been submitted.";}
?>