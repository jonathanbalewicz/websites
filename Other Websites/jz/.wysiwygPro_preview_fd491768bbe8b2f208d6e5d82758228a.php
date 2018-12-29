<?php
if ($_GET['randomId'] != "WJ6MeZ1kgiytWAjpnKaw6SdZkbDKoiYg8m0Ijow1d7e_tRvcLnYiHOjV1xpPaQEG") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
