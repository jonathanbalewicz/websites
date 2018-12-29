<?php
if ($_GET['randomId'] != "AejOYmPx7dH20tSL99ESnQx6qTY8ZuCdhhbbVrbGGFrwPew9AmHySy0m2pdyGrdk") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
