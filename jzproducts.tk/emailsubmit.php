<?php
require_once('recaptchalib.php');
$secret = "6LcGVPkSAAAAANqHL5mv6ixSrcmEGqo2JEB6eWDF";
$response = null;
$reCaptcha = new ReCaptcha($secret);

if ($_POST["g-recaptcha-response"]) {
    $resp = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
    
$servername = "localhost";
$username = "njaohnt_c";
$password = "----------";
$dbname = "njaohnt_coupons";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$e = $_POST['e'];
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$ce=mysqli_query($conn, "SELECT * FROM `coupons` ORDER BY CU");
$coder=mysqli_query($conn, "SELECT Code FROM `coupons` ORDER BY CU LIMIT 1");
while ($roww=mysqli_fetch_assoc($coder))
$co=$roww['Code'];
$usedr=mysqli_query($conn, "SELECT * FROM `coupons` WHERE Code='".$co."'");
if (!$usedr) {
        echo 'MySQL Error: ' . mysqli_error($conn);
        exit;
    }
while ($roww=mysqli_fetch_assoc($usedr))
{$used=$roww['Used'];
$max=$roww['CU'];}
while($used>=$max && $z = mysqli_fetch_assoc($ce))
{$co=$z['Code'];
$used=$z['Used'];
$max=$z['CU'];}
$rowww=mysqli_query($conn, "SELECT * FROM Emails WHERE Email='".$e."' AND CodeTwo='".$_GET['c']."'");
$ro=mysqli_fetch_assoc($rowww);
$ra=$ro['A_I'];
if ($used>=$max)
echo "Sorry, there are no coupons left.";
if (!$ra || $ra==null || $ra=="" || $ra<>true)
{$usedr=mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `coupons` WHERE Code='".$co."'"));
mysqli_query($conn, "UPDATE coupons SET Used=Used+1 WHERE Code='".$co."'");
mysqli_query($conn, "INSERT INTO Emails (Email, Code, CodeTwo) VALUES ('".$e."', '".$co."', '".$_GET['c']."')");
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Jz Products <support@jzproducts.tk>' . "\r\n";
mail($e,"Jz Products Coupon","<html><body><b>This is your Jz Product coupon for ".$usedr['Type']."</b><br><br><b>".$co."</b><br><br><b>Please remember to leave a review.</b><br>Thanks!<br>support@jzproducts.tk</body></html>",$headers);
echo "The coupon code has been sent to your email.";
}
else
echo " Sorry, you have already used this coupon.";
}
else
echo "You must verify that you aren't a robot.";
mysqli_close($conn);
?>




