<?php
$servername = "localhost";
$username = "njaohnt_c";
$password = $_POST['pw'];
$dbname = "njaohnt_coupons";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = $_POST['sql'];
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_query($conn, $sql);
echo $sql."<br>Has been executed";
mysqli_close($conn);
?>