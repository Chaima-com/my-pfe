<?php 

 include_once('inc/header.php');
 ?>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Espace Administrateur</h3>
                        </div>
                        <?php 
                            if(isset($_GET['auth']) && $_GET['auth'] == "false"){
                                ?>
                                <div class="alert alert-danger">
                                    Verifier votre email ou mot de passe !
                                </div>
                                <?php 
                            }else if(isset($_GET['auth']) && $_GET['auth'] == "unauth"){
                                ?>
                                <div class="alert alert-danger">
                                    Vous n'avez pas l'access !
                                </div>
                                <?php 
                            }
                        ?>
                        <div class="panel-body">
                            <form role="form" action="auth.php" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Entrer votre email !" name="email" type="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Entrer votre mot de passe ..." name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <!--<label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>-->
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button name="login" type="submit" class="btn btn-sm btn-success btn-block">Login</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include_once('inc/footer.php'); ?>