<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Área do Cliente</title>
        <link rel="stylesheet" href="css/example.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript">
            function displayVals() {
                var value = $("#exames1").val();
                $.ajax({
                    url: 'FuncoesAJAX.php',
                    data: {acao: 'dadosTipoExame', cod: value},
                    type: 'POST',
                    success: function (output) {
                        $('#exibe').html(output);
                    }
                });
            }
//            $('#exames1').change(displayVals());
        </script>


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
                <div class="col-md-3 col-md-offset-2" style="margin-left: 220px; margin-top: 30px;"><center><h1 style="color: #0044cc; font-family: Tahoma;">Área do Cliente</h1></center></div>
                <div class="col-md-2 col-md-offset-1" style="margin-top: 15px; margin-left: 180px;"><center><h4 style="color: #5bc0de">Bem-Vinda Ana Souza</h4></center></div>
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
                <div class="col-md-6 col-md-offset-3"  style="margin-top: 10px; margin-left: 350px;">
                    <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist" style="font-size: 17px;">
                            <!--<li role="presentation" class="active"><a href="#notificacoes" aria-controls="home" role="tab" data-toggle="tab">&nbsp;&nbsp;&nbsp;Notificações&nbsp;&nbsp;</a></li>-->
                            <li role="presentation"><a href="#historico" aria-controls="profile" role="tab" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Histórico Clínico&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li role="presentation"><a href="#exames" aria-controls="messages" role="tab" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Exames&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <!--<li role="presentation"><a href="#mensagens" aria-controls="settings" role="tab" data-toggle="tab">&nbsp;&nbsp;&nbsp;Mensagens&nbsp;&nbsp;</a></li>-->
                            <li role="presentation"><a href="#configuracoes" aria-controls="settings" role="tab" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configurações&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!--<div role="tabpanel" class="tab-pane active" id="notificacoes">
                                <div class="container-fluid" style="margin-top: 30px;">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item active">Exame de Fezes pronto para download.</a>
                                        <a href="#" class="list-group-item">Você tem uma nova Mensagem de seu Médico.</a>
                                        <a href="#" class="list-group-item active">Exame de Urina pronto para download.</a>
                                    </div>
                                </div>
                            </div>-->
                            <div role="tabpanel" class="tab-pane active" id="historico" style="margin-top: 20px;">
                                <div class="col-md-2" style="margin-top: 0px;"><label>Pesquisar por Exame:</label></div>
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
                                <div class="col-md-2 offset1"><label>Pesquisar por Médico:</label></div>
                                <div class="col-md-3" style="margin-top: 2px;">
                                    <div class="input-group">
                                        <select class="form-control" id="medico" name="medico">
                                            <option>Selecione</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div id="ExibeExameNome"></div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="exames">
                                <div class="row">
                                    <div class="col-xs-6 col-md-3" style="margin-top: 40px; margin-left: 35px;"  id="Inserirexame" >
                                        <a href="#Inserir" class="thumbnail">
                                            <img src="images/Incluir.jpg" alt="Incluir">
                                            <div class="caption">
                                                <center><h3>Marcar Exame</h3></center>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-3 col-md-offset-1" style="margin-top: 40px;" id="Atualizarexame">
                                        <a href="#Atualizar" class="thumbnail">
                                            <img src="images/Atualizar.png" alt="Atualizar">
                                            <div class="caption">
                                                <center><h3>Alterar Exame</h3></center>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-3 col-md-offset-1" style="margin-top: 40px;" id="Excluirexame">
                                        <a style="cursor: pointer;" class="thumbnail">
                                            <img src="images/Excluir.jpg" alt="Excluir">
                                            <div class="caption">
                                                <center><h3>Excluir Exame</h3></center>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div id="Inserir" style="margin-top: 20px; margin-left: 50px;">
                                    <form id="marcacaoexame" name="marcacaoexame" method="post" action="marcacaoExameUsuario.php">
                                        <div class="row">
                                            <div class="col-md-2 col-md-offset-2"><label>Selecione o Exame:</label></div>
                                            <div class="col-md-3" style="margin-top: 2px;">
                                                <select class="form-control" name="exames1" id="exames1"  onclick="displayVals();">
                                                    <option>Selecione</option>
                                                    <option>Teste do Pezinho</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select></div>
                                        </div>
                                        <div class="row" style="margin-top: 7px;">
                                            <div class="col-md-2 col-md-offset-2" style="margin-top: 10px;"><label>Coleta a Domicílio: </label></div>
                                            <div class="radio">
                                                <div class="col-md-1" style="margin-top: 10px;">
                                                    <label>
                                                        <input type="radio" name="coleta" id="sim" value="sim">
                                                        Sim
                                                    </label>
                                                </div>
                                                <div class="col-md-1" style="margin-left: 10px; margin-top: 10px;">
                                                    <label>
                                                        <input type="radio" name="coleta" id="nao" value="nao">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="divcoleta">
                                            <div class="row" style="margin-top: 5px;">
                                                <div class="col-md-2 col-md-offset-2" style="margin-top: 7px;"><label>Escolha a Data:</label></div>
                                                <div class="col-md-2" style="margin-top:10px;"><input class="form-control" type="text" id="data" name="data" value="Selecione"></div>
                                            </div>
                                            <div class="row" style="margin-top: 5px;" id="divhorarios">
                                                <div class="col-md-2 col-md-offset-2" style="margin-top: 7px;">
                                                    <label>Horários Disponíveis:</label></div>
                                                <div class="col-md-2" style="margin-top: 10px;"><select class="form-control" name="horario">
                                                        <option>Selecione</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 10px;">
                                            <div class="col-md-2 col-md-offset-2" style="margin-top: 10px;"><label>Pagamento: </label></div>
                                            <div class="radio" id="divconvenio">
                                                <div class="col-md-1">
                                                    <label>
                                                        <input type="radio" name="pagamento" id="id_radio1" value="particular">
                                                        Particular
                                                    </label>
                                                </div>
                                                <div class="col-md-1" style="margin-left: 25px;">
                                                    <label>
                                                        <input type="radio" name="pagamento" id="id_radio2" value="convenio">
                                                        Convênio
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"  id="divconvenio2" style="margin-top: 15px;">
                                            <div class="col-md-2 col-md-offset-2"><label>Selecione o Convênio: </label></div>
                                            <div class="col-md-3" style="margin-top: 2px;">
                                                <label>
                                                    <select class="form-control" name="convenio" id="convenio">
                                                        <option>Selecione</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 24px;">
                                            <div class="col-md-2 col-md-offset-2"><label>Médico Solicitante:</label></div>
                                            <div class="col-md-3" style="margin-top: 2px;" id="medicox"><select class="form-control" name="medico" id="medico">
                                                    <option>Nenhum</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select></div>
                                        </div>
                                        <div id="exibe" class="row" style="margin-top: 24px;"></div>
                                        <div class="row" style="margin-top: 0px;">
                                            <div class="radio">
                                                <div class="col-md-3 col-md-offset-4" style="margin-top: 0px;">
                                                    <label>
                                                        <input type="checkbox" name="outromedico" id="outromedico" value="1" onClick='javascript:travar()'>
                                                        Outro Médico
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 18px;">
                                            <div class="col-md-3 col-md-offset-4" id="medicos"><select class="form-control" name="mediconovo" id="mediconovo">
                                                    <option>Outros Médicos</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select></div>
                                        </div>
                                        <div style="margin-top: 15px; margin-left: 0px;" id="divinformacoes">
                                            <div class="row">
                                                <div class="col-md-2 col-md-offset-2"><label>Informações: </label></div>
                                                <div class="col-md-8"><p>Exame feito com Enfermeiro(a), com agulhas esterilizadas.</p></div>
                                            </div>
                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-md-2 col-md-offset-2"><label>Requisitos: </label></div>
                                                <div class="col-md-8"><p>.Jejum de 12 horas.<br>.Não comer docer por 24 horas.</p></div>
                                            </div>
                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-md-2 col-md-offset-2"><label>Preço: </label></div>
                                                <div class="col-md-8" style="margin-top: 2px;"><p>.R$ 53,60</p></div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-md-offset-5" style="margin-top: 40px;"><button type="submit" class="btn btn-primary">Marcar Exame</button></div>
                                    </form>
                                </div>
                                <div id="Atualizar" class="row" style="margin-top: 25px;">

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="mensagens">
                                <!--<div class="container-fluid" style="margin-top: 20px;">
                                    <div>
                                        <a href="#" data-toggle="modal" data-target="#myModal10">
                                            <div class="row list-group-item active">
                                                <div class="col-md-7">
                                                    Assunto: Pare de comer doces!
                                                </div>
                                                <div class="col-md-3">
                                                    Doutora: Ana Souza
                                                </div>
                                                <div class="col-md-2">
                                                    Data: 28/02/2015
                                                </div>
                                            </div>
                                        </a>
                                        <div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Pare de comer doces!</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Você está comendo muitos doces. Pare com isso agora. Sua glicose está alta!!
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                            <div role="tabpanel" class="tab-pane" id="configuracoes">
                                <h4 style="margin-top: 30px;">Dados Cadastrais</h4>
                                <div class="container-fluid" style="margin-top: 10px;">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item active" data-toggle="modal" data-target="#myModal">Alterar Endereço</a>
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Endereço</h4>
                                                    </div>
                                                    <form role="form" method="post" action="contact.php">
                                                        <div class="modal-body">
                                                            <div class="form-group col-md-10">
                                                                <label for="nomerua">Rua</label>
                                                                <input type="text" class="form-control" id="rua" name="rua">
                                                            </div>
                                                            <div class="form-group col-md-2" >
                                                                <label for="numero">Número</label>
                                                                <input type="text" class="form-control" id="numero" name="numero">
                                                            </div>
                                                            <div class="form-group col-md-6" >
                                                                <label for="complemento">Complemento</label>
                                                                <input type="text" class="form-control" id="complemento" name="complemento">
                                                            </div>
                                                            <div class="form-group col-md-6" >
                                                                <label for=cidade" >Cidade</label>
                                                                <select class="form-control" id="cidade" name="cidade">Escolha</select>
                                                            </div>
                                                            <div class="form-group col-md-6" >
                                                                <label for=bairro" >Bairro</label>
                                                                <select class="form-control" id="bairro" name="bairro">Bairros</select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer" style="margin-top:220px;">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                            <button type="button" class="btn btn-primary">Salvar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="list-group-item" data-toggle="modal" data-target="#myModal2">Alterar Email</a>
                                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Email</h4>
                                                    </div>
                                                    <form role="form" method="post" action="contact.php">
                                                        <div class="modal-body">
                                                            <div class="form-group col-md-10">
                                                                <label for="nomeemail">Email</label>
                                                                <input type="text" class="form-control" id="email" name="email">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer" style="margin-top:70px;">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                            <button type="button" class="btn btn-primary">Salvar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="list-group-item active" data-toggle="modal" data-target="#myModal3">Alterar Telefone</a>
                                        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Telefone</h4>
                                                    </div>
                                                    <form role="form" method="post" action="contact.php">
                                                        <div class="modal-body">
                                                            <div class="form-group col-md-2">
                                                                <label for="DDDtel">DDD</label>
                                                                <input type="text" class="form-control" id="DDD" name="ddd">
                                                            </div>
                                                            <div class="form-group col-md-5">
                                                                <label for="telefone">Telefone</label>
                                                                <input type="text" class="form-control" id="telefone" name="telefone">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer" style="margin-top:70px;">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                            <button type="button" class="btn btn-primary">Salvar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 style="margin-top: 30px;">Dados Médicos</h4>
                                <div class="container-fluid" style="margin-top: 10px;">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item active" data-toggle="modal" data-target="#myModal6">Adicionar Medicamentos de Uso</a>
                                        <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Medicamentos</h4>
                                                    </div>
                                                    <form role="form"  method="post" action="contact.php" >
                                                        <div class="modal-body">
                                                            <div class="form-group col-md-11">
                                                                <label for="medicamentos">Medicamentos:</label>
                                                                <textarea class="form-control" id="medicamentos" name="nomemedicamentos" rows="5"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer" style="margin-top:150px;">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                            <button type="button" class="btn btn-primary">Salvar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="list-group-item" data-toggle="modal" data-target="#myModal7">Adicionar Médico</a>
                                        <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Adicionar Médico</h4>
                                                    </div>
                                                    <form role="form"  method="post" action="contact.php" >
                                                        <div class="modal-body">
                                                            <div class="form-group col-md-6" >
                                                                <label for=medico" >Selecione:</label>
                                                                <select class="form-control" id="adicionarmedico" name="adicionarmedico">Escolha</select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer" style="margin-top:85px;">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                            <button type="button" class="btn btn-primary">Salvar</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="list-group-item active" data-toggle="modal" data-target="#myModal8">Remover Médico</a>
                                        <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Remover Médicos</h4>
                                                    </div>

                                                    <form role="form"  method="post" action="contact.php" >
                                                        <div class="modal-body">
                                                            <div class="form-group col-md-6" >
                                                                <label for=medico" >Selecione:</label>
                                                                <select class="form-control" id="removermedico" name="removermedico">Escolha</select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer" style="margin-top:85px;">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                            <button type="button" class="btn btn-primary">Salvar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 style="margin-top: 30px;">Conta</h4>
                                <div class="container-fluid" style="margin-top: 10px;">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item active" data-toggle="modal" data-target="#myModal4">Alterar Senha</a>
                                        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Senha</h4>
                                                    </div>

                                                    <form role="form" method="post" action="contact.php" >
                                                        <div class="modal-body">
                                                            <div class="form-group col-md-10">
                                                                <label for="senhaantiga">Digite sua Senha:</label>
                                                                <input type="text" class="form-control" id="senhaantiga" name="senhaantiga">
                                                            </div>
                                                            <div class="form-group col-md-10">
                                                                <label for="senha">Digite sua nova Senha:</label>
                                                                <input type="text" class="form-control" id="senha" name="senha">
                                                            </div>
                                                            <div class="form-group col-md-10">
                                                                <label for="senha2">Confirme sua Senha:</label>
                                                                <input type="text" class="form-control" id="senha2" name="senha2">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer" style="margin-top:230px;">
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
            $("#data").datepicker({dateFormat: 'dd-mm-yy'});
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#outromedico').change(function () {
                if (this.checked)
                    $('#medicos').fadeIn('slow');
                else
                    $('#medicos').fadeOut('slow');

            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#divinformacoes').hide('fast');
            $('#divconvenio2').hide('fast');
            $('#divcoleta').hide('fast');
            $('#medicos').hide('fast');
            $('#Inserir').hide('fast');
            $('#Atualizar').hide('fast');
            $('#Inserirexame').click(function () {
                $('#Inserir').show('fast');
                $('#Atualizar').hide('fast');
            });
            $('#Atualizarexame').click(function () {
                $('#Atualizar').show('fast');
                $('#Inserir').hide('fast');
            });
            $('#Excluirexame').click(function () {
                $('#Atualizar').hide('fast');
                $('#Inserir').hide('fast');
            });
            $('#id_radio2').click(function () {
                $('#divconvenio2').show('fast');
            });
            $('#id_radio1').click(function () {
                $('#divconvenio2').hide('fast');
            });
            $('#sim').click(function () {
                $('#divcoleta').show('fast');
            });
            $('#nao').click(function () {
                $('#divcoleta').hide('fast');
            });
        });
    </script>
    <script  type="text/javascript">
        function bloqueio(){
            if (document.getElementById("outromedico").style.display == "none"){
                document.getElementById("outromedico").style.display = "block";
            }
            else{
                document.getElementById("outromedico").style.display = "none";
            }
        }
    </script>
    <script>
        function travar() {
            if (marcacaoexame.medico.disabled == false) {
                marcacaoexame.medico.disabled = true
            }
            else {
                marcacaoexame.medico.disabled = false
            }
        }
        function uncheckRadio(rbutton) {
            rbutton.checked = (rbutton.checked) ? false : true;
        }
    </script>

    <script>
    </script>


</body>
</html>
