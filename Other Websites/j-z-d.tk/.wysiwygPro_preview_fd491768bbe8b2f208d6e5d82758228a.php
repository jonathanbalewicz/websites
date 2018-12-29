<?php
if ($_GET['randomId'] != "7Ko8674iuNTbekvB_vAe_kIAUEXzhqLk0aj47tjHh13ae3l9pOZchCRitkoAt1NY") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
