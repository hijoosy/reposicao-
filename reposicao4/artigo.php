<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div id="total">
        <div id="topo">
            <div id="logo">
                <img src="img/logo2.png" alt="logotipo do site">
            </div><!--fecha a div logotipo-->
            <div id="menu">
                <a href="index.php">Página Inicial</a>
                <a href="#">Quem Somos</a>
                <a href="#">Produtos</a>
                <a href="artigo.php">Artigo</a>
                <a href="#">Contato</a>
            </div><!--fecha a div menu-->
        </div><!--fecha divisão topo-->
        <div id="banner">
            <img src="img/banner1.jpg" alt="banner do site">
        </div>
        
        <div id="artigo">

       <form action="gravarartigo.php" method="post" enctype"multipart/form-data">
        <h1>Cadastro de Artigo<h1>
        Titulo:<br>
        <input type="text" name="titulo" required="required"><br>
        Autor:<br>
        <input type="text" name="autor" required="required"><br>
        Artigo:<br>
        <textarea name="artigo"></textarea><required="required"><br>
        Foto: <br/>
         <input type="file" name="foto" required="required"/><br>
        <br>
         <input type="submit" value="Cadastrar"/>
    </form>
    </div>
    <div id="artigo2">
        <h2>Artigos</h2>
        <?php 
            //abrir conexao com o banco
            include_once 'conexao.php'; 
            $sql="select * from artigo";
            $result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_array($result)){
             ?>   
                <h4>Titulo:<?php  echo $row["titulo"];?></h4>
                <h4>Autor:<?php  echo $row["autor"];?></h4>
                <h4>Artigo:<?php  echo $row["artigo"];?></h4>
                <img src="upload/<?php echo $row["foto"];?>" alt="">
                <?php
            }

        ?>
      
    </div>


        <div id="destaque">
            <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Expedita rem fugiat, 
                ratione ab qui tempora quod, molestias mollitia aut harum, 
                iste maxime dicta ducimus id modi iusto. Doloribus, dicta iure.
            </h1>

            <h4>Bruna Tavares</h4>
        </div>

        <div id="rodape">
            Beauty Makeup 
        </div>
    </div><!--fecha divisão total-->
</body>
</html>