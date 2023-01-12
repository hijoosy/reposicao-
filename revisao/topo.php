<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--javascript que colocamos-->
    <script src="js/jquery-1.8.0.min.js"></script>
    <!--link css do bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--link javascript do bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--mascara-->
    <script src="js/jquery.maskedinput.js"></script>

    

<!--cep 99999-999
  placa de carro LLL9L999
  numero de telefone (99)99999-9999 / 
  0= obrigado a preencher o campo/ 9= opcional preencher o campo -->

  <script>
        $(document).ready(function(){
            $("#tela").hide();
            $("#telefone").mask("(99)99999-9999");

        $("#btn").click(function(){
         $("#tela").toggle(1000);
        });

        });
    </script>
</head>
<body>
    <div class="container">

            <a href="#" id="btn">Cadastro de Aluno</a>
            <br>
            <a href="consulta.php">Consulta de Aluno</a>

                <hr>

            