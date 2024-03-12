<?php

require "ConnectionModel.php";

class UserModel
{
    static public function showAllUsers($table)
    {
        $stmt = ConnectionModel::connect()->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    static public function showUsers($table, $item, $value)
    {
        $stmt = ConnectionModel::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
        $stmt->bindParam(":" . $item, $value, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }




    static public function showUserById($table, $item, $value)
    {
        $stmt = ConnectionModel::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
        $stmt->bindParam(":" . $item, $value, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }




}

?>
