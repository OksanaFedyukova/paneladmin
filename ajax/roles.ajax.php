<?php 
error_log("roles.ajax.php accessed");

require_once "../controlador/roles.controlador.php";
require_once "../modelo/roles.modelo.php";

class ajaxRoles{


  public $idRoles;

    public function ajaxEditarRoles(){

        $item = "roleId";
        $valor = $this->idRoles;

        $response = RolController::showRolsList($item,$valor);

    
        echo json_encode($response);


    }



 public $idRolesE;

    public function ajaxDeleteRoles(){

       
        $valor = $this->idRolesE;

        $response = RolController::deleteRol($valor);

    
        echo $response;


    }





}



//editar usuario

if(isset($_POST["idRoles"])){

$editar = new ajaxRoles();
$editar->idRoles = $_POST["idRoles"];
$editar->ajaxEditarRoles();


}





//delete rol

if(isset($_POST["idRolE"])){

$delete = new ajaxRoles();
$delete->idRolesE = $_POST["idRolE"];
$delete->ajaxdeleteRoles();


}




?>