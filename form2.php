<?php
    if (isset($_POST["submit"])) {
        include_once("config.php");

        $nome = $_POST["nome"];
        $especialidade= $_POST["especialidade"];
        $registromedico = $_POST["registromedico"];
        $ntelefone = $_POST["ntelefone"];
        $email = $_POST["email"];
        
        

        $response = mysqli_query($conexao, "INSERT INTO medico(Nome,EspecialidadeMedica,RegistroMedico,NumeroTelefone,Email) VALUES('$nome','$especialidade',' $registromedico','$ntelefone','$email')");

    }
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form2.css">
    <title>Document</title>
</head>
<body>
<form action="form2.php" method="post">
    <section>
        <label for="">Nome</label>
        <input type="text" name="nome" placeholder="digite seu nome">

        <label for="">Especialidade Medica</label>
        <input type="text" name="especialidade" placeholder="digite sua Especialidade">

        <label for="">Registro Medico</label>
        <input type="text" name="" placeholder="Digite o numero de registro do medico">
        
        <label for="">Numero de telefone</label>
        <input type="text" name="numerotelefone" placeholder="Digite seu numero de telefone">
  

        <label for="">E-mail</label>
        <input type="text" name="email" placeholder="digite seu Endereço de e-mail">
        <input type="submit" name="submit" id = "submit" >
    </section>
</form>
    <button><h2>Enviar</h2></button>
</body>
</html>