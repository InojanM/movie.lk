<?php

require_once 'core/Router.php';
require_once 'core/AppHelper.php';

spl_autoload_register(function ($className) {

    $file = sprintf('controllers/%s.php', $className);
    if (file_exists($file)) {
        include $file;
    }
});

$url = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : "/";

include 'views/_header.inc.php';


Router::add('/', PageController::class, 'home');
Router::add('/home', PageController::class, 'home');
Router::add('/movies', PageController::class, 'movies');
Router::add('/theaters', PageController::class, 'theaters');


try {
    Router::route($url);
} catch (Exception $e) {
    include '404.php';
}

include 'views/_footer.inc.php';