<?php
$filePath = __DIR__ . '/test2.php';
echo  $filePath;
if (file_exists($filePath)) {
    echo "index.php file exists.";
} else {
    exit(1);
}
?>