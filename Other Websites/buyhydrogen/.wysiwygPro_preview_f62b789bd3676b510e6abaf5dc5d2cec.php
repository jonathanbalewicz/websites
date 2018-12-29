<?php
if ($_GET['randomId'] != "fEEecKqM86qQ0eu4pG1SoofzruNMDeoFCsKTn1PL7HbqhIEHjwivC6bDxr5inbAl") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
