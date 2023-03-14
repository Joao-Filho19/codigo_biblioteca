<?php
//conexao.php

$mysqli = new mysqli ("localhost", "root","", "bibli");

if(mysqli_connect_errno()){
	//exibe o erro
	echo "Erro de conexão: ".$mysqli->error;
	exit(0);
}
?>