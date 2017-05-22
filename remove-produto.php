<?php
/**
 * Created by PhpStorm.
 * User: jaimerson
 * Date: 20/05/17
 * Time: 21:38
 */

include ("cabecalho.php");
include ("conecta.php");
include ("banco-produto.php");

$id = $_POST['id'];

removeProduto($conexao, $id);
header("Location: produto-lista.php?removido=true");
die();
include ("rodape.php");

?>
