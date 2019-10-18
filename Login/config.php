<?php

class DBConnection {
    function connection($driver, $host, $port, $dbname, $user, $pass)
        {
            try {
                $this->pdo = new PDO($driver . ':host=' . $host . '; port=' . $port . '; dbname=' . $dbname, $user, $pass);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $pdoe) {
                echo 'ERRO: ' . $pdoe->getMessage();
                exit;
            }
        }
}
