<?php 

    include_once('inc/header.php');
    include_once('../script/niveaux.script.php');
    $id = $_GET['id'];
    if(isset($_POST['submit'])){
        $label = $_POST['label'];
        if(editNiveau($id,$label)){
            header('location: niveaux.php');
        }
    }
    $editedNiveau = mysqli_fetch_assoc(getNiveau($id));
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
                            <h1 class="page-header well">Gestion des Niveaux</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading well">
                                    Modifier Niveau
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input type="text" name="label" value="<?= $editedNiveau['label'] ?>" placeholder="entrer libelle de la categorie ..." required class="form-control" />
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