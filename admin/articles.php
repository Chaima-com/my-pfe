<?php 

    include_once('inc/header.php');
    include_once('../script/article.script.php');
    include_once('../script/user.script.php');
    $posts = getArticles();
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
                            <h1 class="well text-center">Gestion des Articles</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading text-center">
                                    Liste des articles
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
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
                                                    <th></th>
                                                    <th>Proprietaire</th>
                                                    <th>Titre</th>
                                                    <th>Date de publication</th>
                                                    <th>Prix</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach($posts as $post){
                                                       
                                                ?>
                                                <tr>
                                                    <td><img style="height: 30px;" src="../assets//articles/<?=$post['photo'] ?>"></td>
                                                    <td><?= mysqli_fetch_assoc(getUserById($post['owner_id']))['first_name'].' '.mysqli_fetch_assoc(getUserById($post['owner_id']))['last_name'] ?></td>
                                                    <td><?= $post['title'] ?></td>
                                                    <td><?= $post['published_at'] ?></td>
                                                    <td><?= $post['price'] ?> TND</td>
                                                    <td class="text-center">
                                                        <a href="delArticle.php?id=<?= $post['id'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                                        <a href="viewArticle.php?id=<?= $post['id'] ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                        
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