<?php

$nome = $_POST['txtNome'];
$Horario = $_POST['hourHora'];
$Telefone = $_POST['phoneNum'];

include "clsConexao.php";

if( isset( $_REQUEST['inserir']) ){
	$query = "INSERT INFO Main_Code (Nome) VALUES ( '$Nome' )";
	Conexao::executar( $query );
	header("Location: Main_Code.php");
}
if( isset( $_REQUEST['inserir']) ){
	$query = "INSERT INFO Main_Code (Horario) VALUES ( '$Horario' )";
	Conexao::executar( $query );
	header("Location: Main_Code.php");
}
if( isset( $_REQUEST['inserir']) ){
	$query = "INSERT INFO Main_Code (Telefone) VALUES ( '$Telefone' )";
	Conexao::executar( $query );
	header("Location: Main_Code.php");
}