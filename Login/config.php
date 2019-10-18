<?php

abstract class Connection {
    private static $pdo;
    public static function getConn()
    {
        try {
            Self::$pdo = new PDO('mysql:host=127.0.0.1;dbname=phpstudies;', 'root', '9876');
            Self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            Self::$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            Self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $pdoe) {
            echo 'ERRO: ' . $pdoe->getMessage();
            exit;
        }

        return Self::$pdo;
    }
}
