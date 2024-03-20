<?php

class RolModel {

   
    static public function showAllRols($table)
    {
        $stmt = ConnectionModel::connect()->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    static public function showRols($table, $item, $value)
    {
        $stmt = ConnectionModel::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
        $stmt->bindParam(":" . $item, $value, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }





 
}

?>
