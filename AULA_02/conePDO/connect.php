<?php


abstract class ConnectionPDO
{
    private static $conn;

    public static function getConn()
    {
        if (self::$conn == null) {
            self::$conn = new PDO('mysql: host=localhost; dbname=created_user;', 'root', '');
        }

        return self::$conn;
    }
}
