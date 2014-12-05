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
                                <div class="row">
                                    <div class="col-xs-6 col-md-3" style="margin-top: 40px; margin-left: 35px;"  id="Inserirconvenio" >
                                        <a href="#Inserir" class="thumbnail">
                                            <img src="images/Incluir.jpg" alt="Incluir">
                                            <div class="caption">
                                                <center><h3>Inserir</h3></center>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-3 col-md-offset-1" style="margin-top: 40px;" id="Atualizarconvenio">
                                        <a href="#Atualizar" class="thumbnail">
                                            <img src="images/Atualizar.png" alt="Atualizar">
                                            <div class="caption">
                                                <center><h3>Alterar</h3></center>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-3 col-md-offset-1" style="margin-top: 40px;" id="Excluirconvenio">
                                        <a style="cursor: pointer;" class="thumbnail">
                                            <img src="images/Excluir.jpg" alt="Excluir">
                                            <div class="caption">
                                                <center><h3>Excluir</h3></center>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div id="Inserir">
                                    <form class="form-horizontal" role="form">
                                        <div class="col-md-8 col-md-offset-2" style="margin-top: 20px;">
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
                                <div id="Atualizar" class="row" style="margin-top: 25px;">
                                    <div role="tabpanel" class="tab-pane active" id="notificacoes">
                                        <div class="container-fluid" style="margin-top: 20px;">
                                            <div>
                                                <a href="#" data-toggle="modal" data-target="#myModal10">
                                                    <div class="row list-group-item active">
                                                        <div class="col-md-6">
                                                            Nome: UNIMED
                                                        </div>
                                                        <div class="col-md-6">
                                                            Responsável: Elias Luiz da Silva Júnior
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form role="form" method="post" action="contact.php" >
                                                                <div class="modal-body">
                                                                    <div class="form-group col-md-10">
                                                                        <label for="nome">Nome:</label>
                                                                        <input type="text" class="form-control" id="convenio" name="convenio">
                                                                    </div>
                                                                    <div class="form-group col-md-10">
                                                                        <label for="senha">Responsável:</label>
                                                                        <input type="text" class="form-control" id="responsavel" name="responsavel">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer" style="margin-top:160px;">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                                    <button type="button" class="btn btn-primary">Salvar</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="clinicas">
                                <div class="row">
                                    <div class="col-xs-6 col-md-3" style="margin-top: 40px; margin-left: 35px;"  id="Inserirclinica" >
                                        <a href="#Inserir2" class="thumbnail">
                                            <img src="images/Incluir.jpg" alt="Incluir">
                                            <div class="caption">
                                                <center><h3>Inserir</h3></center>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-3 col-md-offset-1" style="margin-top: 40px;" id="Atualizarclinica">
                                        <a href="#Atualizar2" class="thumbnail">
                                            <img src="images/Atualizar.png" alt="Atualizar">
                                            <div class="caption">
                                                <center><h3>Alterar</h3></center>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-3 col-md-offset-1" style="margin-top: 40px;" id="Excluirclinica">
                                        <a style="cursor: pointer;" class="thumbnail">
                                            <img src="images/Excluir.jpg" alt="Excluir">
                                            <div class="caption">
                                                <center><h3>Excluir</h3></center>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div id="Inserir2" style="margin-top: 25px;">
                                    <form class="form-horizontal" role="form" id="hospitais" name="hospitais" method="post" action="cadastroHospital.php">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group">
                                                <label for="inputHospital" class="col-sm-2 control-label">Nome:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="nomehosp" name="nomehosp" placeholder="Nome do Hospital ou Clínica" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-md-offset-2" style="margin-top:10px;">
                                            <div class="form-group">
                                                <label for="inputTelefone" class="col-sm-2 control-label">Telefone:</label>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" id="ddd" name="ddd" placeholder="DDD" required>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>
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
                                <div id="Atualizar2" class="row" style="margin-top: 25px;">
                                    <div role="tabpanel" class="tab-pane active" id="notificacoes">
                                        <div class="container-fluid" style="margin-top: 20px;">
                                            <div>
                                                <a href="#" data-toggle="modal" data-target="#myModal110">
                                                    <div class="row list-group-item active">
                                                        <div class="col-md-12">
                                                            Nome: Hospital Márcio Cunha
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="modal fade" id="myModal110" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form role="form" method="post" action="contact.php" >
                                                                <div class="modal-body">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="nome">Nome:</label>
                                                                        <input type="text" class="form-control" id="nomehosp" name="nomehosp">
                                                                    </div>
                                                                        <div class="form-group col-md-2">
                                                                            <label for="DDDtel">DDD:</label>
                                                                            <input type="text" class="form-control" id="DDD" name="ddd">
                                                                        </div>
                                                                        <div class="form-group col-md-5">
                                                                            <label for="telefone">Telefone:</label>
                                                                            <input type="text" class="form-control" id="telefone" name="telefone">
                                                                        </div>
                                                                </div>
                                                                <div class="modal-footer" style="margin-top:160px;">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                                    <button type="button" class="btn btn-primary">Salvar</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="exames" style="margin-top: 40px;">
                                <form class="form-horizontal" role="form" id="exames" name="exames" method="post" action="cadastroTipoExame.php">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="inputExame" class="col-sm-2 control-label">Nome:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="nomeexame" name="nomeexame" placeholder="Nome do Exame" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2" style="margin-top:10px;">
                                        <div class="form-group">
                                            <label for="inputRequisitos" class="col-sm-2 control-label">Requisitos:</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="requisitos" name="requisitos" placeholder="Requisitos do Exame" rows="3" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2" style="margin-top:10px;">
                                        <div class="form-group">
                                            <label for="inputInformacoes" class="col-sm-2 control-label">Informações:</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="informacoes" name="informacoes" placeholder="Informações do Exame" rows="3" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2" style="margin-top:10px; margin-left: 170px;">
                                        <div class="form-group">
                                            <label for="inputPreco" class="col-sm-2 control-label" style="margin-right:10px;">Preço:</label>
                                            <div class="input-group col-sm-3">
                                                <span class="input-group-addon">R$</span>
                                                <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2" style="margin-top:10px; margin-left: 180px;">
                                        <div class="form-group">
                                            <label class="checkbox-inline col-md-offset-2">
                                                <input type="checkbox" id="coletadomicilio" name="coletadomicilio" value="option1"> Exame pode ser realizado em domicílio
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-5 col-sm-5" style="margin-top: 30px; margin-left: 480px;">
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="funcionarios" style="margin-top: 5px;">
                                <form class="form-horizontal" role="form" id="funcionario" name="funcionario" method="post" action="cadastroFuncionario.php">
                                    <div class="col-md-7 col-md-offset-2" style="margin-top: 25px;">
                                        <div class="form-group">
                                            <label for="inputNome" class="col-sm-2 control-label">Nome Completo:</label>
                                            <div class="col-sm-10" style="margin-top: 9px;">
                                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSexo" class="col-sm-2 control-label">Sexo:</label>
                                            <div class="col-sm-10">
                                                <label class="radio-inline">
                                                    <input type="radio" name="sexo" id="inlineRadio1" value="M" checked> Masculino
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="sexo" id="inlineRadio2" value="F"> Feminino
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top: 20px;">
                                            <label for="inputTelefone" class="col-sm-2 control-label">Telefone:</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="ddd" name="ddd" placeholder="DDD" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top:24px;">
                                            <label for="inputCPF" class="col-sm-2 control-label">CPF:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="CPF" name="CPF" placeholder="CPF" required>
                                            </div>
                                            <label for="inputRG" class="col-sm-2 control-label">RG:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="RG" name="RG" placeholder="RG" required>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top:23px;">
                                            <label for="inputEmail" class="col-sm-2 control-label">Email:</label>
                                            <div class="col-sm-7">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top:23px;">
                                            <label for="inputLogin" class="col-sm-2 control-label">Login:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="login" name="login" placeholder="Login" required>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top:24px;">
                                            <label for="inputSenha1" class="col-sm-2 control-label">Senha:</label>
                                            <div class="col-sm-3">
                                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top:13px;">
                                            <label for="inputSenha2" class="col-sm-2 control-label">Confirmar Senha:</label>
                                            <div class="col-sm-3" style="margin-top: 11px;">
                                                <input type="password" class="form-control" id="senha2" name="senha2" placeholder="Senha" required>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top: 24px;">
                                            <label for="inputCargo" class="col-sm-2 control-label">Cargo:</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRegistro" class="col-sm-2 control-label">Registro Funcional:</label>
                                            <div class="col-sm-7" style="margin-top: 10px;">
                                                <input type="text" class="form-control" id="registro" name="registro" placeholder="Registro Funcional" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-5 col-sm-5" style="margin-top: 30px;">
                                                <button type="submit" class="btn btn-primary">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
    <script type="text/javascript">
        $(document).ready(function () {
            $('#Inserir').hide('fast');
            $('#Atualizar').hide('fast');
            $('#Atualizar2').hide('fast');
            $('#Inserir2').hide('fast');
            $('#Atualizar2').hide('fast');
            $('#Inserirconvenio').click(function () {
                $('#Inserir').show('fast');
                $('#Atualizar').hide('fast');
            });
            $('#Inserirclinica').click(function () {
                $('#Inserir2').show('fast');
                $('#Atualizar2').hide('fast');
            });
            $('#Atualizarconvenio').click(function () {
                $('#Atualizar').show('fast');
                $('#Inserir').hide('fast');
            });
            $('#Atualizarclinica').click(function () {
                $('#Atualizar2').show('fast');
                $('#Inserir2').hide('fast');
            });
            $('#Excluirconvenio').click(function () {
                $('#Atualizar').hide('fast');
                $('#Inserir').hide('fast');
            });
            $('#Excluirclinica').click(function () {
                $('#Atualizar2').hide('fast');
                $('#Inserir2').hide('fast');
            });
        });
    </script>
</body>
</html>
