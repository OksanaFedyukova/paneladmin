<?php

class RolController
{

    static public function showAllRols()
    {
        $table = "roles";
        $response = RolModel::showAllRols($table);
        return $response;
    }

 static public function showRolsList($item, $value){
    $table = "roles";
    $response = RolModel::showRolsList($table,$item,$value);

    return $response;
 } 


 static public function createRol(){


    if(isset($_POST["rolName"])){


        $rolName=$_POST["rolName"];


        $table="roles";


        $response = RolModel::createRol($table,$rolName);



                if($response == "ok"){

                    echo'<script>

                    swal({
                            type:"success",
                              title: "SAVED!",
                              text: "The role has been updated successfully.",
                              showConfirmButton: true,
                            confirmButtonText: "Close"
                          
                    }).then(function(result){

                            if(result.value){   
                                history.back();
                              } 
                    });

                </script>';

            }else{

                echo "<div class='alert alert-danger mt-3 small'> Failed</div>";
            }




    }



    
}
 static public function showRolById($item,$value){


    $table="roles";



    $response = RolModel::showRolById($table,$item,$value);


    return $response;

}
 static public function editRol(){


        if(isset($_POST["nom_rolE"])){


              $rolNameE=$_POST["nom_rolE"];

              $roleIdE=$_POST["id_rolE"];


             $table="roles";

             $response = RolModel::editRol($table,$rolNameE,$roleIdE);


             	if($response == "OK"){

						echo'<script>

						swal({
								type:"success",
							  	title: "SAVED!",
							  	text: ""The role has been updated successfully."",
							  	showConfirmButton: true,
								confirmButtonText: "Close"
							  
						}).then(function(result){

								if(result.value){   
								    history.back();
								  } 
						});

					</script>';

				}else{

                    echo "<div class='alert alert-danger mt-3 small'> Failed</div>";
                }








        }






    }
    static public function deleteRol($value){

        $table="roles";

        $response=RolModel::deleteRol($table,$value);


        return $response;





    }


}

?>
