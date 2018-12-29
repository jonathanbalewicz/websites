<?php
if ($_GET['randomId'] != "kApVc5rXkUaanrFRfJq4jrG0flYFkcB33YCTTk72ZYhWOfIVPt5gAf63_5EeNw3O") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
