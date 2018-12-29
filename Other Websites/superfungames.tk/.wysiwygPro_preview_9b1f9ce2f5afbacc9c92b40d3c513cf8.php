<?php
if ($_GET['randomId'] != "bkDisHkRS6ReHTfGGVWbnZZe4EIWH2Nw8tKxaG9eSi89EAwK7nSpG8wYq5sjVxSd") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
