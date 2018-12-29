<?php
if ($_GET['randomId'] != "aTUhG8ThUYPbuQGUAu9eQp6r1nJImiKNNgSkludBNFeQdXpJEkR6JJKOeqNZMXyM") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
