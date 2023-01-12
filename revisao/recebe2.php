<?php 
//captura de  dados.
$nome=$_POST["nome"];
$email=$_POST["email"];
$telefone=$_POST["telefone"];
$data= date("d/m/y");

include_once'conexao.php';
// montar a instrução pra gravar no banco de dados.
$novadata= explode("/",$data);
$novadata= array_reverse($novadata);
$data1= implode("-",$novadata);


$sql= "insert into aluno values
(null,'".$nome."','".$email."','".$telefone."','".$data."')";

//executar.

if(mysqli_query($con,$sql)){
   $msg = "Gravado com sucesso!";
}else{
    $msg = "Erro ao gravar.";
}

mysqli_close($con);
header("location:formulario2.php?msg" .$msg);

?>