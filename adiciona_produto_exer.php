<?php
/**
 * Created by PhpStorm.
 * User: jaimerson
 * Date: 20/05/17
 * Time: 17:56
 */
include ("cabecalho.php");
include ("conecta.php");
$nome = $_GET["nome"];
$preco = $_GET["preco"];

$query = "insert into produtos (nome, preco) VALUE ('{$nome}',{$preco})";

if (mysqli_query($conexao,$query)){
    echo "<p class='alert-success'>Produto $nome, $preco adicionado com sucesso!! </p>";
}else{
    echo "<p class='alert-danger'>O produto $nome não foi adicionado</p>";
}