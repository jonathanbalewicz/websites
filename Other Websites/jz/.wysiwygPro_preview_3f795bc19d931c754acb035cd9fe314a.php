<?php
if ($_GET['randomId'] != "J4HyFWr9r4kFKudaftljv3ytuh_A0rI_DdQl_3IFu4c9d7Xu5BlVNAORkarMA09C") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
