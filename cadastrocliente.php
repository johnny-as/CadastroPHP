<!DOCTYPE html>
<html lang="en">
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
				<form id="cadastrar-cliente">
					<fieldset>
						<legend>Cadastro de Clientes</legend>
						<div class="mb-3">
							<label for="nome">Nome do Cliente:</label>
							<input id="nome" class="form-control" name="nome" type="text" placeholder="Digite o nome do seu cliente">
						</div>
						<div class="mb-3">
							<label for="fone">Telefone:</label>
							<input id="fone" class="form-control" name="fone" type="text" placeholder="(99)99999-9999">
						</div>
						<div class="p-3">
							<button id="add-cliente" type="submit" class="btn btn-primary">Salvar Dados</button>
						</div>
					</fieldset>
				</form>
			</section>
	</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>
