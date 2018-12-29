<?php
if ($_GET['randomId'] != "nWuo1GasWUnZi1ZzlwErCG10ByLVXfivSQRiARYwuIHA0F3FTtSAjppTcm2U9tDW") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
