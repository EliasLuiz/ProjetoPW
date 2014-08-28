<?php
//session_start();
require_once __DIR__ . '/classes/M/TipoExame.php';
require_once __DIR__ . '/classes/M/Convenio.php';
    $interf = new IMarcacaoExame();
//require_once './classes/V/FuncoesAJAX.php';

//$tipoExame = new TipoExame(); //roda essa pagina agora
//$tipos = $tipoExame->listaTipoExame();
?>
<script language="JavaScript" type="text/javascript"
src="js/jquery-2.1.1.js"></script>
<script language="JavaScript" type="text/javascript"
src="js/jquery.maskedinput.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    function showUser(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else { // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("POST", "FuncoesAJAX.php?q=" + str, true);
        xmlhttp.send();
    }
</script>
<script type="text/javascript">

    jQuery(function($) {
        $("#data").mask("99/99/9999");
    });</script>

<script> function displayVals() {
        var value = $("#exames1").val();
        
        $.ajax({
            url: 'FuncoesAJAX.php',
            data: {acao: 'dadosTipoExame', cod: value},
            type: 'POST',
            success: function(output) {
                $('#exibe').html(output);
            }
        });}
    </script>
<script> function displayVals2() {
        var value = $("#data").val();

     $.ajax({
            url: 'FuncoesAJAX2.php',
            data: {acao: 'gerahorarios', cod: value},
            type: 'POST',
            success: function(output) {
                $('#exibe2').html(output);
            }
        });}
    </script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
             <script type="text/javascript">
                 $(document).ready(function () {
                     $('#div1').hide('fast');
                    $('#id_radio1').click(function () {
                       $('#div1').hide('fast');
                });
                $('#id_radio2').click(function () {
                      $('#div1').show('fast');
                 });
               });
</script>
<div id="content">
    <div id="left">
        <div id="welcome" align="center">
            <h2> MARCA&Ccedil;&Atilde;O DE EXAME</h2>
            <div class="clear"></div><br>

            <div id="form_contact">
                <br />
                <form id="marcacaoexame" name="marcacaoexame" method="post" action="marcacaoExameUsuario.php" border="0" method="post">
                    <fieldset><legend class="texte_legende"></legend>
                        <table cellpadding=5 cellspacing=0 border="0">
                            <thead>
                                <td>Exame:</td>
                                <td><select name="exames1" id="exames1" onclick="displayVals()"><option>Selecione</option>
                                        <?php
                                        $interf->comboboxTipoExame();
                                        ?>
                                    </select></td>
                            </thead>
                            <thead id="exibe"></thead>
                            <tr>
                                <td>Data:</td>
                                <td><input name="data" type="text" id="data" size="8" onblur="displayVals2()"/>
                                    <script>
                                        $(function() {
                                            // $("#calendario").datepicker();
                                        });
                                    </script>
                                </td>
                            </tr>
                            <thead id="exibe2"></thead>
                            <tr>
                                <td>
                                    Hor&aacute;rios Dispon&iacute;veis:</td>
                                <td><select name="horario" id="horario">
                                        <option>Selecione...</option>
                                    </select></td>
                            </tr>
                            <tr>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div id="div1">
                                        <select name="convenio" id="convenio"><option>Selecione</option>
                                            <?php
                                            $interf->comboboxConvenioCliente($_SESSION['cd']);
                                            ?>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="coleta" value="coleta">Coleta domiciliar</td>
                            </tr>
                        </table>
                    </fieldset>
                    <br>

                    <table cellpadding=0 cellspacing=0 border="0">
                        <tr>
                            <td colspan="2" align="center"><input class="button_send" type="submit" value="Marcar Exame"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>
