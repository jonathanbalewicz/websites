<?php
if ($_GET['randomId'] != "F_deQmeB0hmxr8PDTr4bakyb4y9b6PushGql3C9LjUN8hdomg2fYXWrbIW_faOtC") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
