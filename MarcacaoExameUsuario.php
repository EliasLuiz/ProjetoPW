<!DOCTYPE html>
<html>
    <head>
        <title>Marca&ccedil;&atilde;o de Exame</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div>
            <form id="marcaExame" method="post" action="MarcacaoExameUsuario.php">					
                <ul >
                    <?php
                        require_once 'classes/V/IMarcacaoExame.php';

                        $interf = new IMarcacaoExame();
                        $texames = $interf->listaTipoExame();
                    ?>
                    <li id="li_1" >
                        <label for="ddd">cdTipoExame </label>
                        <div>
                            <input name="cdTipoExame" type="text" id="cdTipoExame" size="6" maxlength="3" value="DDD"/>
                        </div> 
                    </li>
                    <?php
                        $interf = new IMarcacaoExame();
                        $texames = $interf->listaMedicoCliente();
                    ?>
                    <li id="li_2" >
                        <label for="ddd">cdMedico </label>
                        <div>
                            <input name="cdMedico" type="text" id="cdMedico" size="6" maxlength="3" value="DDD"/>
                        </div> 
                    </li>
                    <?php
                        $interf = new IMarcacaoExame();
                        $texames = $interf->listaTipoExame();
                    ?>
                    <li id="li_3" >
                        <label for="ddd">cdConvenio </label>
                        <div>
                            <input name="cdConvenio" type="text" id="cdConvenio" size="6" maxlength="3" value="DDD"/>
                        </div> 
                    </li>
                    <?php
                        $interf = new IMarcacaoExame();
                        $texames = $interf->listaTipoExame();
                    ?>
                    <li id="li_4" >
                        <label for="ddd">cdConsulta </label>
                        <div>
                            <input name="cdConsulta" type="text" id="cdConsulta" size="6" maxlength="3" value="DDD"/>
                        </div> 
                    </li>
                    <li id="li_5" >
                        <label for="ddd">Data do Exame </label>
                        <div>
                            <input name="dataExame" type="text" id="dataExame" size="6" maxlength="3" value="DDD"/>
                        </div> 
                    </li>>
                    <li id="li_6" >
                        <label for="ddd">Data da Coleta em Domic&iacute;lio </label>
                        <div>
                            <input name="dataColeta" type="text" id="dataColeta" size="6" maxlength="3" value="DDD"/>
                        </div> 
                    </li>
                    <li>

                        <input id="saveForm" type="submit" name="submit" value="Enviar" />
                        <input id="resetForm" type="reset" name="submit" value="Cancelar" />
                    </li>
                </ul>
            </form>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['cd'])){
        $interf = new IMarcacaoExame();
        $interf->marcaExame($_SESSION['cd'], );
    }
?>