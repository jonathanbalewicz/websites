<!DOCTYPE html><html><head>
<script>
function goBack() {
    window.history.back()
}
</script>
</head><body>

<?php
$resul=null;
if (isset($_GET['q']))
{
if ($_GET['q']=="news")
{$email = @trim(stripslashes($_GET['email'])); 
	$ss = @mail("njaohnt2@gmail.com", "World Developers sub", "sub ".$email, $headers);
$email_from = "admin@worlddevelopers.tk";
 
$servername = "fdb18.freehostingeu.com";
$username = "2600165_njaohnt";
$password = "8JMBMW8jmbmw";
$dbname = "2600165_njaohnt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (!$resu=$conn->query("SELECT confirmed FROM subscribers WHERE email='".$email."'"))
{echo $conn->error;}

while ($row = $resu->fetch_assoc()) {
$resul=$row['confirmed'];}
$sql = "INSERT INTO subscribers (email) VALUES ('".$email."')";

	if ($resul==null || $resul==0)
	{
if ($resul==null)
{
	if ($conn->query($sql) === TRUE)
    {
$res=$conn->query("SELECT A_I FROM subscribers WHERE email='".$email."'");
while ($row = $res->fetch_assoc()) {
$re=$row['A_I'];
}
echo "<img href='index.html' src='http://worlddevelopers.tk/images/logo.png'><br>Thanks for signing up for World Developers' newsletter. Go to your email to confirm your subscription.<br><br><button onclick='goBack()'>Go Back To World Developers</button>";
	$body = 'Hi,' . "<br><br>" . "Thanks for signing up for World Developers' weekly newsletter. Confirm your email by clicking <a href='worlddevelopers.tk/sendemail.php?n=".$re."&q=c&email=".$_GET['email']."'>here</a><br><img src='http://worlddevelopers.tk/images/logo.png'><br>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $success = @mail($email, "World Developers -- Confirm your email", $body, $headers.'From: <'.$email_from.'> World Developers');
	
}

}
elseif ($resul==0)
{
$res=$conn->query("SELECT A_I FROM subscribers WHERE email='".$email."'");
while ($row = $res->fetch_assoc()) {
$re=$row['A_I'];
}
echo "<img href='index.html' src='http://worlddevelopers.tk/images/logo.png'><br>Thanks for signing up for World Developers' newsletter. Go to your email to confirm your subscription.<br><br><button onclick='goBack()'>Go Back To World Developers</button>";
	$body = 'Hi,' . "<br><br>" . "Thanks for signing up for World Developers' weekly newsletter. Confirm your email by clicking <a href='worlddevelopers.tk/sendemail.php?n=".$re."&q=c&email=".$_GET['email']."'>here</a><br><img src='http://worlddevelopers.tk/images/logo.png'><br>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $success = @mail($email, "World Developers -- Confirm your email", $body, $headers.'From: <'.$email_from.'> World Developers');
	
	}}
elseif ($resul==1)
{echo "<img src='http://worlddevelopers.tk/images/logo.png'><br>You are already signed up for World Developers' newsletter. Please check your email spam for the last World Developers' newsletter. <a href='index.php'>Click here to go back to the main page.</a>";
$conn->close();}
}
elseif (isset($_GET['q']))
{
if ($_GET['q']=="c")
{$servername = "localhost";
$username = "id728908_njaohnt";
$password = "8JMBMW";
$dbname = "id728908_sub";
$email = @trim(stripslashes($_GET['email']));

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT A_I FROM subscribers WHERE email='".$email."'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
$re=$row['A_I'];}
	
if ($re==$_GET['n'])
{
$sql = "UPDATE subscribers SET confirmed=1 WHERE email='".$email."'";
$result = $conn->query($sql);
}
	echo "You have confirmed your email for World Developers' newsletter. <a href='index.php'>Click here to go to World Developers.</a><br><img src='http://worlddevelopers.tk/images/logo.png'><br>";
	$conn->close();
}}}
else
{
    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email']));  
    $message = @trim(stripslashes($_POST['message'])); 

    $email_to = 'njaohnt2@gmail.com';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body);
echo "<a href='index.php'>Thanks for contacting World Developers. Click here to go back to the main page.<br><img height='100px' src='images/logo.png'></a>";
}

?>

</body></html>