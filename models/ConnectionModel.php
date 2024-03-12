<?php

class ConnectionModel {
    static public function connect() {
        $host = "localhost";
        $dbname = "admin";
        $username = "root";
        $password = "";

        try {
            $link = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $link->exec("set names utf8mb4");
            return $link;
        } catch (PDOException $error) {
            echo "Connection failed: " . $error->getMessage();
            return null;
        }
    }
}
?>
