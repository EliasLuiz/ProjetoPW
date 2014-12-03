<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Área do Administrador</title>
        <link rel="stylesheet" href="css/example.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <script src="js/jquery.min.js"></script>


        <style>
        </style>
        <!-- End SlidesJS Optional-->

        <!-- SlidesJS Required: These styles are required if you'd like a responsive slideshow -->
        <style>

        </style>
        <!-- SlidesJS Required: -->

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container-fluid" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-2" style="margin-left: 70px;"><img src="images/logo.jpg" class="img-responsive" alt="Responsive image" style="height: 100px; width: 200px; margin-right: 50px;"></div>
                <div class="col-md-3 col-md-offset-2" style="margin-left: 220px; margin-top: 12px;"><center><h1 style="color: #0044cc; font-family: Tahoma;">Área do Administrador</h1></center></div>
                <div class="col-md-2 col-md-offset-1" style="margin-top: 15px; margin-left: 180px;"><center><h4 style="color: #5bc0de">Bem-Vindo Administrador</h4></center></div>
                <div class="col-md-3 col-md-offset-1" style="margin-left: 120px;"><center><button type="button"  class="btn btn-primary btn-sm">Sair</button></center></div>
            </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top: 20px; margin-left: 160px; width: 1000px;">
                <!-- Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/03.jpg">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/04.jpg">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/05.jpg">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                </div>

                <!-- Controls 
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>-->
            </div>
            <div class="row">
                <div class="col-md-9"  style="margin-top: 10px; margin-left: 165px;">
                    <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist" style="font-size: 17px;">
                            <li role="presentation" class="active"><a href="#convenios" aria-controls="home" role="tab" data-toggle="tab">&nbsp;Cadastro de Convênios&nbsp;&nbsp;</a></li>
                            <li role="presentation"><a href="#clinicas" aria-controls="profile" role="tab" data-toggle="tab">&nbsp;&nbsp;Cadastro de Clínicas e Hospitais&nbsp;&nbsp;</a></li>
                            <li role="presentation"><a href="#funcionarios" aria-controls="messages" role="tab" data-toggle="tab">&nbsp;&nbsp;Cadastro de Funcionários&nbsp;&nbsp;</a></li>
                            <li role="presentation"><a href="#exames" aria-controls="settings" role="tab" data-toggle="tab">&nbsp;&nbsp;Cadastro de Exames&nbsp;</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="convenios">
                                <form class="form-horizontal" role="form">
                                    <div class="col-md-8 col-md-offset-2" style="margin-top: 30px;">
                                        <div class="form-group">
                                            <label for="inputConvenio" class="col-sm-2 control-label">Nome do Convênio:</label>
                                            <div class="col-sm-9" style="margin-top:10px;">
                                                <input type="text" class="form-control" id="nomeconvenio" name="nomeconvenio" placeholder="Nome do Convênio" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-1" style="margin-left: 110px;">
                                        <div class="form-group">
                                            <label for="inputResponsavel" class="col-sm-3 control-label">Responsável pelo Convênio:</label>
                                            <div class="col-sm-9" style="margin-top:10px;">
                                                <input type="text" class="form-control" id="responsavel" name="responsavel" placeholder="Responsável pelo Convênio" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-5 col-sm-5" style="margin-top: 30px; margin-left: 450px;">
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane active" id="clinicas">
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div style="height:30px; text-align:center; padding-top:15px; background: linear-gradient(top , rgb(234, 234, 234) , rgb(203, 203, 203) 100%);
             background: -o-linear-gradient(top , rgb(234, 234, 234) , rgb(203, 203, 203) 100%);
             background: -ms-linear-gradient(top , rgb(234, 234, 234) , rgb(203, 203, 203) 100%);
             background: -moz-linear-gradient(top , rgb(234, 234, 234) , rgb(203, 203, 203) 100%);
             background: -webkit-linear-gradient(top , rgb(234, 234, 234) , rgb(203, 203, 203) 100%); margin-top: 80px;
             "><small><p>Copyright <b>BIOCESP Laboratório</b> - &copy; 2014 - Todos os direitos reservados</p></small></div>

    </div>


    <!-- Include all compiled plugins (below), or include individual files as needed -->


    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/jquery.slides.min.js"></script>
    <script>
        $(function () {
            $('#slides').slidesjs({
                width: 940,
                height: 200,
                play: {
                    active: true,
                    auto: true,
                    interval: 4000,
                    swap: true
                }
            });
        });
    </script>


    <script src="js/jquery-1.8.2.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#calendario").datepicker({dateFormat: 'dd-mm-yy'});
        });
    </script>
    <script>
        $(function () {
            $("#calendario2").datepicker({dateFormat: 'dd-mm-yy'});
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#divinformacoes').hide('fast');
            $('#divconvenio2').hide('fast');
            $('#divconvenio').click(function () {
                $('#divinformacoes').show('fast');
            });
            $('#simconvenio').click(function () {
                $('#divconvenio2').show('fast');
            });
            $('#naoconvenio').click(function () {
                $('#divconvenio2').hide('fast');
            });
        });
    </script>


</body>
</html>
