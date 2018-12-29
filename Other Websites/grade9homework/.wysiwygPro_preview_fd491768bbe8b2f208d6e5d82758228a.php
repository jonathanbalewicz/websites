<?php
if ($_GET['randomId'] != "PpxUGT_G9UzrE6QTTnfMdtdK0W1EFpQ6wf1LcoM1Sx37KUckDuYHNtyDko6ZPTGB") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
