<?php
if ($_GET['randomId'] != "MTHswrDKGIp9ajRVcIp9Y5hgYFjv3q42wBGA0E6CwZ7SinfTSCrBWpkS3VyPns4u") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
