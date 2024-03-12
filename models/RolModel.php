<?php

class RolModel {

    static public function showAllRols($table) {
        $stmt = ConnectionModel::connect()->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll();
    }



 
}

?>
