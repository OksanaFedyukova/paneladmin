

<div class="content-wrapper">
    <h1 class="m-0">Users</h1>

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
                                        <th>Username</th>
                                        <th>email</th>
                                        <th>rol</th>
                                        <th>foto</th>
                                        <th>actions</th>



                                    </tr>

                                </thead>
                                <tbody>
    <?php
    $users = UserController::showAllUsers();
    
    if (is_array($users)) {
        foreach ($users as $key => $value) {
    ?>
            <tr>
                <td><?php echo $value["userId"] ?></td>
                <td><?php echo $value["username"] ?></td>
                <td><?php echo $value["email"] ?></td>
                <td><?php echo $value["rolName"] ?></td>
                <td><img src="<?php echo $value["foto"] ?>" width="40" height="40"></td>
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


