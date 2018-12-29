<?php
if ($_GET['randomId'] != "3QowFli6BNy4uD3pVoWJ9VimBoBR4aVANWvHe774jBgG2TCr2sDLnWOLS4ItioGl") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
