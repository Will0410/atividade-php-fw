<?php

require_once ('../Models/funcClass.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>-== Ajuste salárial ==-</title>
</head>
<body>
  <section>
    <h1>-== Ajuste Salárial ==-</h1>
  </section>
  <?php
    $func = new Funcionario ();
    
    $func->setNome($_POST['nome']);
    $func->setSalario($_POST['salario']);
    $func->setDepto($_POST['departamento']);

    $func->imprimeDadosFunc();

    $func->salarioDepto ();
    ?>
</body>
<style>
  *{
    margin: 0;
    padding: 0;
}
body{
    background-color: rgba(30,52,50,0.7);
}
section{
    padding: 20px;
    background-color: rgba(127, 255, 212,0.2);
    border-radius: 0px 0px 50px 50px;
}
h1{
    color: #f0ffff;
    font-size: 3.5rem;
    text-align: center;
}
form{
    justify-content: center;
    align-items: center;
    margin-left: auto;
    margin-right: auto;
}
article{
    font-weight: bold;
    margin-top: 10%;
    display: flex;
    margin-left: auto;
    margin-right: auto;
}
input{
    height: 10%;
    width: 100%;
    padding: 10px;
    margin-bottom: 10%;
    align-self: center;
}
label{
    font-weight: bolder;
    font-size: 15px;
    color: #f0ffff;
}
</style>
</html>