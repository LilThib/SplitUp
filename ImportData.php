<?php

include './users.php';

if ($_FILES["file"]["error"] > 0) {
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
} elseif ($_FILES["file"]["type"] !== "text/csv") {
    //Open the file.
    $fp = fopen($_FILES['file']['tmp_name'], "rb");
    //Loop through the CSV rows.
    while (($row = fgetcsv($fp, 0, ",")) !== FALSE) {
        addUser($row[0], $row[1]);
    }
    header("Location: usersTable.php");
} elseif ($_FILES["file"]["type"] !== "text/plain") {
    $fp = fopen($_FILES['file']['tmp_name'], 'r');
    while (($line = fgets($fp)) !== false) {
        addUser($line, "test");
    }
    header("Location: usersTable.php");
} else {
    echo 'File must be a .txt ou .csv';
}
