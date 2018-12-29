<?php
$con=mysql_connect("localhost","njaohnt_jz","8JMBMW");
mysql_select_db("njaohnt_prg",$con);
$sql="INSERT INTO users (name,email,ps,facts) VALUES (".$_POST['name'].", ".$_POST['email'].", ".$_POST['ps'].", ".$_POST['facts'].")";
echo "<html><head><title>Registering...Please wait</title></head><body>";
mysql_query($sql);
$a=mysql_query("SELECT A_I FROM users WHERE name='".$_POST['name']."' AND email='".$_POST['email']."'");
$row=mysql_fetch_row($a);
mail("cct.jjdapps@gmail.com","New Registration","Name:".$_POST['name']."\nEmail:".$_POST['email']."\nProgramming Specialty(ies):".$_POST['ps']."\nInfo:".$_POST['facts']."\n \nTo approve of this account, go to http://www.tset.jzdb.heliohost.org/approve.php?a=".$row[0]."&b=g\nTo disapprove of the account, go to http://www.tset.jzdb.heliohost.org/approve.php?a=".$row[0]."&b=t");
mail("njaohnt2@gmail.com","New Registration","Name:".$_POST['name']."\nEmail:".$_POST['email']."\nProgramming Specialty(ies):".$_POST['ps']."\nInfo:".$_POST['facts']."\n \nTo approve of this account, go to http://www.tset.jzdb.heliohost.org/approve.php?a=".$row[0]."&b=g\nTo disapprove of the account, go to http://www.tset.jzdb.heliohost.org/approve.php?a=".$row[0]."&b=t");
mysql_close($con);
echo "Thank you for registering. Your account has been made and is awaiting approval. You will get an email when you are approved of.</body></html>";
?>