<?php
/**
 * Created by PhpStorm.
 * User: Inojan
 * Date: 1/13/2019
 * Time: 9:15 AM
 */

class PageController
{
    public static function home(){
        include 'views/home.php';
    }

    public static function movies(){
        include 'views/movies.php';
    }

    public static function theaters(){
        include 'views/theaters.php';
    }

}