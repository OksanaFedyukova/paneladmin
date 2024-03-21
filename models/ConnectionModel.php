<?php

class ConnectionModel {
    static public function connect() {
        $host = getenv('DB_HOST');
        $dbname = getenv('DB_DATABASE');
        $username = getenv('DB_USERNAME');
        $password = getenv('DB_PASSWORD') !== false ? getenv('DB_PASSWORD') : null;

        try {
            $link = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $link->exec("set names utf8mb4");
            return $link;
        } catch (PDOException $error) {
            echo "Connection failed: " . $error->getMessage();
            return null;
        }
    }
}

?>
