<?php 

    include_once('inc/header.php');
    include_once('../script/categorie.script.php');
    $categories = getCategories();
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
                            <h1 class="well text-center">Gestion des catégories</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading text-center">
                                    Liste des categories
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <a href="add-category.php" class="btn btn-success" style="margin-bottom: 15px"> + Nouvelle Catégorie</a>
                                        <?php 
                                            if( (isset($_GET['delete']) && ($_GET['delete'] === "success")) ){   
                                        ?>
                                        <div class="alert alert-info">
                                            la suppression se faite avec success !
                                        </div>
                                        <?php 
                                            }
                                        ?>
                                        <table id="my-data" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>ID#</th>
                                                    <th>Catégorie</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach($categories as $cat){
                                                ?>
                                                <tr>
                                                    <td>#<?= $cat['id'] ?></td>
                                                    <td><?= $cat['label'] ?></td>
                                                    <td class="text-center">
                                                        <a href="delCategory.php?id=<?= $cat['id'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                                        <a href="editCategory.php?id=<?= $cat['id'] ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil-square-o"></i></a>
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