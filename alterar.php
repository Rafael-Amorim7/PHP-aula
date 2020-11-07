<?php
    include ("conexao.php");
    $nome = ""; $cpf = ""; $endereco=""; $cep=""; $email=""; $codigo="";


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
    if (!empty($_POST["codigo"])){
      $codigo = $_POST["codigo"];
  }

    $sql = "UPDATE pessoas SET nome = '$nome', cpf = '$cpf', endereco = '$endereco', cep = '$cep', email = '$email' WHERE codigo = $codigo";
    $status = $conecta->query($sql);

    echo "<script>alert('Registro alterado'); location.href='index.php'</script>";
?>