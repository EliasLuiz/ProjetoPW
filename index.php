<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Apresentação</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/apresentacao.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body background="images/familia.jpg">
        <div class="row">
            <div class="container col-md-3 col-md-offset-1" >
                <div>
                    <form class="form-signin" role="form" action="Login.php" method="post">
                        <h2 class="form-signin-heading" style="color: #0088cc;">Conta do Usuário</h2>
                        <label for="inputEmail" class="sr-only">Usuário</label>
                        <?php
                            if(isset($_COOKIE["login"])){
                                echo '<input type="login"  id="login" name="login" class="form-control" value="' . $_COOKIE["login"] . '"  required>';
                            }
                            else{
                                echo '<input type="login"  id="login" name="login" class="form-control" placeholder="Usuário" required>';
                        }
                        ?>
                        <label for="inputPassword" class="sr-only">Senha</label>
                        <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>
                        <!--
                        <input type="login"  id="login" name="login" class="form-control" placeholder="Usuário"  required>
                        -->
                        <div class="checkbox">
                            <label>
                                <input name="lembrar" type="checkbox" value="TRUE"> Lembrar Usu&aacute;rio
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                        
                    </form>
                    <div class="form-signin" role="form">
                    <a href="Cadastro.html"><button class="btn btn-lg btn-primary btn-block">Cadastre-se</button></a>
                    </div>
                </div>
            </div> <!-- /container -->
        </div>


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    </body>
</html>
