<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Jz Products</title>
	<meta content="" name="keywords" />
	<meta content="" name="description" />
	<link href="http://fonts.googleapis.com/css?family=Arvo:400,700" rel="stylesheet" type="text/css" />
	<link href="default.css" media="all" rel="stylesheet" type="text/css" /><!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]--><script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div id="wrapper">
<div id="wrapper-bgtop">
<div id="header-wrapper">
<div id="header">
<div id="logo">
<h1><a href="#">Jz Products</a></h1>
</div>

<div id="menu">
<ul>
	<li class="active"><a href="index.htm">Homepage</a></li>
	<li><a href="products.htm">Products</a></li>
	<li><a href="contact.php">Contact</a></li>
</ul>
</div>
</div>
</div>

<div class="container" id="page">
<div id="content">
<div>
<h2>Get a Coupon</h2>

<p><?php
$servername = "localhost";
$username = "njaohnt_c";
$password = "----------";
$dbname = "njaohnt_coupons";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$c=$_GET['c'];
$gs=mysqli_query($conn, "SELECT c FROM code WHERE A_I=1");
while ($row=mysqli_fetch_assoc($gs))
{$usedr=mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `coupons` WHERE Code='".$co."'"));
if ($row['c']==$c)
{//here
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
$max=$roww['CU'];
$roww=$z['Type'];}
while($used>=$max && $z = mysqli_fetch_assoc($ce))
{$co=$z['Code'];
$used=$z['Used'];
$max=$z['CU'];
$type=$z['Type'];}
if ($used>=$max)
echo "Sorry, there are no coupons left.";
else
echo '<h3 style="color: black">Fill out this form to recieve your coupon code for '.$type.'</h3><br><form action="emailsubmit.php?c='.$c.'" method="post">Email: <br><input type="email" maxlength="50" name="e" required><br><input type="checkbox" required> I agree to leave a review on the Amazon website, and recieve emails from Jz Products.<br><br><div class="g-recaptcha" data-sitekey="6LcGVPkSAAAAAFb6PpcGRR_AREl7SbdUfX_C921T"></div><br><input type="submit" value="Submit"></form>';}
else
echo 'This coupon has expired.';}
mysqli_close($conn);
?></p>
</div>
</div>
</div>
</div>
</div>

<div id="bg1">
<div id="bg2"></div>
</div>

<div id="footer"><p>Design by <a href="http://www.thewebhub.com/">Web Hub</a>. Photos by <a href="http://www.piktyurs.com/">Piktyurs.</a></p>
<p>Copyright (c) Jz Products All rights reserved.</p>
</div>
</body>
</html>