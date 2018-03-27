<?php
/*
Project: SplitUp
Autors: Jorge Goncalves, Grégory Preisig, Thibaut Michaud
Description: Create a group with ultiple parameters, like the number or person
per groups or the number of groups for a fixed amouth of person, etc
Begin date: 20.03.2018
*/

session_start();

function GetList() {
    if (!isset($_SESSION['users'])) {
        $_SESSION['users'] = array();
    } else {
        return $_SESSION['users'];
    }
}

function addUser($name, $sexe) {
    array_push($_SESSION['users'], array($name, $sexe));
}

function deleteUser($name) {
    $users = GetList();
    unset($users[getUser($name)]);
}

function ClearUsers() {
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
    }
    session_destroy();
}

function UpdateUser($oldName, $newName) {
    $users = GetList();
    $users[getUser($oldName)] = $newName;
}

function getUser($name) {
    $users = GetList();
    $key = array_search($name, $users);
    return $key;
}

function UserXsist($name) {
    $users = GetList();
    if (array_search($name, $users) === false) {
        return false;
    } else {
        return true;
    }
}

function UsersTable() {
    echo '<h3>Table de tous les utilisateurs</h3>
            <table class="table table-bordered table-hover table-fixed">
                <thead>
                <th class="col-xs-3">Nom</th>
                <th class="col-xs-3">Sexe</th>
                </thead>';
    if (count(GetList()) > 0) {
        foreach (GetList() as $name) {
            echo '<tr>
            <td class="col-xs-3">' . $name[0] . '</td>
            <td class="col-xs-3">' . $name[1] . '</td>
        </tr>';
        }
    }
    echo '</table>';
}

function readCSV($csvFile) {
    $file_handle = fopen($csvFile, 'r');
    while (!feof($file_handle)) {
        $line_of_text[] = fgetcsv($file_handle, 1024);
    }
    fclose($file_handle);
    return $line_of_text;
}

function generateCsv($data, $delimiter = ',', $enclosure = '"') {
    $handle = fopen('php://temp', 'r+');
    foreach ($data as $line) {
        fputcsv($handle, $line, $delimiter, $enclosure);
    }
    rewind($handle);
    $contents = "";
    while (!feof($handle)) {
        $contents .= fread($handle, 8192);
    }
    fclose($handle);
    $_SESSION['csv'] = $contents;
}

function download($filepath) {
    header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
    header('Content-type: text/csv');
    header('Content-Length: ' . filesize($filepath));
    readfile($filepath);
    exit;
}
