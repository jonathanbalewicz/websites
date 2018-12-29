<?php
if ($_GET['randomId'] != "TU24T5iqKIcsCN0tLHZ9P2IjGbU23Ab1JaJck5Rh9t8mVdBQv4XY8tc_QBOU5YEX") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
