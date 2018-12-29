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
<title>Invest in Hydrogen</title><meta name="description" content="" /><meta name=viewport content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<script type="text/javascript">
var quote="'";
function calc(m)
{if (m==1)
{var n=" ";
var sp="checked";}
else
{var n=",";
var co="checked";}
document.getElementById('b').innerHTML="<input onclick="+quote+"calc(0)"+quote+" type="+quote+"radio"+quote+" name="+quote+"comma"+quote+" "+co+">Use commas<br><input onclick="+quote+"calc(1)"+quote+" type="+quote+"radio"+quote+" name="+quote+"comma"+quote+" "+sp+">Use spaces";
var x=document.getElementById('x').value;
if (x<500&&x>49.99)
{var y=Math.round(x/4.9);
var a=Math.round(x/.00044);
var c=y.toString().replace(/\B(?=(\d{3})+(?!\d))/g, n);
var z=a.toString().replace(/\B(?=(\d{3})+(?!\d))/g, n);
document.getElementById('h').innerHTML="<strong>You will get "+c+" kg("+z+" litres) of hydrogen.<br>Enough to fill a 5 kg hydrogen car "+y/5+" times.<br>At 5 kg per fill, it will cost <u>$"+(Math.round((x/(a/55629.72852692479))*100))/100+"</u> per fill (in Canadian Dollars).</strong>";
}
if (x>499.99&&x<2500.01)
{var y=Math.round(x/4.45);
var a=Math.round(x/.0004);
var c=y.toString().replace(/\B(?=(\d{3})+(?!\d))/g, n);
var z=a.toString().replace(/\B(?=(\d{3})+(?!\d))/g, n);
document.getElementById('h').innerHTML="<strong>You will get "+c+" kg("+z+" litres) of hydrogen.<br>Enough to fill a 5 kg hydrogen car "+y/5+" times.<br>At 5 kg per fill, it will cost <u>$"+(Math.round((x/(a/55629.72852692479))*100))/100+"</u> per fill (in Canadian Dollars).</strong>";
}
if (x>2500&&x<25000.01)
{var y=x-2500;
var e=Math.round((y/4.12)+561.797752809);
var a=Math.round((y/.00037)+6250000);
var c=e.toString().replace(/\B(?=(\d{3})+(?!\d))/g, n);
var z=a.toString().replace(/\B(?=(\d{3})+(?!\d))/g, n);
var w=(e/5).toString().replace(/\B(?=(\d{3})+(?!\d))/g, n);
document.getElementById('h').innerHTML="<strong>You will get "+c+" kg("+z+" litres) of hydrogen.<br>That is enough to fill a 5 kg hydrogen car "+w+" times.<br>At 5 kg per fill, it will cost <u>$"+(Math.round((x/(a/55629.72852692479))*100))/100+"</u> per fill (in Canadian Dollars).</strong>";
}
if (x>25000&&x<100000.01)
{var y=x-25000;
var e=Math.round((y/3.9)+6027.3528);
var a=Math.round((y/.00035)+67060000);
var c=e.toString().replace(/\B(?=(\d{3})+(?!\d))/g, n);
var z=a.toString().replace(/\B(?=(\d{3})+(?!\d))/g, n);
var w=(e/5).toString().replace(/\B(?=(\d{3})+(?!\d))/g, n);
document.getElementById('h').innerHTML="<strong>You will get "+c+" kg("+z+" litres) of hydrogen.<br>Enough to fill a 5 kg hydrogen car "+w+" times.<br>At 5 kg per fill, it will cost <u>$"+(Math.round((x/(a/55629.72852692479))*100))/100+"</u> per fill (in Canadian Dollars).</strong>";
}
if (x>100000)
{var y=x-100000;
var e=Math.round((y/3.78)+25166.4);
var a=Math.round((y/.00034)+280000000);
var c=e.toString().replace(/\B(?=(\d{3})+(?!\d))/g, n);
var z=a.toString().replace(/\B(?=(\d{3})+(?!\d))/g, n);
var w=(e/5).toString().replace(/\B(?=(\d{3})+(?!\d))/g, n);
document.getElementById('h').innerHTML="<strong>You will get "+c+" kg("+z+" litres) of hydrogen.<br>Enough to fill a 5 kg hydrogen car "+w+" times.<br>At 5 kg per fill, it will cost <u>$"+(Math.round((x/(a/55629.72852692479))*100))/100+"</u> per fill (in Canadian Dollars).</strong>";
}}

</script>
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
<h2 class="title">Investing Form</h2>
<h3 class="sansserif">This is not a final form. You will be able to cancel until the hydrogen station in your region is planned.</h3><br>After you fill out this form
<ol>
<li>An email will be sent to you.&nbsp;</li>
<li>Open the email, and click on the link.</li>
<li>When enough people want to invest in your region, another email will be sent out to you, confirming that you still want to invest. The email will tell you when the construction will be completed, and where it will be built. You will have to invest 10% of your investment at that time.&nbsp;</li>
<li>About one month later, you will get another email, when you will invest the rest of your investment.</li>
<li>After construction of the hydrogen station in your region is completed, you will be able to fill your hydrogen vehicles at the station.</li></ol>
<form method="post" action="investmentsubmit.php">Name (last name is optional):<br><input width="15px" name="Name" type="text" maxlength="50" /><br />
Email:<input name="Email" type="email" maxlength="50" /><br />How many months until you will be able to pay?<br><input value="0" max="120" min="0" name="time"><br>
Amount you are willing to invest in Canadian Dollars($50 minimum):<br />$<input name="Amount" min="50" max="4294967295" id="x" onchange="calc(1)" type="number" /><br>Do not use commas, spaces, dollars signs, or anything but the number.<br>
<div id="b"></div>
<div id="h"></div><br>How far are you willing to drive to a hydrogen station?<br><input type="number" min="0" max="300" name="distance"><br>
<input type="radio" name="mk" value="k">Use kilometres<br><input type="radio" name="mk" value="m">Use miles
<br>Where do you live? Give a postal code(or part of a postal code), zip code, city, or town, and include your country, and province/state. If you live in a large city, include the region you would like to stay within(you may also put in your address if you want to be specific):<br><input type="text" name="place" maxlength="200"><br>
<br /><?php
          require_once('recaptchalib.php');
          $publickey = "6LcGVPkSAAAAAFb6PpcGRR_AREl7SbdUfX_C921T";
          echo recaptcha_get_html($publickey);
        ?><br>
Do you agree to and understand the&nbsp;<a href="terms.htm">Terms and Conditions?</a><input name="Agree" type="checkbox" required><br />
You must agree to and understand the <a href="terms.htm">Terms and Conditions</a> and the <a href="privacypolicy.htm">Privacy Policy</a> before pressing &quot;Submit&quot;.<br />
<input type="submit" value="Submit" /></form>
<div class="entry">
<p class="links"></p></div></div></div></div></div>
<div id="sidebar">
<ul>
<li>
<h2>Don't Have the money to invest?</h2>
<p>If you want to buy hydrogen in the future, you can get a lower price by promising us that you will buy in your region. <a href="infofp.htm">Click here.</a></p></li></ul></div></div><!-- end #sidebar -->
<div style="clear: both">&nbsp;</div><!-- end #page --></a>
<div id="footer">
<p>&copy; 2014 buyh2.tk| Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FCT</a>. | <a href="websiteterms.htm">Terms of use</a> | <a href="privacypolicy.htm">Privacy Policy</a> | <a href="contactus.php">Contact Us</a></p></div><!-- end #footer --></div>
</body>
</html>