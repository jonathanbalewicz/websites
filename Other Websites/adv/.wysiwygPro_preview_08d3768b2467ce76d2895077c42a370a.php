<?php
if ($_GET['randomId'] != "8oNmwngCP4g3oOPPcSE3q5h_YejoXrGvMts4yZNc8cziA_vJ7oThDhP69RXSFQSi") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
