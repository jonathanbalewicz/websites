<html><head><title>Invest in Hydrogen</title></head><body><?php
  require_once('recaptchalib.php');
  $privatekey = "6LcGVPkSAAAAANqHL5mv6ixSrcmEGqo2JEB6eWDF";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again");
  } else {
$xoh=$_POST['Name'];
$b=$_POST['Email'];
$c=$_POST['Amount'];
$d=$_POST['distance'];
$e=$_POST['mk'];
$foh=$_POST['place'];
$g=$_POST['time'];
 if((filter_var($c, FILTER_VALIDATE_FLOAT) === false || filter_var($c, FILTER_VALIDATE_INT)===false) && (filter_var($d, FILTER_VALIDATE_FLOAT) === false || filter_var($d, FILTER_VALIDATE_INT)===false) && (filter_var($g, FILTER_VALIDATE_FLOAT) === false || filter_var($g, FILTER_VALIDATE_INT)===false) && filter_var($b, FILTER_VALIDATE_EMAIL) === FALSE && ($e==='m' || $e==='k'))
    {
    echo "Something you entered was not correct.";
    }
else
{
$a=filter_var($xoh,FILTER_SANITIZE_ENCODED);
$f=filter_var($foh,FILTER_SANITIZE_ENCODED);
if ($e=='m')
{$h=($d*1.60934);
$j=' mi';}
else
{$h=$d;
$j=' km';}
echo "<br>Your information has been submitted.<br>
<ol>
<li>An email will be sent to you.</li>
<li>Open the email, and click on the link.</li>
<li>When a hydrogen station is planned in your region, another email will be sent out to you, confirming that you still want to buy hydrogen, and it will have suggestions about which car to buy. The email will tell you when the construction will be completed, and where it will be built.</li>
<li>After construction of the hydrogen station in your region is completed, you will be able to fill your hydrogen vehicles at the station. You will have to pay for the hydrogen whether you use it or not, after you have accepted the email that confirms you want to buy hydrogen.</li></ol>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($b,"Hydrogen Purchase at BuyHydrogen.tk","If you did not sign up for buying hydrogen at BuyHydrogen.tk, then delete this email, otherwise, confirm this information, and click the link if it is correct, or fill out the form again <a href='http://buyhydrogen.jzdb.heliohost.org/fpform.php'>here</a> if it is incorrect.<br>Your name: ".$a."<br>Your email: ".$b."<br>Amount you will buy: ".$c."kg<br>Maximum distance you will be from the hydrogen station: ".$d.$j."<br>You live at: ".$f."<br>Your investment will be available in: ".$g." months<br>To confirm this information, <a href='http://buyhydrogen.jzdb.heliohost.org/confirminfo.php?email=".$b."&name=".$a."&i=fp&amount=".$c."&distance=".$h."&place=".$f."&time=".$g."'>click here.</a>",$headers.'From: BuyHydrogen.tk');

}
  }
  ?></body></html>