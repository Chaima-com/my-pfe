<?php 

    include_once('inc/header.php');
    include_once('../script/user.script.php');
    $users = getUsers();
?>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <?php include_once('inc/navbar.php'); ?>

                <div class="navbar-default sidebar" role="navigation">
                    <?php include_once('inc/sidebar.php'); ?>
                </div>
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="text-center well">Gestion des utilisateurs</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading text-center">
                                    Liste des utilisateurs
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="my-data" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>ID#</th>
                                                    <th>Prénom</th>
                                                    <th>Nom</th>
                                                    <th>Email</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach($users as $user){
                                                ?>
                                                <tr>
                                                    <td class="text-center"><img class="img" src="<?= '../assets/avatars/'.$user['avatar'] ?>" /></td>
                                                    <td>#<?= $user['id'] ?></td>
                                                    <td><?= $user['last_name'] ?></td>
                                                    <td><?= $user['first_name'] ?></td>
                                                    <td><?= $user['email'] ?></td>
                                                    <td class="text-center">
                                                        <a href="delUser.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                                        <!--<a href="editCategory.php?id=<?= $cat['id'] ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil-square-o"></i></a>-->
                                                    </td>
                                                </tr>
                                                <?php 
                                                    }
                                                ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
 <?php 
    include_once('inc/footer.php');
?>