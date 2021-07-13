<?php


namespace KoalaCars;


class DbConnector
{
    public static function getDb(): \PDO
    {
        $db = new \PDO('mysql:host=db;dbname=koalaCars', 'root', 'password');
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return $db;
    }
}