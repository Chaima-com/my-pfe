<?php 

    include_once('inc/header.php');
    include_once('../script/article.script.php');
    include_once('../script/user.script.php');
    include_once('../script/commande.script.php');
    $cmds = getCommands();
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
                            <h2 class="well text-center">Gestion des Commandes</h2>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading text-center">
                                    Liste des Commandes
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="my-data" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Date de la commande</th>
                                                    <th>Article</th>
                                                    <th>Vendeur</th>
                                                    <th>Acheteur</th>
                                                    <th>Prix Article</th>
                                                    <th>Commission</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach($cmds as $cmd){
                                                        
                                                ?>
                                                <tr>
                                                    <td><?= $cmd['dated_at'] ?></td>
                                                    <td><?= mysqli_fetch_assoc(getArticle($cmd['article_id']))['title']; ?></td>
                                                    <td><?= mysqli_fetch_assoc(getUserById($cmd['owner_id']))['first_name'].' '.mysqli_fetch_assoc(getUserById($cmd['owner_id']))['last_name'] ?></td>
                                                    <td><?= mysqli_fetch_assoc(getUserById($cmd['buyer_id']))['first_name'].' '.mysqli_fetch_assoc(getUserById($cmd['buyer_id']))['last_name'] ?></td>
                                                    <td><?= mysqli_fetch_assoc(getArticle($cmd['article_id']))['price']; ?> TND</td>
                                                    <td><?= $cmd['commission'] ?> TND</td>
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