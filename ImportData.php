<?php

include './users.php';

if ($_FILES["file"]["error"] > 0) {
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
} elseif ($_FILES["file"]["type"] !== "text/plain") {
    if ($_FILES["file"]["type"] !== "text/csv") {        
        foreach (readCSV($_FILES['file']['tmp_name']) as $column) {
            addUser($column[0], $column[1]);
        }
    } else {
        echo 'File must be a .txt ou .csv';
    }
} else {
    $fp = fopen($_FILES['file']['tmp_name'], 'rb');
    while (($line = fgets($fp)) !== false) {
        addUser($line, "");
    }
    header("Location: usersTable.php");
}

