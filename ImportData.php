<?php
/*
Project: SplitUp
Autors: Jorge Goncalves, Grégory Preisig, Thibaut Michaud
Description: Create a group with ultiple parameters, like the number or person
per groups or the number of groups for a fixed amouth of person, etc
Begin date: 20.03.2018
*/

include './users.php';

if ($_FILES["file"]["error"] > 0) {
    echo "Veuillez sélectionner un fichier valide";
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
