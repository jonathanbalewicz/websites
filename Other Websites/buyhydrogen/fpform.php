<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name : Forthright
Description: A two-column, fixed-width design with dark color scheme.
Version : 1.0
Released : 20130409

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buy Hydrogen</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript">
function calc()
{q=document.getElementById('x').value;
if (q<100)
document.getElementById('b').innerHTML="<strong>You will have to pay $"+(Math.round((q*4.95)/10))+" per year<br>That is enough for "+(Math.round(q/5)/10)+" five kg fills per year at $24.75 per fill</strong>";
if (q<526&&q>99.99)
document.getElementById('b').innerHTML="<strong>You will have to pay $"+(Math.round((q*4.75)/10))+" per year<br>That is enough for "+(Math.round(q/5)/10)+" five kg fills per year at $23.75 per fill</strong>";
if (q<5000.01&&q>525.99)
{
var s=q-525.99;
var v=(s*4.50)+2499.99;
var n=(Math.round((v/(q/5))*100))/100;
document.getElementById('b').innerHTML="<strong>You will have to pay $"+(Math.round(v/10))+" per year<br>That is enough for "+(Math.round(q/5)/10)+" five kg fills per year at $"+n+" per fill</strong>";
}
if (q>5000)
document.getElementById('b').innerHTML="<strong>Please contact us to buy more than 5 000 kg by <a href='contactus.htm'>clicking here.</a></strong>";
}
</script>
<meta name="description" content="" /><meta name=viewport content="width=device-width, initial-scale=1">
</head>
<body>
<div id="header-wrapper">
<div id="header">
<div id="logo">
<h1 style="background-color: #000000; border-radius: 40px">buyh2.tk</h1>
<div><a href="status.php"><font face="wp_bogus_font">
<h4 style="background-color: #000000; border-radius: 40px" align="center">View/Edit Investment Status</h4></font></a></div></div></div></div>
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
<div id="page-bgtop">
<div id="page-bgbtm">
<div id="content">
<div class="post">
<h2 class="title">Future Buyer Form</h2>
<h3 class="sansserif">This is not a final form. You will be able to cancel until the hydrogen station in your region is planned.</h3><br>After you fill out this form:
<ol>
<li>An email will be sent to you.</li>
<li>Open the email, and click on the link.</li>
<li>When a hydrogen station is planned in your region, another email will be sent out to you, confirming that you still want to buy hydrogen, and it will have suggestions about which car to buy. The email will tell you when the construction will be completed, and where it will be built.</li>
<li>After construction of the hydrogen station in your region is completed, you will be able to fill your hydrogen vehicles at the station. You will have to pay for the hydrogen whether you use it or not, after you have accepted the email that confirms you want to buy hydrogen.</li></ol>
<form method="post" action="fpsubmit.php">Name (last name is optional):<br><input width="15px" name="Name" type="text" maxlength="50" /><br />
Email:<input name="Email" type="email" maxlength="50" /><br />How many months until you will be able to pay?<br><input value="0" max="120" min="0" name="time"><br>
Amount you are going to buy for <strong>ten years</strong> in kg(5 kg will go 250-300km)<br /><input name="Amount" min="1" max="4294967295" id="x" onchange="calc()" type="number" />kg<br>Do not use commas, spaces, dollars signs, or anything but the number.<br>
<div id="b"></div><br>How far are you willing to drive to a hydrogen station?<br><input type="number" min="0" max="300" name="distance"><br>
<input type="radio" name="mk" value="k">Use kilometres<br><input type="radio" name="mk" value="m">Use miles
<br>Where do you live? Give a postal code(or part of a postal code), zip code, city, or town, and include your country, and province/state. If you live in a large city, include the region you would like to stay within(you may also put in your address if you want to be specific):<br><input type="text" name="place" maxlength="200"><br>
<br /><?php
          require_once('recaptchalib.php');
          $publickey = "6LcGVPkSAAAAAFb6PpcGRR_AREl7SbdUfX_C921T";
          echo recaptcha_get_html($publickey);
        ?><br>
Do you agree to and understand the&nbsp;<a href="termsfp.htm">Terms and Conditions?</a><input name="Agree" type="checkbox" required><br />
You must agree to and understand the <a href="termsfp.htm">Terms and Conditions</a> and <a href="privacypolicy.htm">Privacy Policy</a> before pressing &quot;Submit&quot;.<br />
<input type="submit" value="Submit" /></form>
<div class="entry">
<p class="links"></p></div></div></div></div></div>
</div><!-- end #sidebar -->
<div style="clear: both">&nbsp;</div><!-- end #page --></a>
<div id="footer">
<p>&copy; 2014 BuyH2.tk| Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FCT</a>. | <a href="websiteterms.htm">Terms of use</a> | <a href="privacypolicy.htm">Privacy Policy</a> | <a href="contactus.php">Contact Us</a></p></div><!-- end #footer --></div>
</body>
</html>