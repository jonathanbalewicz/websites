<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Forthright
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130409

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BuyH2.tk</title><meta name=viewport content="width=device-width, initial-scale=1">
<script type="text/javascript">
function ejj()
{var email=document.getElementById('email').value;
window.location="status.php?email="+email;
}</script>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="header-wrapper">
<div id="header">
<div id="logo">
<h1 style="background-color: #000000; border-radius: 40px">Buyh2.tk</h1></div></div></div>
<div id="menu-wrapper">
<div id="menu">
<ul>
<li class="current_page_item"><a href="index.htm">Homepage</a></li>
<li><a href="info.htm">Investment
Info</a></li>
<li><a href="investform.php">Investment
Form</a></li></ul></div></div><div id="menu-wrapper"><div id="menu"><ul>
<li><a href="infofp.htm">Future Buyer
Info</a></li>
<li><a href="fpform.php">Future Buyer
Form</a></li>
<li><a href="contactus.htm">Contact Us</a></li></ul></div><!-- end #menu --></div>
<div id="wrapper"><!-- end #header -->
<div id="page">
<div id="page-bgbtm">
<div id="content">
<?php
$e=$_GET[e];
$email=$_GET[email];
if (!$email)
{echo "<form>Type in your email<br><input id='email' type='text'><br><button type='button' onclick='ejj();'>Submit</button></form>";}
elseif ($email=="e")
{$con=mysqli_connect("localhost","njaohnt_bh","i8nJvMeBsMt","njaohnt_bh");
if (!$con)
  {
  die('Could not connect: '.mysqli_error());
  }
$sql="SELECT * FROM  `investors` WHERE Email='".$e."'";
$ai=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($ai)) 
{
echo "<form action='status.php?email=edit&e=".$e."' method='post'><table border='3'><tr><th colspan='9'>Investment Status</th></tr><tr><th>Your Name</th><th>Your Number</th><th>Date Information Submitted</th><th>Amount(Canadian Dollars)</th><th>Your Email</th><th>Months until your investment will be ready</th><th>Distance you are will to be from the hydrogen station (kilometres)</th><th>Where you live</th><th>Status</th><tr><td><input name='name' type='text' value='".$row['Name']."'></td><td>".$row['A_I']."</td><td>".$row['Date']."</td><td><input name='amount' style='width:110px;' type='number' value='".$row['Amount']."'></td><td><input name='email' type='text' value='".$row['Email']."'></td><td><input name='time' type='number' value='".$row['Time']."' style='width:30px'></td><td><input name='distance' style='width:36px' type='number' value='".$row['Distance']."'></td><td><input name='place' type='text' value='".$row['Place']."'></td><td>".$row['Status']."</td></tr></table><br><button type='submit'>Done</button></form></a><br>";}}
elseif ($email=="edit")
{$aoh=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['amount'];
$d=$_POST['distance'];
$foh=$_POST['place'];
$g=$_POST['time'];
  if((filter_var($c, FILTER_VALIDATE_FLOAT) === false || filter_var($c, FILTER_VALIDATE_INT)===false) && (filter_var($d, FILTER_VALIDATE_FLOAT) === false || filter_var($d, FILTER_VALIDATE_INT)===false) && (filter_var($g, FILTER_VALIDATE_FLOAT) === false || filter_var($g, FILTER_VALIDATE_INT)===false) && filter_var($b, FILTER_VALIDATE_EMAIL) === FALSE && ($e==='m' || $e==='k'))
    {
    echo "Something you entered was not correct.";
    }
else
{
$a=filter_var($aoh,FILTER_SANITIZE_ENCODED);
$f=filter_var($foh,FILTER_SANITIZE_ENCODED);
$num = '';
for ($i = 0; $i < 19; $i++)
   $num .= mt_rand(0, 9);
$con=mysqli_connect("localhost","njaohnt_bh","i8nJvMeBsMt","njaohnt_bh");
if (!$con)
  {
  die('Could not connect: '.mysqli_error());
  }
$sql="UPDATE `investors` SET `Confirmation Number`=".$num." WHERE Email='".$e."'";
$ai=mysqli_query($con,$sql);
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($e,"Investment at BuyHydrogen.tk Info Change","You have changed your information for your investment. Please confirm this information<br>Your name: ".$a."<br>Your email: ".$b."<br>Amount you will invest: $".$c." (CAD)<br>Maximum distance you will be from the hydrogen station: ".$d." km<br>You live at: ".$foh."<br>Your investment will be available in: ".$g." months<br>To confirm this information, <a href='http://buyhydrogen.jzdb.heliohost.org/confirminfo.php?email=".$b."&name=".$a."&amount=".$c."&distance=".$d."&place=".$f."&time=".$g."&num=".$num."'>click here.</a>",$headers.'From: BuyHydrogen.tk');
echo "An email has been sent to you. If you changed your email, go to your previous email account, because that is where the email will be sent. If you cannot get to that account <a href='contactus.htm'>click here to contact us</a><br>You have changed your information for your investment. Please confirm this information<br>Your name: ".$a."<br>Your email: ".$b."<br>Amount you will invest: $".$c." (CAD)<br>Maximum distance you will be from the hydrogen station: ".$d." km<br>You live at: ".$foh."<br>Your investment will be available in: ".$g." months<br>To confirm this information, <a href='confirminfo.php?email=".$b."&name=".$a."&amount=".$c."&distance=".$d."&place=".$f."&time=".$g."&num=".$num."'>click here.</a>";}}
else
{$con=mysqli_connect("localhost","njaohnt_bh","i8nJvMeBsMt","njaohnt_bh");
if (!$con)
  {
  die('Could not connect: '.mysqli_error());
  }
$sql="SELECT * FROM  `investors` WHERE Email='".$email."'";
$ai=mysqli_query($con,$sql);
if (!mysqli_fetch_array($ai))
echo "This email is not in our database. Please <a href='contactus.php'>contact us here,</a> if you have signed up as an investor.";
while($row=mysqli_fetch_array($ai)) 
{echo "<table border='3'><tr><th colspan='9'>Investment Status</th></tr><tr><th>Your Name</th><th>Your Number</th><th>Date Information Submitted</th><th>Amount(Canadian Dollars)</th><th>Your Email</th><th>Months until your investment will be ready</th><th>Distance you are will to be from the hydrogen station(kilometres)</th><th>Where you live</th><th>Status</th><tr><td>".$row['Name']."</td><td>".$row['A_I']."</td><td>".$row['Date']."</td><td>".$row['Amount']."</td><td>".$row['Email']."</td><td>".$row['Time']."</td><td>".$row['Distance']."</td><td>".$row['Place']."</td><td>".$row['Status']."</td></tr></table><br><a href='status.php?email=e&e=".$email."'><button type='button'>Edit</button></a><br>";
}}
?>

</div>
<div style="clear: both">&nbsp;</div><div style="clear: both">&nbsp;</div></div>
</div></div><!-- end #page --></div>
<div id="footer">
<p>&copy; 2014 BuyH2.tk | Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FCT</a>. | <a href="websiteterms.htm">Terms of use</a> | <a href="privacypolicy.htm">Privacy Policy</a> | <a href="contactus.php">Contact Us</a></p></div><!-- end #footer --></div>
</body>
</html>