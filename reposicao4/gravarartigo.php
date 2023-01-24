<?php

$titulo=$_POST["titulo"];
$autor=$_POST["autor"];
$artigo=$_POST["artigo"];
$foto=$_FILES["foto"];

$ext=explode(".",$foto["nome"]);
$ext=array_reverse($ext); 
$ext=$ext[0];
$ext=strtolower($ext);


if (($ext != "jpg") && ( $ext !="gif")){
    echo " Arquivo Inválido ";
}elseif ($foto[" tamanho "] <1024 * 8){
     echo " Tamanho excedido ";
}else
?> <?php

//PASSO 2- montar a conexão com o banco de dados
include_once './conexao.php';

$nomefoto=date("YmdHis").rand(0000,9999).".".$ext;


//PASSO 3- montar o sql de gravar no banco
$sql =" insert into artigo values
(null,' ". $titulo." ',' ".$autor." ',' ".$artigo." ',' ".$nomefoto." ')";

//PASSO 4- manda esse comando para o mysql
if (mysqli_query($con,$sql)){

    $msg = "Gravado com sucesso!";

    move_uploaded_file($foto["tmp_name"],"./upload/".$nomefoto);

}else{
    $msg = " Erro ao gravar. ";
}
mysqli_close( $con );
echo " <script> alert(' ".$msg." ');
//  location.href = 'artigo.php'; 
 </script> ";
?>





