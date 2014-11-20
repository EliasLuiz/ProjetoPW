<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Área Médica</title>
         <link rel="stylesheet" href="css/example.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <script src="js/jquery-1.8.2.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script>
        $(function () {
            $("#calendario").datepicker();
        });
    </script>
        

    </head>
    <body>
  <div class="container">

      <h1 align="center">
        Testando Datepicker for Bootstrap
      </h1>

      <br>

      <div class="row">

        <!-- Div utilizada para enquadrar input de teste no centro da tela -->
        <div class="col-sm-offset-4 col-sm-4">
          <!-- Input ao qual foi designado a função para exibir o calendário, que vai ser selecionado com jquery na função abaixo. -->
          <input type="text" id="calendario">
        </div>

      </div>

    </div>

    
    

  </body>
</html>