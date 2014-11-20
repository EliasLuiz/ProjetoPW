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
            <div class="row">
                <div class="col-md-8 col-md-offset-2"  style="margin-top: 10px; margin-left: 230px;">
                    <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist" style="font-size: 17px;">
                            <li role="presentation" class="active"><a href="#notificacoes" aria-controls="home" role="tab" data-toggle="tab">&nbsp;&nbsp;&nbsp;Notificações&nbsp;&nbsp;</a></li>
                            <li role="presentation"><a href="#historico" aria-controls="profile" role="tab" data-toggle="tab">&nbsp;&nbsp;&nbsp;Histórico Clínico&nbsp;&nbsp;</a></li>
                            <li role="presentation"><a href="#exames" aria-controls="messages" role="tab" data-toggle="tab">&nbsp;&nbsp;&nbsp;Marcação de Exames&nbsp;&nbsp;</a></li>
                            <li role="presentation"><a href="#mensagens" aria-controls="settings" role="tab" data-toggle="tab">&nbsp;&nbsp;&nbsp;Mensagens&nbsp;&nbsp;</a></li>
                            <li role="presentation"><a href="#configuracoes" aria-controls="settings" role="tab" data-toggle="tab">&nbsp;&nbsp;Configurações&nbsp;&nbsp;&nbsp;</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="notificacoes">
                                <div class="container-fluid" style="margin-top: 30px;">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item active">Exame de Fezes pronto para download.</a>
                                        <a href="#" class="list-group-item">Você tem uma nova Mensagem de seu Médico.</a>
                                        <a href="#" class="list-group-item active">Exame de Urina pronto para download.</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="historico" style="margin-top: 20px;">
                                <div class="col-md-2" style="margin-top: 0px;"><label>Pesquisar por Exame:</label></div>
                                <div class="col-md-3" style="margin-top: 2px;">
                                    <div class="input-group">
                                        <select class="form-control" id="exame" name="exame" onclick="displayVals()">
                                            <option>Selecione</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-md-2 offset1"><label>Pesquisar por Médico Solicitante:</label></div>
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
                                <div class="container-fluid" style="margin-top: 30px;">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-2 col-md-offset-2"><label>Selecione o Exame:</label></div>
                                            <div class="col-md-2" style="margin-top: 2px;"><select class="form-control" name="exame">
                                                    <option>Selecione</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select></div>
                                        </div>
                                        <div class="row" style="margin-top: 5px;">
                                            <div class="col-md-2 col-md-offset-2" style="margin-top: 7px;"><label>Escolha a Data:</label></div>
                                            <div class="col-md-2"><input class="form-control" type="text" id="calendario2" value="Selecione"></div>
                                        </div>
                                        <div class="row" style="margin-top: 5px;" id="divhorarios">
                                            <div class="col-md-2 col-md-offset-2" style="margin-top: 7px;">
                                                <label>Horários Disponíveis:</label></div>
                                            <div class="col-md-2" style="margin-top: 10px;"><select class="form-control" name="horarios">
                                                    <option>Selecione</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select></div>
                                        </div>
                                        <div class="row" style="margin-top: 7px;">
                                            <div class="col-md-2 col-md-offset-2" style="margin-top: 10px;"><label>Coleta a Domicílio: </label></div>
                                            <div class="radio">
                                                <div class="col-md-1">
                                                    <label>
                                                        <input type="radio" name="coleta" id="sim" value="option1" checked>
                                                        Sim
                                                    </label>
                                                </div>
                                                <div class="col-md-1" style="margin-left: 10px;">
                                                    <label>
                                                        <input type="radio" name="coleta" id="nao" value="option2">
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 10px;">
                                            <div class="col-md-2 col-md-offset-2" style="margin-top: 10px;"><label>Pagamento: </label></div>
                                            <div class="radio" id="divconvenio">
                                                <div class="col-md-1">
                                                    <label>
                                                        <input type="radio" name="convenio" id="naoconvenio" value="option1">
                                                        Particular
                                                    </label>
                                                </div>
                                                <div class="col-md-1" style="margin-left: 10px;">
                                                    <label>
                                                        <input type="radio" name="convenio" id="simconvenio" value="option2">
                                                        Convênio
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"  id="divconvenio2" style="margin-top: 15px;">
                                            <div class="col-md-2 col-md-offset-2"><label>Selecione o Convênio: </label></div>
                                            <div class="col-md-2" style="margin-top: 2px;">
                                                <label>
                                                    <select class="form-control" name="convenios">
                                                        <option>Selecione</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </label>
                                            </div>
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

                                        <div class="col-md-2 col-md-offset-5" style="margin-top: 40px;"><button type="button" class="btn btn-info">Marcar Exame</button></div>
                                    </form>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="mensagens">
                                <div class="container-fluid" style="margin-top: 20px;">
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
                                </div>
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
                                                    <div class="modal-body">
                                                        <form role="form">
                                                            <div class="form-group col-md-10">
                                                                <label for="nomerua">Rua</label>
                                                                <input type="text" class="form-control" id="rua">
                                                            </div>
                                                            <div class="form-group col-md-2" >
                                                                <label for="numero">Número</label>
                                                                <input type="text" class="form-control" id="numero">
                                                            </div>
                                                            <div class="form-group col-md-6" >
                                                                <label for="complemento">Complemento</label>
                                                                <input type="text" class="form-control" id="complemento">
                                                            </div>
                                                            <div class="form-group col-md-6" >
                                                                <label for=cidade" >Cidade</label>
                                                                <select class="form-control" id="cidade">Escolha</select>
                                                            </div>
                                                            <div class="form-group col-md-6" >
                                                                <label for=bairro" >Bairro</label>
                                                                <select class="form-control" id="bairro">Bairros</select>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer" style="margin-top:220px;">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                        <button type="button" class="btn btn-primary">Salvar</button>
                                                    </div>
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
                                                    <div class="modal-body">
                                                        <form role="form">
                                                            <div class="form-group col-md-10">
                                                                <label for="nomeemail">Email</label>
                                                                <input type="text" class="form-control" id="email">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer" style="margin-top:70px;">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                        <button type="button" class="btn btn-primary">Salvar</button>
                                                    </div>
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
                                                    <div class="modal-body">
                                                        <form role="form">
                                                            <div class="form-group col-md-2">
                                                                <label for="DDDtel">DDD</label>
                                                                <input type="text" class="form-control" id="DDD">
                                                            </div>
                                                            <div class="form-group col-md-5">
                                                                <label for="telefone">Telefone</label>
                                                                <input type="text" class="form-control" id="telefone">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer" style="margin-top:70px;">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                        <button type="button" class="btn btn-primary">Salvar</button>
                                                    </div>
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
                                                    <div class="modal-body">
                                                        <form role="form">
                                                            <div class="form-group col-md-11">
                                                                <label for="medicamentos">Medicamentos:</label>
                                                                <textarea class="form-control" id="message-text" rows="5"></textarea>
                                                            </div>

                                                        </form>
                                                    </div>
                                                    <div class="modal-footer" style="margin-top:150px;">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                        <button type="button" class="btn btn-primary">Salvar</button>
                                                    </div>
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
                                                    <div class="modal-body">
                                                        <form role="form">
                                                            <div class="form-group col-md-6" >
                                                                <label for=medico" >Selecione:</label>
                                                                <select class="form-control" id="medico">Escolha</select>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer" style="margin-top:85px;">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                        <button type="button" class="btn btn-primary">Salvar</button>
                                                    </div>
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
                                                    <div class="modal-body">
                                                        <form role="form">
                                                            <div class="form-group col-md-6" >
                                                                <label for=medico" >Selecione:</label>
                                                                <select class="form-control" id="medico">Escolha</select>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer" style="margin-top:85px;">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                        <button type="button" class="btn btn-primary">Salvar</button>
                                                    </div>
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
                                                    <div class="modal-body">
                                                        <form role="form">
                                                            <div class="form-group col-md-10">
                                                                <label for="senhaantiga">Digite sua Senha:</label>
                                                                <input type="text" class="form-control" id="senha antiga">
                                                            </div>
                                                            <div class="form-group col-md-10">
                                                                <label for="senha">Digite sua nova Senha:</label>
                                                                <input type="text" class="form-control" id="senha">
                                                            </div>
                                                            <div class="form-group col-md-10">
                                                                <label for="senha2">Confirme sua Senha:</label>
                                                                <input type="text" class="form-control" id="senha2">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer" style="margin-top:230px;">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                                                        <button type="button" class="btn btn-primary">Salvar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="list-group-item" data-toggle="modal" data-target="#myModal5">Não receber lembretes do Sistema</a>
                                        <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Aviso</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        Você tem certeza que não deseja receber lembretes do Sistema?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                                        <button type="button" class="btn btn-primary">Sim</button>

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