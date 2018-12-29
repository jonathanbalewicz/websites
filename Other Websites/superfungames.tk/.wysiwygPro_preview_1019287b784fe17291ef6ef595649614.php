<?php
if ($_GET['randomId'] != "32GBJFjBGiPCw6CWBLEmPbqWkbe05BFtnqiphki1myph3rvwV4HboqtjBLAzVAtF") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
