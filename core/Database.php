<?php
/**
 * Created by PhpStorm.
 * User: Inojan
 * Date: 1/16/2019
 * Time: 3:59 PM
 */

class Database
{
    public $id;
    public $user;
    public $user_name;
    public $password;

    public static function db()
    {

        $host = 'localhost';
        $dbName = 'movie.lk';
        $userName = "root";
        $password = "";

        $db = "mysql:host=$host;dbname=$dbName";

        try {

            $pdo = new PDO($db, $userName, $password);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }

        return $pdo;
    }


    public static function selectAllTheatersOwner()
    {
        $pdo = self::db();
        $sql = "SELECT * FROM theater_owner";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $theatersOwner = $stmt->fetchAll(PDO::FETCH_CLASS, Database::class);
        return $theatersOwner;
    }


}