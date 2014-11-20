<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Área Médica</title>
        <link rel="stylesheet" href="css/example.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/jquery-ui.css" />
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
                <div class="col-md-3 col-md-offset-2" style="margin-left: 220px; margin-top: 30px;"><center><h1 style="color: #0044cc; font-family: Tahoma;">Área do Médico</h1></center></div>
                <div class="col-md-2 col-md-offset-1" style="margin-top: 15px; margin-left: 180px;"><center><h4 style="color: #5bc0de">Bem-Vindo Dr. Marcos</h4></center></div>
                <div class="col-md-3 col-md-offset-1" style="margin-left: 120px;"><center><button type="button"  class="btn btn-info btn-sm">Sair</button></center></div>
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
            <div class="row" style="margin-top: 10px;">
                <div class="col-md-7 col-md-offset-2" style="margin-left: 300px;">
                    <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist" style="font-size: 17px;">
                            <li role="presentation" class="active"><a href="#notificacoes" aria-controls="home" role="tab" data-toggle="tab">Notificações</a></li>
                            <li role="presentation"><a href="#historico" aria-controls="profile" role="tab" data-toggle="tab">Histórico dos Pacientes</a></li>
                            <li role="presentation"><a href="#exames" aria-controls="messages" role="tab" data-toggle="tab">Requisição de Exames</a></li>
                            <li role="presentation"><a href="#mensagens" aria-controls="settings" role="tab" data-toggle="tab">Mensagens</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="notificacoes">
                                <div class="container-fluid" style="margin-top: 30px;">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item active">Exame de Fezes da Paciente Maria pronto para download.</a>
                                        <a href="#" class="list-group-item">Você tem uma nova Mensagem de seu Paciente.</a>
                                        <a href="#" class="list-group-item active">Exame de Urina da paciente Geralda pronto para download.</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="historico"   style="margin-top: 15px;">
                                <div class="col-md-2"><label>Pesquisar por Exame:</label></div>
                                <div class="col-md-3" style="margin-top: 2px;">
                                    <div class="input-group">
                                        <select class="form-control" id="exame" name="exame">
                                            <option>Selecione</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-md-2 offset1"><label>Pesquisar por Paciente:</label></div>
                                <div class="col-md-3" style="margin-top: 2px;">
                                    <div class="input-group">
                                        <select class="form-control" id="pacientes" name="paciente">
                                            <option>Selecione</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="exames" style="margin-top: 15px;">
                                <form>
                                    <div class="col-md-2"><label>Selecione o Paciente:</label></div>
                                    <div class="col-md-3" style="margin-top: 2px;">
                                        <div class="input-group">
                                            <select class="form-control" id="pacientes" name="paciente">
                                                <option>Selecione</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-2 offset1"><label>Selecione o Exame:</label></div>
                                    <div class="col-md-3" style="margin-top: 2px;">
                                        <div class="input-group">
                                            <select class="form-control" id="exames">
                                                <option>Selecione</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-md-offset-5" style="margin-top: 70px;"><button type="button" class="btn btn-info">Enviar</button></div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="mensagens">
                                <div role="tabpanel">

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist" style="margin-top: 20px;">
                                        <li role="presentation" class="active"><a href="#escrever" aria-controls="escrever" role="tab" data-toggle="tab">Escrever</a></li>
                                        <li role="presentation"><a href="#enviadas" aria-controls="profile" role="tab" data-toggle="tab">Enviadas</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content" style=" border-style: solid; border-width: 1px; border-color: #adadad;">
                                        <div role="tabpanel" class="tab-pane active" id="escrever">
                                            <div class="container-fluid" style="margin-top: 30px;">
                                                <div class="row">
                                                    <form>
                                                        <div class="col-md-2 col-md-offset-1" style="margin-top: 7px;"><label>Nome do Paciente:</label></div>
                                                        <div class="col-md-6"><select class="form-control" id="medicos">Médicos</select></div>
                                                        <div class="col-md-10 col-md-offset-1" style="margin-top: 20px;"><textarea class="form-control" rows="5">Digite sua Mensagem</textarea></div>
                                                        <div class="col-md-1 col-md-offset-5" style="margin-top: 20px; margin-bottom: 20px;"><button type="button" class="btn btn-info">Enviar</button></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="enviadas">...
                                        </div>
                                    </div>

                                </div>
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


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-1.8.2.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#calendario").datepicker({dateFormat: 'dd-mm-yy'});
            });
        </script>

    </body>
</html>