<?php
if ($_GET['randomId'] != "A4V2GIzka_dJyT3wZNIUH1VY3sLLgEEpR2Jze4E2i01SjZVcnTEt5p1jBfcwRUna") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
