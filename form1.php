<?php
    if (isset($_POST["submit"])) {
        include_once("config.php");

        $nome = $_POST["nome"];
        $nascimento= $_POST["nascimento"];
        $genero = $_POST["genero"];
        $endereco = $_POST["endereco"];
        $ntelefone = $_POST["ntelefone"];
        $registromedico = $_POST["registromedico"];

        $response = mysqli_query($conexao, "INSERT INTO paciente(nome,DataNascimento,Genero,Endereco,NumeroTelefone,RegistroMedico) VALUES('$nome','$nascimento','$genero','$endereco','$ntelefone','$registromedico')");

    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form1.css">
    <title>Document</title>
</head>
<body>
    <form action="form1.php" method="post">
    <section>
        <label for="">Nome</label>
        <input type="text" name="nome" placeholder="digite seu nome">
        <label for="">Data de Nascimento</label>
        <input type="text" name="nascimento" placeholder="digite sua Data de Nascimento">
        <label for="">Genero</label>
        <input type="text" name = "genero" placeholder="digite seu Genero">
        <label for="">Endereço</label>
        <input type="text" name="endereco" placeholder="Informe seu endereço">
        <label for="">Numero de telefone</label>
        <input type="text" name="NTelefone" placeholder="Digite seu numero de telefone">
        <label for="">Registro Medico</label>
        <input type="text" name="registromedico" placeholder="Digite o numero de registro do medico">
        <input type="submit" name="submit" id = "submit" >

    </section>
    <button><h2>Enviar</h2></button>
    </form>
</body>
</html>