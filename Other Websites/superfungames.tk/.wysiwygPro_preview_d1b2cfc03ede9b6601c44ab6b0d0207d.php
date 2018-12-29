<?php
if ($_GET['randomId'] != "1Zgb758qx466rvHzKORlwaOyaw19DaIWgR2LKPZvJXumpy7vF6HguQA01IPiQCr7") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
