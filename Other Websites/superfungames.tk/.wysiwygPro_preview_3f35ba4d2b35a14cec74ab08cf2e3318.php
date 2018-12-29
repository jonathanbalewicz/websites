<?php
if ($_GET['randomId'] != "OoRUBCQeAbqffa8nqw8Gmo1cRe680ixaTTX5iPGFboaSZE9gWlNnbRWLKvhms0B7") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
