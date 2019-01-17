<?php

session_start();

include '../core/AppHelper.php';
include '../core/Database.php';

function check_userName_password($userName, $password)
{

    $owners = Database::selectAllTheatersOwner();
    foreach ($owners as $owner) {

        if ($owner->user_name == $userName) {
            if ($owner->password == $password) {
                $_SESSION['id'] = $owner->id;
                $_SESSION['user'] = $owner->user;
                return true;
            }
        }
    }
    return false;
}


if (!empty($_POST)) {
    if (isset($_POST['user_name']) && isset($_POST['password'])) {
        $userName = $_POST['user_name'];
        $password = $_POST['password'];

        $result = check_userName_password($userName, $password);

        if ($result != false) {

            AppHelper::redirect('/movie.lk/index.php/theaters_owner?session=on');

        } else {
            AppHelper::redirect('/movie.lk/index.php/login');
        }
    }
}



