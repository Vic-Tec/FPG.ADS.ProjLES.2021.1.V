<?php
include_once("conecta.php");

if(!empty($_POST))
{
	$nome = $_POST['fnome'];
    $sobrenome = $_POST['fsobrenome'];
	$genero = $_POST['fgenero'];
	$datanasc = $_POST['fdatanasc'];
	$email = $_POST['femail'];
	$senha = $_POST['fsenha'];
	$telcel = $_POST['ftelcel'];
	$cidade = $_POST['fcidade'];

	$senha = md5($senha);
	
	$sql = "INSERT INTO motorista (nome, sobrenome, genero, datanasc, email, senha, telcel, cidade) 
	VALUES ('${nome}', '${sobrenome}', '${genero}', '${datanasc}', '${email}', '${senha}', '${telcel}', '${cidade}')";

   $query = $db->query($sql);
 
	if ($query){
		mysqli_close($db);
		header("Location: acesso.php?msg=4");
		exit;
	}
	else {
		mysqli_close($db);
		header("Location: acesso.php?msg=3&femail=$email");
		exit;
	}

}
?>