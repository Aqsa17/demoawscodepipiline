<?php
error_log("Script execution started");
$filePath = __DIR__ . '/check_index_file.php';
echo  $filePath;
if (file_exists($filePath)) {
    echo "index.php file exists.";
} else {
    exit(1);
}
?>