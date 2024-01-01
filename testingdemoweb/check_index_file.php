<?php
error_log("Script execution started");
$filePath = __DIR__ . '/service.php';
echo  $filePath;
if (file_exists($filePath)) {
    echo "service.php file exists.";
} else {
    echo "service file not exist ";
    exit(1);
}
?>