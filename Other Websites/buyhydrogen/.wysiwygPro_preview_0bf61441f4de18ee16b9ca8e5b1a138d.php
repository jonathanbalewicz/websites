<?php
if ($_GET['randomId'] != "VQ2M02aTN_XG_TXvkuPrXSOFCYsN4pPxn4dtYDK11jTr9u9tDhzu60TBdUsskESh") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
