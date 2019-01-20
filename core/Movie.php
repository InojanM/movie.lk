<?php
/**
 * Created by PhpStorm.
 * User: Inojan
 * Date: 1/19/2019
 * Time: 4:35 PM
 */

include 'Database.php';

class Movie
{

    public $id, $movie_name, $language, $release_date, $img_url;


    public static function select_top_movies()
    {

        $d = date('Y-m-d');
        $pdo = Database::db();
        $sql = "SELECT movie_name FROM movie WHERE release_date <= NOW()";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Movie::class);
        return $result;
    }

    public static function select_current_movies()
    {

        $d = date('Y-m-d');
        $pdo = Database::db();
        $sql = "SELECT * FROM movie WHERE release_date <= NOW()";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Movie::class);
        return $result;
    }

    public static function select_upcoming_movies()
    {

        $d = date('Y-m-d');
        $pdo = Database::db();
        $sql = "SELECT * FROM movie WHERE release_date > NOW()";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Movie::class);
        return $result;
    }


}