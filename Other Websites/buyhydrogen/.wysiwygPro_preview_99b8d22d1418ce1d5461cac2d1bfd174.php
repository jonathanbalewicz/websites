<?php
if ($_GET['randomId'] != "JsWzqxGHfbFIVNfJpbcfJjpQxlpxQGqoOa1WSFXbJTLrzxrQFXMdwPgkS1Qr50oP") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
