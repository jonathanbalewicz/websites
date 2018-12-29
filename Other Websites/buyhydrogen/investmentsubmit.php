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
{$a=filter_var($xoh,FILTER_SANITIZE_ENCODED);
$f=filter_var($foh,FILTER_SANITIZE_ENCODED);
$con=mysql_connect("localhost","njaohnt_bh","i8nJvMeBsMt","njaohnt_bh");
if (!$con)
  {
  die('Could not connect: '.mysql_error());
  }
mysql_select_db("njaohnt_bh", $con);
if ($c<500&&$c>49.99)
{$yt=round($c/4.9);
$at=round($c/.00044);
$ct=number_format($yt);
$zt=number_format($at);
echo '<strong>You will get '.$ct.' kg('.$zt.' litres) of hydrogen<br>Enough to fill a 5 kg hydrogen car '.($yt/5).' times<br>At 5 kg per fill, it will cost <u>$'.((round(($c/($yt/5))*100))/100).'</u> per fill (in Canadian Dollars)</strong>';
}
if ($c>499.99&&$c<2500.01)
{$yt=round($c/4.45);
$at=round($c/.0004);
$ct=number_format($yt);
$zt=number_format($at);
echo "<strong>You will get ".$ct." kg(".$zt." litres) of hydrogen.<br>Enough to fill a 5 kg hydrogen car ".($yt/5)." times.<br>At 5 kg per fill, it will cost <u>$".((round(($c/($yt/5))*100))/100)."</u> per fill (in Canadian Dollars).</strong>";
}
if ($c>2500&&$c<25000.01)
{$yt=$c-2500;
$et=round(($yt/4.12)+561.797752809);
$at=round(($yt/.00037)+6250000);
$ct=number_format($et);
$zt=number_format($at);
$wt=number_format(($et/5));
echo "<strong>You will get ".$ct." kg(".$zt." litres) of hydrogen.<br>That is enough to fill a 5 kg hydrogen car ".$wt." times.<br>At 5 kg per fill, it will cost <u>$".((round(($c/($et/5))*100))/100)."</u> per fill (in Canadian Dollars).</strong>";
}
if ($c>25000&&$c<100000.01)
{$yt=$c-25000;
$et=round(($yt/3.9)+6027.3528);
$at=round(($yt/.00035)+67060000);
$ct=number_format($et);
$zt=number_format($at);
$wt=number_format(($et/5));
echo "<strong>You will get ".$ct." kg(".$zt." litres) of hydrogen.<br>Enough to fill a 5 kg hydrogen car ".$wt." times.<br>At 5 kg per fill, it will cost <u>$".((round(($c/($et/5))*100))/100)."</u> per fill (in Canadian Dollars).</strong>";
}
if ($c>100000)
{$yt=$c-100000;
$et=round(($yt/3.78)+25166.4);
$at=round(($yt/.00034)+280000000);
$ct=number_format($et);
$zt=number_format($at);
$wt=number_format(($et/5));
echo "<strong>You will get ".$ct." kg(".$zt." litres) of hydrogen.<br>Enough to fill a 5 kg hydrogen car ".$wt." times.<br>At 5 kg per fill, it will cost <u>$".((round(($c/($et/5))*100))/100)."</u> per fill (in Canadian Dollars).</strong>";
}
if ($e=='m')
{$h=($d*1.60934);
$j=' mi';}
else
{$h=$d;
$j=' km';}
$date=date('Y/m/d');
$time=date('H:i:s');
$num = '';
for ($i = 0; $i < 19; $i++)
   $num .= mt_rand(0, 9);
$sql="INSERT INTO `investors` (`Name`, `Email`, `Time`, `Amount`, `Distance`, `Place`, Date, `Time Made`, `Confirmation Number`) VALUES('$a','$_POST[Email]','$g','$_POST[Amount]','$h','$f','$date','$time',$num)";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mail('njaohnt2@gmail.com',"New Investor","Name: ".$a." Email: ".$b." Amount: ".$c." Distance: ".$h." km Place: ".$f." Time: ".$g." months",'From: '.$b);
echo "<br>Your investment information has been submitted. An email will be sent to you. <br>1. Open the email, and click on the link.<br>2. When enough people want to invest in your region, another email will be sent out to you, confirming that you still want to invest. The email will tell you when the construction will be completed, and where it will be built. You will have to invest 10% of your investment at that time. <br>3. About one month later, you will get another email, where you when you will invest the rest of your investment.<br>4. After construction of the hydrogen station in your region is completed, you will be able to fill your hydrogen vehicles at the station.";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($b,"Investment at BuyHydrogen.tk","If you did not sign up for a hydrogen investment at BuyHydrogen.tk, then delete this email, otherwise, confirm this information, and click the link if it is correct, or fill out the form again <a href='buyhydrogen.tk/investmentform.php'>by clicking here</a> if it is incorrect.<br>Your name: ".$xoh."<br>Your email: ".$b."<br>Amount you will invest: $".$c." (CAD)<br>Maximum distance you will be from the hydrogen station: ".$d.$j."<br>You live at: ".$foh."<br>Your investment will be available in: ".$g." months<br>To confirm this information, <a href='buyhydrogen.jzdb.heliohost.org/confirminfo.php?email=".$b."'>click here.</a>",$headers.'From: BuyHydrogen.tk');
mysql_close($con);
}
  }
  ?></body></html>