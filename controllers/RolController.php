<?php

class RolController
{

    static public function showAllRols()
    {
        $table = "roles";
        $response = RolModel::showAllRols($table);
        return $response;
    }



}

?>
