

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Roles</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                    <!-- Default box -->
                    <div class="card card-info card-outline">

                        <div class="card-header">

                            <button type="button" class="btn btn-success crear-usuarios" data-toggle="modal"
                                data-target="#modal-crear-usuarios">
                                create new
                            </button><br>

                        </div><br>
                        <!-- /.card-header -->

                        <div class="card-body">

                            <table class="table table-bordered table-striped dt-responsive tablaUsuarios" width="100%">

                                <thead>

                                    <tr>

                                        <th style="width:10px">#</th>
                                        <th>rolName</th>
                                     
                                        <th>actions</th>



                                    </tr>

                                </thead>
                                <tbody>
    <?php
    $roles = RolController::showAllRols();
    
   if (is_array($roles)){
        foreach ($roles as $key => $value) {
    ?>
            <tr>
                <td><?php echo $value["roleId"] ?></td>
                <td><?php echo $value["rolName"] ?></td>
                <td>
                    <div class='btn-group'>
                        <button class="btn btn-warning btn-sm ">
                            <i class="fas fa-pencil-alt text-white"></i>
                        </button>
                        <button class="btn btn-danger btn-sm ">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <?php
        }
     } else {
        echo "<tr><td colspan='6'>No hay usuarios disponibles.</td></tr>";
    }
    ?>
</tbody>


                            </table>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">

                        </div>
                        <!-- /.card-footer-->

                    </div>
                    <!-- /.card -->

                </div>

            </div>

        </div>

    </section>
    <!-- /.content -->
  </div>


