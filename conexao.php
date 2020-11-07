<?php
$conecta = mysqli_connect("localhost", "root", "");
 
$conecta->set_charset("UTF8");


if($conecta->connect_error){
	die("Falha ao conectar: ". $conecta->connect_error);
}
if(!$conecta->select_db("bancophp")) {
	die("O Banco de dados não existe");
}
?> 