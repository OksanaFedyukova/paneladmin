


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
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
                                        <th>Username</th>
                                        <th>email</th>
                                        <th>rol</th>
                                        <th>foto</th>
                                        <th>actions</th>



                                    </tr>

                                </thead>

                                <tbody>

                                    <?php  ?>



                                  

                                    <tr>

                                        <td><?php echo ($key+1)  ?></td>
                                        <td><?php echo $value["username"]  ?></td>
                                        <td><?php echo $value["email"]  ?></td>
                                        <td><?php echo $roles["rol"]  ?></td>
                                        <td><img src="<?php echo $value["foto"]  ?>" width="40" height="40"></td>

                                        <td>

                                            <div class='btn-group'>

                                                <button class="btn btn-warning btn-sm ">
                                                    <i class="fas fa-pencil-alt text-white"></i>
                                                </button>

                                                <button class="btn btn-danger btn-sm ">
                                                    <i class=" fas fa-trash-alt"></i>
                                                </button>

                                            </div>

                                        </td>

                                    </tr>


                                 


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


