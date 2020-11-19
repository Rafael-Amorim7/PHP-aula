<?php
    include ("conexao.php");
    $nome = ""; $cpf = ""; $endereco=""; $cep=""; $email=""; $weekdays=""; $time="";


    if (!empty($_POST["Nome"])){
        $nome = $_POST["Nome"];
    }
    
    if (!empty($_POST["cpf"])){
        $cpf = $_POST["cpf"];
    }
    
    if (!empty($_POST["endereco"])){
        $endereco = $_POST["endereco"];
    }
    
    if (!empty($_POST["cep"])){
        $cep = $_POST["cep"];
    }
    if (!empty($_POST["email"])){
        $email = $_POST["email"];
    }

    if (!empty($_POST["weekdays"])){
        $weekdays = $_POST["weekdays"];
    }

    if (!empty($_POST["time"])){
        $time = $_POST["time"];
    }

    $sql = "INSERT INTO pessoas(Nome,cpf,endereco,cep,email,weekdays,time) VALUES ('$nome','$cpf','$endereco','$cep','$email', '$weekdays', '$time')";
    $status = $conecta->query($sql);

    echo "<script>alert('Registro cadastrado'); location.href='index.php'</script>";
?>