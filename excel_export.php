<?php
// Connection
define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "projekt");

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$filename = "Webinfopen.xlsx"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
$user_query = mysqli_query($link, 'select * from firmy');
// Write data to file
$flag = false;
while ($row = mysqli_fetch_assoc($user_query)) {
    if (!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
}
?>