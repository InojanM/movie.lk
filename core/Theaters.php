<?php
/**
 * Created by PhpStorm.
 * User: Inojan
 * Date: 1/20/2019
 * Time: 7:34 AM
 */



class Theaters
{
    public $id, $theater_name, $place, $contact_number;


    public static function selectAll()
    {
        $pdo = Database::db();
        $sql = "SELECT * FROM theaters";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, Theaters::class);
        return $result;
    }


}