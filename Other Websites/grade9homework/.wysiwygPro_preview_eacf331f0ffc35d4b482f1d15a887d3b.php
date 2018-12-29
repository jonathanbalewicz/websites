<?php
if ($_GET['randomId'] != "_Kdf5vmTSPhlPE8WQHG9XnrkK_G2f1CA9XF5s111BWoGNzWbiBGgAkoS9O8vEVc6") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
