<?php include("cabecalho.php"); ?>
<?php
	function insereProduto($conexao,$nome,$preco)
	{
		$query = "insert into produtos (nome,preco) values ('{$nome}',{$preco})";
		return mysqli_query($conexao,$query);
	}

	$nome = $_GET["nome"];
	$preco = $_GET["preco"];
	$conexao = mysqli_connect('localhost','root','','loja');
		
	if (insereProduto($conexao,$nome,$preco)) { ?>
		<p class="text-success">Produto <?=$nome?>,<?=$preco ?> adicionado com sucesso!</p>
	<?php } else { ?>
		<p class="text-danger">Produto <?=$nome?> não foi adicionado!</p>
		
	<?php }
		mysqli_close($conexao); 
	?>
			
<?php include("rodape.php"); ?>
