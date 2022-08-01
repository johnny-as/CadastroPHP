<?php
	require 'connection.php';
	
	if (isset($_POST['submit']))
	{
		require 'autoload.php';
		$produtos = new \App\Restaurante\Produtos($_POST['produto'], $_POST['valor']);
	}

	$sql = "SELECT * FROM itens";

	$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
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
				<form id="cadastrar-produto" action="cadastroproduto.php" method="POST">
					<fieldset>
						<legend>Cadastro de Produtos</legend>
						<div class="mb-3">
							<label for="produto">Descrição do Produto:</label>
							<input id="produto" class="w-50" name="produto" type="text" placeholder="Digite o nome do seu produto">
						</div>
                        <div class="mb-3">
							<label for="valor">Valor Unitário:</label>
							<input id="valor" name="valor" type="text" placeholder="999,99">
						</div>
						<div class="p-3">
							<button id="add-cliente" type="submit" name="submit" class="btn btn-primary">Salvar Dados</button>
						</div>
					</fieldset>
				</form>
			</section>
			<section>
				<table class="table table-striped">
					<thead>
						<tr>
						<th scope="col">#</th>
						<th scope="col">Produto</th>
						<th scope="col">Valor</th>
						</tr>
  					</thead>
  					<tbody>
						<?php 
							while($user_data = mysqli_fetch_assoc($result)){
								echo "<tr>";
								echo "<td>".$user_data['id']."</td>";
								echo "<td>".$user_data['nome']."</td>";
								echo "<td>R$ ".$user_data['valor']."</td>";
								echo "</tr>";
							}
						?>
  					</tbody>
				</table>
			</section>
	</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>
