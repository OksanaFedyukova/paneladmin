<?php

class RolModel
{


    static public function showAllRols($table)
    {
        $stmt = ConnectionModel::connect()->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    static public function showRolsList($table, $item, $value)
    {
        $stmt = ConnectionModel::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
        $stmt->bindParam(":" . $item, $value, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    static public function showRolById($table, $item, $value)
    {
        $stmt = ConnectionModel::connect()->prepare("SELECT * FROM $table WHERE $item=:IDE ");
        $stmt->bindParam(":IDE", $value, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }
    static public function createRol($table, $rolName)
    {
        $stmt = ConnectionModel::connect()->prepare("INSERT INTO $table(rolName) VALUES (:NOMBRE_ROL)");
        $stmt->bindParam(":NOMBRE_ROL", $rolName, PDO::PARAM_STR);

        if ($stmt->execute()) {
            return 'OK';
        } else {
            echo 'error';
        }
        $stmt->close();
        $stmt = null;

    }

    static public function deleteRol($table, $value)
    {
        $stmt = ConnectionModel::connect()->prepare("DELETE FROM $table WHERE roleId =:idE");

        $stmt->bindParam(":idE", $valor, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "OK";

        } else {

            echo "\nPDO::errorInfo():\n";
            print_r(ConnectionModel::connect()->errorInfo());

        }

        $stmt->close();

        $stmt = null;



    }
    static public function editRol($table, $rolName, $rolId) {

        $stmt = ConnectionModel::connect()->prepare("UPDATE $table SET rolName=:rolName WHERE rolId =:id");


        $stmt->bindParam(":id", $idrol, PDO::PARAM_STR);
	    $stmt->bindParam(":rolName", $rolName, PDO::PARAM_STR);


        if($stmt -> execute()){

			return "ok";

		}else{

			echo "error";

		}

		$stmt-> close();

		$stmt = null;
    }

}
?>
