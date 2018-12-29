<?php
if ($_GET['randomId'] != "pt_kFKIpEnG80cJnAhr7Rgr5fd5Jd4q0oXaNkG2YoFBg1AyU2Amy8mZL0jYUItKU") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
