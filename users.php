<?php

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

function readCSV($csvFile){
    $file_handle = fopen($csvFile, 'r');
    while (!feof($file_handle) ) {
        $line_of_text[] = fgetcsv($file_handle, 1024);
    }
    fclose($file_handle);
    return $line_of_text;
}
?>