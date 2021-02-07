<?php	//arquio:	conexao.php
//conexao utilizando Mysqli = melhorado

$servidor	="localhost";
$user		="root";
$senha		="";
$bd			="bdnews";

//mysqli_connect(server,user,password,bd)

$conn = mysqli_connect("$servidor","$user","$senha","$bd");
if (!$conn){	//espera a resposta true
	echo "Conexão com o <b>BD Falhou!!!<b>";
}