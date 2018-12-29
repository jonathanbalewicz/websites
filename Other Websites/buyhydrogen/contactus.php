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
<h2 class="title">Contact Us Form</h2>
<form method="post" action="contactsubmit.php">
Email:<input name="email" type="email" maxlength="50" /><br />
Message:<br />
<textarea cols="50" maxlength="2000" rows="10" name="message"></textarea>
<br /><?php
require_once('recaptchalib.php');
$publickey = "6LcGVPkSAAAAAFb6PpcGRR_AREl7SbdUfX_C921T";
echo recaptcha_get_html($publickey);
?><br />
<br /><input type="submit" value="Submit" /></form>
<div class="entry">
<p class="links"></p></div></div></div></div></div></div><!-- end #sidebar -->
<div style="clear: both">&nbsp;</div><!-- end #page -->
<div id="footer">
<p>© 2014 buyh2.tk| Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FCT</a>. | <a href="websiteterms.htm">Terms of use</a> | <a href="privacypolicy.htm">Privacy Policy</a> | <a href="contactus.php">Contact Us</a></p></div><!-- end #footer --></div>
</body>
</html>