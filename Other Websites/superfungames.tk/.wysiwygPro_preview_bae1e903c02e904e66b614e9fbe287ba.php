<?php
if ($_GET['randomId'] != "59WHawClZFlUfCZamM8KlnAIqF09xikjWOY9Pcy5iV2QyNCb3q600GiFuR9XvilR") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
