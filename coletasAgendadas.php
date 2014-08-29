<?php
?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">

    jQuery(function($) {
        $( "#calendario" ).datepicker({
        dateFormat: 'dd-mm-yy',
    });



    });

</script>
<script> function displayVals3() {
        var value = $("#calendario").val();

        $.ajax({
            url: 'FuncoesAJAX.php',
            data: {acao: 'gerarelatorio', cod: value},
            type: 'POST',
            success: function(output) {
                $('#exibe3').html(output);
            }
        });
    }
</script>
<div id="content">
    <div id="left">
        <div id="welcome" align="center">
            <h2> Coletas Agendadas</h2>
            <div class="clear"></div><br>

            <div style="font-family: arial,sans-serif;">
                
                <table cellpadding=5 cellspacing=0>
                    <tr>
                <td>Data: <input type="text" id="calendario" size="8" onchange="displayVals3()"/>&nbsp;
                    <script>
                        $(function() {
                            // $("#calendario").datepicker();
                        });
                    </script>
                    
                </td>
                    <tr>
                        </table>
                <div id="exibe3"></div>
                

            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>


