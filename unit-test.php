<?php
$output = shell_exec("php index.php");
 
if (trim($output) == "Customer Portal Application Running Successfully") {
    echo "Unit Test Passed";
} else {
    echo "Unit Test Failed";
    exit(1);
}
?>
