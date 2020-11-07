<?php
    include ("conexao.php");
    
    $id = "";

    if (!empty($_POST["idRegistro"])){
      $id = $_POST["idRegistro"];
    }

    $sql = "delete from pessoas where codigo = $id";
    $status = $conecta->query($sql);

    echo "<script>alert('Registro apagado'); location.href='index.php'</script>";
?>