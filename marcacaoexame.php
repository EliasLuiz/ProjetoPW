
<?php
//session_start();
require_once './classes/M/TipoExame.php';
require_once './classes/M/Convenio.php';
?>
<script language="JavaScript" type="text/javascript"
src="js/jquery-2.1.1.js"></script>
<script language="JavaScript" type="text/javascript"
src="js/jquery.maskedinput.js"></script>
<script type="text/javascript">

    jQuery(function($) {
        $("#data").mask("99/99/9999");

    });

</script>
<div id="content">
    <div id="left">
        <div id="welcome" align="center">
            <h2> MARCAÇÃO DE EXAME</h2>
            <div class="clear"></div><br>

            <div id="form_contact">
                <br />
                <form id="marcacaoexame" name="marcacaoexame" method="post" action="marcacaoExameUsuario.php" border="0" method="post">
                    <fieldset><legend class="texte_legende"></legend>
                        <table cellpadding=5 cellspacing=0 border="0">
                            <tr>
                                <td>Exame:</td>

                                <td><select name="exames1" id="exames1">
                                        <?php
                                        $tipoExame = new TipoExame(); //roda essa pagina agora
                                        $tipos = $tipoExame->listaTipoExame();
                                        foreach ($tipos as $exames) {
                                            echo '<option>' . $exames['nome'] . '</option>';
                                        }
                                        ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Data:</td>
                                <td><input name="data" type="text" id="data" size="8"/>
                                    <script>
                                        $(function() {
                                            // $("#calendario").datepicker();
                                        });
                                    </script>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Horários Disponíveis:</td>
                                <td><select name="horario" id="horario">
                                        <option>Selecione...</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>
                                    Informações:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    Requisitos:</td>
                                <td><!--requisitos aki--></td>
                            </tr>
                            <tr>
                                <td><input type="radio" checked="checked" name="pagamento" value="particular">Particular</td>
                                <td><input type="radio" name="pagamento" value="convenio">Convênio</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div>
                                        <select name="convenio" id="convenio">
                                            <?php
                                            $convenio = new Convenio(); //roda essa pagina agora
                                            $tipos = $convenio->listaConvenio();
                                            foreach ($tipos as $convenios) {
                                                echo '<option value>' . $convenios['nome'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="coleta" value="coleta">Coleta domiciliar</td>
                            </tr>
                            <tr>
                                <td>
                                    Preço:</td>
                                <td><!--requisitos aki--></td>
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
