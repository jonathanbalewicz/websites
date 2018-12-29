<?php
$servername = "localhost";
$username = "njaohnt_c";
$password = $_POST['p'];
$dbname = "njaohnt_coupons";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$m = $_POST['m'];
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$c=$_POST['c'];
if ($c===0 || $c==="0" || $c===null) {
$sql = "SELECT * FROM coupons";
$result = mysqli_query($conn, $sql);
$rt=mysqli_query($conn, "SELECT * FROM Emails");

echo 'Enter SQL for coupons<br><form action="csql.php" method="post"><textarea name="sql">UPDATE Emails SET Review=1 WHERE Email=</textarea><br>PW: <input name="pw" type="password"><br><input type="submit" value="Submit"></form>';
echo "<table border='3'><thead><th>A_I</th><th>Code</th><th>Used</th><th>CU<br>Max Usages</th><th>Type</th></thead><tbody>";
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    
        echo "<tr><td>" . $row['A_I']. "</td><td>" . $row['Code']. "</td><td>". $row['Used'] ."</td><td>". $row['CU'] ."</td><td>". $row['Type'] ."</td></tr>";
    }
    echo "</tbody></table><br>";
} else {
    echo "0 results";
}
if (mysqli_num_rows($rt) > 0) {
echo "<table border='3'><thead><th>A_I</th><th>Email</th><th>Code</th><th>CodeTwo<br>URL code</th><th>Review<br>1 for yes, 0 for no</th><th>DT</th></thead><tbody>";
    while($rw = mysqli_fetch_assoc($rt)) {
        echo "<tr><td>" . $rw['A_I']. "</td><td>" . $rw['Email']. "</td><td>" . $rw['Code']. "</td><td>" . $rw['CodeTwo']. "</td><td>". $rw['Review'] ."</td><td>".$rw['DT']."</td></tr>";
    }
    echo "</tbody></table><br>";
}
$gsq=mysqli_fetch_assoc(mysqli_query($conn, "SELECT c FROM code WHERE A_I=1"));
echo "Current URL:<br>http://jzproducts.tk/getcoupon.php?c=".$gsq['c']."<br>";
}
else
{$en=$_POST['en'];
mysqli_query($conn, "UPDATE code SET c='".$en."' WHERE A_I=1");
$sql="INSERT INTO coupons (Code, CU, Type) VALUES ('".$c."', '".$m."', '".$_POST['type']."')";
$r=mysqli_query($conn, $sql);
echo "Coupon Added<br>".$r;
}
mysqli_close($conn);
?>