<?php
/**
 * Created by PhpStorm.
 * User: Inojan
 * Date: 1/13/2019
 * Time: 9:15 AM
 */

class PageController
{
    public function home(){
        include 'views/home.php';
    }

    public function movies(){
        include 'views/movies.php';
    }

    public function theaters(){
        include 'views/theaters.php';
    }

}