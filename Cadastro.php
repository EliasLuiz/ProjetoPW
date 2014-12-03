<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro</title>
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
                <div class="col-md-3 col-md-offset-2" style="margin-left: 220px; margin-top: 30px;"><center><h1 style="color: #0044cc; font-family: Tahoma;">Cadastro</h1></center></div>
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
            </div>
        </div>
        <form class="form-horizontal" role="form">
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
                    <div class="col-sm-5">
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
                    <label for="inputSenha2" class="col-sm-3 control-label">Confirmar Senha:</label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control" id="senha2" name="senha2" placeholder="Senha" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputUsuario" class="col-sm-2 control-label">Usuário:</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio" name="usuario" id="inputpaciente" value="paciente"> Paciente
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="usuario" id="inputmedico" value="medico"> Médico
                        </label>
                    </div>
                </div>
                <div  id="divpaciente" style="margin-top:21px;" >
                    <div class="form-group" >
                        <label for="inputRua" class="col-sm-2 control-label">Rua:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua">
                        </div>
                        <label for="inputNumero" class="col-sm-2 control-label">Número:</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="numero" name="numero" placeholder="Numero">
                        </div>
                    </div>
                    <div class="form-group" style="margin-top:23px;">
                        <label for="inputComplemento" class="col-sm-2 control-label">Complemento:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento">
                        </div>
                    </div>
                    <div class="form-group" style="margin-top:23px;">
                        <label for="inputCidade" class="col-sm-2 control-label">Cidade:</label>
                        <div class="col-sm-2"><select class="form-control" name="cidade" id="cidade" placeholder="Cidade">
                                <option>Cidade</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select></div>
                        <label for="inputBairro" class="col-sm-2 control-label">Bairro:</label>
                        <div class="col-sm-2"><select class="form-control" name="bairro" id="bairro" placeholder="Bairro">
                                <option>Bairro</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select></div>
                    </div>
                    <div class="form-group">
                        <label for="inputMedicamento" class="col-sm-2 control-label">Faz uso de Medicamento controlado:</label>
                        <div class="col-sm-3" style="margin-top: 21px;">
                            <label class="radio-inline">
                                <input type="radio" name="medicamento" id="inputmedsim" value="sim"> Sim
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="medicamento" id="inputmednao" value="nao"> Não
                            </label>
                        </div>
                    </div>
                    <div id="divmedicamento" style="margin-top:23px;">
                        <div class="form-group">
                            <label for="inputNomeMedicamento" class="col-sm-2 control-label">Medicamentos:</label>
                            <div class="col-sm-7">
                                <textarea class="form-control" id="nomemedicamentos" name="nomemedicamentos" placeholder="Nome dos Medicamentos" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="divmedico" style="margin-top:21px;" >
                    <div class="form-group" >
                        <label for="inputCRM" class="col-sm-2 control-label">CRM:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="crm" name="crm" placeholder="CRM">
                        </div>
                    </div>
                </div>
                <div class="form-group" style="margin-top: 35px;">
                    <div class="col-sm-offset-6 col-sm-10">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
        <div style="height:30px; text-align:center; padding-top:15px; background: linear-gradient(top , rgb(234, 234, 234) , rgb(203, 203, 203) 100%);
             background: -o-linear-gradient(top , rgb(234, 234, 234) , rgb(203, 203, 203) 100%);
             background: -ms-linear-gradient(top , rgb(234, 234, 234) , rgb(203, 203, 203) 100%);
             background: -moz-linear-gradient(top , rgb(234, 234, 234) , rgb(203, 203, 203) 100%);
             background: -webkit-linear-gradient(top , rgb(234, 234, 234) , rgb(203, 203, 203) 100%); margin-top: 890px;q"><small><p>Copyright <b>BIOCESP Laboratório</b> - &copy; 2014 - Todos os direitos reservados</p></small></div>



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
            $('#divmedico').hide('fast');
            $('#divpaciente').hide('fast');
            $('#divmedicamento').hide('fast');
            $('#inputpaciente').click(function () {
                $('#divpaciente').show('fast');
                $('#divmedico').hide('fast');
            });
            $('#inputmedico').click(function () {
                $('#divmedico').show('fast');
                $('#divpaciente').hide('fast');
            });
            $('#inputmedsim').click(function () {
                $('#divmedicamento').show('fast');
            });
            $('#inputmednao').click(function () {
                $('#divmedicamento').hide('fast');
            });
        });
    </script>


</body>
</html>