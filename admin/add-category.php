<?php 

    include_once('inc/header.php');
    include_once('../script/categorie.script.php');
    if(isset($_POST['submit'])){
        $label = $_POST['label'];
        if(addCategory($label)){
            header('location: categories.php');
        }
    }
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
                            <h1 class="page-header well">Gestion des catégories</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading well">
                                    Nouvelle Catégorie
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input type="text" name="label" placeholder="entrer libelle de la categorie ..." required class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-sm btn-primary" name="submit">enregistrer</button>
                                        </div>
                                    </form>
                                    
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