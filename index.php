<?php

//Faz a conexão com o banco		
require 'connection.php';

		//Pega os dados através do $_POST e faz o insert no banco de dados	
		if (isset($_POST['submit']))
		{
			require 'autoload.php';
			$pedido = new \App\Restaurante\Pedido($_POST['nome'],$_POST['mesa'], $_POST['quant'], $_POST['prato']);
		}

		//Carrega todos os dados do banco da tabela itens e carrega no select
		$sql = "SELECT * FROM itens";

		$result = $conn->query($sql);

		//Carrega todos os dados do banco da tabela cliente e carrega no select
		$sql2 = "SELECT * FROM clientes";

		$result2 = $conn->query($sql2);

		//Carrega todos os dados do banco das tabelas cliente, itens, pedidos e pedidos_itens com seleção de dados
		$sql3 = "SELECT 
		c.nome as nome_cliente, pi.mesa as mesa, i.nome as prato, p.quantidade as quant, i.valor as valor_unit, p.valor_total
			FROM
				pedidos_itens pi
			JOIN
				pedidos p
			ON 
				pi.id_pedido = p.id
			JOIN
				itens i
			ON 
				pi.id_item = i.id
			JOIN
				clientes c
			ON 
				p.id_cliente = c.id;";
		
		$result3 = $conn->query($sql3);
		

		

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Restaurante Dom Frederico</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
	<Header>
		<nav class="navbar bg-light">
			<div class="container">
			<a class="navbar-brand" id="nav-fred" href="#">
				<img src="img/logo.png" alt="Logo Dom Frederico" width="50" height="50">
				<h3 class="text-start">Dom Frederico</h3>
			</a>
			</div>
		</nav>
	</Header>
	<main>
		<section>
			<form id="adicionar-pedido" action="index.php" method="POST">
				<fieldset>
					<legend>Pedido</legend>
					<div class="mb-3">
						<label for="nome">Nome do Cliente:</label>
						<select id="nome" name="nome" class="form-select">
							<option>Escolha</option>
							<?php 
								while($user_data = mysqli_fetch_assoc($result2)){
									echo "<option>".$user_data['id']." - ".$user_data['nome']." - ".$user_data['celular']."</option>";
								}
									
							?>
						</select>
					</div>
					<div class="mb-3">
						<label for="num" class="form-label">Número da Mesa</label>
						<select id="mesa" name="mesa" class="form-select">
						  <option>Escolha</option>
						  <option>Mesa 1</option>
						  <option>Mesa 2</option>
						  <option>Mesa 3</option>
						  <option>Mesa 4</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="prato" class="form-label">Escolha o prato</label>
						<select id="prato" name="prato" class="form-select">
							<option>Escolha</option>
							<?php 
								while($user_data = mysqli_fetch_assoc($result)){
									echo "<option>".$user_data['id']." - ".$user_data['nome']." - R$ ".$user_data['valor']."</option>";
								}
								
							?>
						</select>
					</div>
					<div class="mb-3">
						<label for="nome">Quantidade:</label>
						<input id="qtd" name="quant" type="text" placeholder="quantidade de pratos" class="campo">
					</div>
					<div class="p-3">
				  		<button id="add-pedido" type="submit" name="submit" class="btn btn-primary">Adicionar Pedido</button>
					</div>
				</fieldset>
			  </form>
		</section>
		<section class="p-3">
			<h2>Meus pedidos</h2>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Nome Cliente</th>
							<th scope="col">Mesa</th>
							<th scope="col">Prato</th>
							<th scope="col">Quantidade</th>
							<th scope="col">Valor Unitário</th>
							<th scope="col">Valor Total</th>
						</tr>
					</thead>
					<tbody id="tabela-pedido">
							<?php 
								while($user_data = mysqli_fetch_assoc($result3)){
									echo "<tr>";
									echo "<td>".$user_data['nome_cliente']."</td>";
									echo "<td>".$user_data['mesa']."</td>";
									echo "<td>".$user_data['prato']."</td>";
									echo "<td>".$user_data['quant']."</td>";
									echo "<td>R$ ".$user_data['valor_unit']."</td>";
									echo "<td>R$ ".$user_data['valor_total']."</td>";
									echo "</tr>";
								}
								
							?>
					</tbody>
				</table>
		</section>
	</main>
	<script src="js/jquery.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>