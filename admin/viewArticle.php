<?php 

    include_once('inc/header.php');
    include_once('../script/article.script.php');
    include_once('../script/user.script.php');
    include_once('../script/categorie.script.php');
    include_once('../script/niveaux.script.php');
    include_once('../script/specialite.script.php');
    $id = $_GET['id'];
    $article = getArticle($id);
    $article = mysqli_fetch_assoc($article);
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
                            <h1 class="page-header well">Gestion des Articles</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    Informations Detaillé d'article
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                   <div class="col-md-4">
                                        <img style="height: 120px;width: 120px; margin: auto 0" src="../assets//articles/<?= $article['photo'] ?>">
                                        <hr>
                                        <a href="articles.php">retour a la liste</a>
                                   </div>
                                   <div class="col-md-8">
                                   <ul class="list-group">
                                        <li class="list-group-item">
                                            Titre: <label><?= $article['title'] ?></label>
                                        </li>
                                        <li class="list-group-item">
                                            Properiteaire: <?= mysqli_fetch_assoc(getUserById($article['owner_id']))['first_name'].' '.mysqli_fetch_assoc(getUserById($article['owner_id']))['last_name'] ?>
                                        </li>
                                        <li class="list-group-item">
                                            Description: <?= $article['description'] ?>
                                        </li>
                                        <li class="list-group-item">
                                            Publié en: <?= $article['published_at'] ?>
                                        </li>
                                        <li class="list-group-item">
                                            Nombre des pieces: <?= $article['nbr_piece']  ?>
                                        </li>
                                        <li class="list-group-item">
                                            Etat: <?= $article['status'] ?>
                                        </li>
                                        <li class="list-group-item">
                                            Etat: <?= $article['edition'] ?>
                                        </li>
                                        <li class="list-group-item">
                                            Auteur: <?= $article['author'] ?>
                                        </li>
                                        <li class="list-group-item">
                                            Categorie: <?= mysqli_fetch_assoc(getCategory($article['category_id']))['label'] ?>
                                        </li>
                                        <li class="list-group-item">
                                        Niveau: <?= mysqli_fetch_assoc(getNiveau($article['niveau_id']))['label'] ?>
                                        </li>
                                        <li class="list-group-item">
                                        Specialité: <?= mysqli_fetch_assoc(getSpecialite($article['specialite_id']))['label'] ?>
                                        </li>
                                   </ul></div>
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